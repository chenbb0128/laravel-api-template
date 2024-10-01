<?php
class UnionOpenCpPersonalInfoQueryRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.union.open.cp.personal.info.query";
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
    private  $cpPersonalInfoQueryReq;

    public function setCpPersonalInfoQueryReq($cpPersonalInfoQueryReq){
        $this->apiParas['cpPersonalInfoQueryReq'] = $cpPersonalInfoQueryReq;
    }
    public function getCpPersonalInfoQueryReq(){
        return $this->apiParas['cpPersonalInfoQueryReq'];
    }
}

?>