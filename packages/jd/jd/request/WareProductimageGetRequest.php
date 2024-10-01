<?php
class WareProductimageGetRequest
{


	private $apiParas = array();
	
	public function getApiMethodName(){
	  return "jingdong.ware.productimage.get";
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
    private  $sku_ids;

    public function setSku_ids($sku_ids){
        $this->apiParas['sku_ids'] = $sku_ids;
    }
    public function getSku_ids(){
        return $this->apiParas['sku_ids'];
    }
}

?>