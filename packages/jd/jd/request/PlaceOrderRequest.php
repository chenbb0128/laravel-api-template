<?php
class PlaceOrderRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.placeOrder";
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
    private  $param1;

    public function setParam1($param1){
        $this->apiParas['param1'] = $param1;
    }
    public function getParam1(){
        return $this->apiParas['param1'];
    }
}

?>