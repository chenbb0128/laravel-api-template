<?php
class UnionOpenExchangeDeviceSupplyRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.union.open.exchange.device.supply";
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
    private  $supplyDeviceReq;

    public function setSupplyDeviceReq($supplyDeviceReq){
        $this->apiParas['supplyDeviceReq'] = $supplyDeviceReq;
    }
    public function getSupplyDeviceReq(){
        return $this->apiParas['supplyDeviceReq'];
    }
}

?>