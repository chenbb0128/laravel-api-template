<?php
class UnionOpenCpActivityCancelValidateRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.union.open.cp.activity.cancel.validate";
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
    private  $cpVerifyCancelActivityReq;

    public function setCpVerifyCancelActivityReq($cpVerifyCancelActivityReq){
        $this->apiParas['cpVerifyCancelActivityReq'] = $cpVerifyCancelActivityReq;
    }
    public function getCpVerifyCancelActivityReq(){
        return $this->apiParas['cpVerifyCancelActivityReq'];
    }
}

?>