<?php
class JdClient
{
	public $serverUrl = "https://api.jd.com/routerjson";

	public $accessToken;

	public $connectTimeout = 0;

	public $readTimeout = 0;

	public $appKey;

	public $appSecret;

	public $version = "2.0";

	public $format = "json";

	private $charset_utf8 = "UTF-8";

	private $json_param_key = "360buy_param_json";

	protected function generateSign($params)
	{
		ksort($params);
		$stringToBeSigned = $this->appSecret;
		foreach ($params as $k => $v)
		{
//            if(!is_string($v) && is_array($v)){
            if($this->json_param_key == $k){
                $stringToBeSigned .= "$k".json_encode($v, JSON_UNESCAPED_SLASHES);
            }else{
                $stringToBeSigned .= "$k$v";
            }

		}
		unset($k, $v);
		$stringToBeSigned .= $this->appSecret;
		return strtoupper(md5($stringToBeSigned));
	}

	public function curl($serverUrl, $sysParams)
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_FAILONERROR, false);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		if ($this->readTimeout) {
			curl_setopt($ch, CURLOPT_TIMEOUT, $this->readTimeout);
		}
		if ($this->connectTimeout) {
			curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $this->connectTimeout);
		}
		//https 请求
		if(strlen($serverUrl) > 5 && strtolower(substr($serverUrl,0,5)) == "https" ) {
			curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
			curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		}

        // 此处修改暂时为了保证顺利上传，直接base64编码文件流的方式来上传。所以$postMultipart 依然为false
        //获取业务参数
        $apiParams = $sysParams[$this->json_param_key];

        /* 1)全部使用POST方式，multi和simple。
        2)$postMultipart 暂时没有用，字节流拼接成串的方式上传，所以先去掉
        */
        curl_setopt($ch, CURLOPT_POST, true);

        // 需要把系统参数依然使用url方式传递
        $requestUrl = $serverUrl . "?";
        foreach ($sysParams as $sysParamKey => $sysParamValue)
        {
            if($sysParamKey != $this->json_param_key){
                $requestUrl .= "$sysParamKey=" . urlencode($sysParamValue) . "&";
            }
        }

        // 去掉末尾的 "&"
        curl_setopt($ch, CURLOPT_URL, substr($requestUrl,0,-1));
        curl_setopt($ch, CURLOPT_POSTFIELDS, $this->json_param_key . "=" . urlencode(json_encode($apiParams,JSON_UNESCAPED_SLASHES)));

		$reponse = curl_exec($ch);
		if (curl_errno($ch))
		{
			throw new Exception(curl_error($ch),0);
		}
		else
		{
			$httpStatusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
			if (200 !== $httpStatusCode)
			{
				throw new Exception($reponse,$httpStatusCode);
			}
		}
		curl_close($ch);
		return $reponse;
	}

	/*
        2024.08 修改了一版，系统参数和业务参数分别使用，其中业务参数放到postbody里面
    */
	public function execute($request, $access_token = null)
	{
		//组装系统参数
        $sysParams["app_key"] = $this->appKey;
        $version = $request->getVersion();

        $sysParams["v"] = empty($version)? $this->version:$version;
        $sysParams["method"] = $request->getApiMethodName();
        $sysParams["timestamp"] = $this->getCurrentTimeFormatted();
        if (null != $access_token)
        {
           $sysParams["access_token"] = $access_token;
        }
		$sysParams[$this->json_param_key] = $request->getApiParas();
		//签名
		$sysParams["sign"] = $this->generateSign($sysParams);

		//发起HTTP请求
		try
		{
			$resp = $this->curl($this->serverUrl, $sysParams);
		}

		catch (Exception $e)
		{
            return array(
              'code' => $e->getCode(),
              'msg' => $e->getMessage()
            );
		}

		//解析JD返回结果
		$respWellFormed = false;
		if ("json" == $this->format)
		{
			$respObject = json_decode($resp);
			if (null !== $respObject)
			{
				$respWellFormed = true;
//				foreach ($respObject as $propKey => $propValue)
//				{
//					$respObject = $propValue;
//				}
			}
		}
		else if("xml" == $this->format)
		{
			$respObject = @simplexml_load_string($resp);
			if (false !== $respObject)
			{
				$respWellFormed = true;
			}
		}

		//返回的HTTP文本不是标准JSON或者XML，记下错误日志
		if (false === $respWellFormed)
		{
            return array(
                'code' => 0,
                'msg' => "HTTP_RESPONSE_NOT_WELL_FORMED"
            );
		}

		return $respObject;
	}

	public function exec($paramsArray)
	{
		if (!isset($paramsArray["method"]))
		{
			trigger_error("No api name passed");
		}
		$inflector = new LtInflector;
		$inflector->conf["separator"] = ".";
		$requestClassName = ucfirst($inflector->camelize(substr($paramsArray["method"], 7))) . "Request";
		if (!class_exists($requestClassName))
		{
			trigger_error("No such api: " . $paramsArray["method"]);
		}

		$session = isset($paramsArray["session"]) ? $paramsArray["session"] : null;

		$req = new $requestClassName;
		foreach($paramsArray as $paraKey => $paraValue)
		{
			$inflector->conf["separator"] = "_";
			$setterMethodName = $inflector->camelize($paraKey);
			$inflector->conf["separator"] = ".";
			$setterMethodName = "set" . $inflector->camelize($setterMethodName);
			if (method_exists($req, $setterMethodName))
			{
				$req->$setterMethodName($paraValue);
			}
		}
		return $this->execute($req, $session);
	}

    private function getCurrentTimeFormatted()
    {
        return  date("Y-m-d H:i:s").'.000'.$this->getStandardOffsetUTC(date_default_timezone_get());
    }

    private function getStandardOffsetUTC($timezone)
    {
        if($timezone == 'UTC') {
            return '+0000';
        } else {
            $timezone = new DateTimeZone($timezone);
            $transitions = array_slice($timezone->getTransitions(), -3, null, true);

            foreach (array_reverse($transitions, true) as $transition)
            {
                if ($transition['isdst'] == 1)
                {
                    continue;
                }

                return sprintf('%+03d%02u', $transition['offset'] / 3600, abs($transition['offset']) % 3600 / 60);
            }

            return false;
        }
    }
}
