<?php
class UnionOpenCpChannelGetRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.union.open.cp.channel.get";
	}
	
	public function getApiParas(){
        if(empty($this->apiParas)){
	        return "{}";
	    }
		return $this->apiParas;
	}
	
	public function check(){
		
	}
	
    public function putOtherTextParam($key, $value){
		$this->apiParas[$key] = $value;
		$this->$key = $value;
	}

    private $version;

    public function setVersion($version){
        $this->version = $version;
    }

    public function getVersion(){
        return $this->version;
    }
    private  $cpChannelGetReq;

    public function setCpChannelGetReq($cpChannelGetReq){
        $this->apiParas['cpChannelGetReq'] = $cpChannelGetReq;
    }
    public function getCpChannelGetReq(){
        return $this->apiParas['cpChannelGetReq'];
    }
}

?>