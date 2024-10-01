<?php
namespace PlaceOrder;
class Param1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jdsmart.open.order.condition.JosOrderParam";
    }
        
    private $orderParam;
            
    public function setOrderParam($orderParam){
        $this->params['orderParam'] = $orderParam ->getInstance();
    }
        
            
    private $venderId;
    
    public function setVenderId($venderId){
        $this->params['venderId'] = $venderId;
    }

    public function getVenderId(){
        return $this->venderId;
    }
            
    private $appKey;
    
    public function setAppKey($appKey){
        $this->params['appKey'] = $appKey;
    }

    public function getAppKey(){
        return $this->appKey;
    }
            
    private $source;
    
    public function setSource($source){
        $this->params['source'] = $source;
    }

    public function getSource(){
        return $this->source;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>