<?php
class KplOpenGetsellpriceQueryRequest
{

    public function __construct()
    {
         $this->version = "1.0";
    }

	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jd.kpl.open.getsellprice.query";
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
    private  $sku;

    public function setSku($sku){
        $this->apiParas['sku'] = $sku;
    }
    public function getSku(){
        return $this->apiParas['sku'];
    }
    private  $containsTax;

    public function setContainsTax($containsTax){
        $this->apiParas['containsTax'] = $containsTax;
    }
    public function getContainsTax(){
        return $this->apiParas['containsTax'];
    }
    private  $queryExts;

    public function setQueryExts($queryExts){
        $this->apiParas['queryExts'] = $queryExts;
    }
    public function getQueryExts(){
        return $this->apiParas['queryExts'];
    }
}

?>