<?php
namespace UnionOpenExchangeMediaOrderSync;
class OrderReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.exchange.SyncOrderReq";
    }
        
    private $mediaOrder;
            
    public function setMediaOrder($mediaOrder){
        $this->params['mediaOrder'] = $mediaOrder ->getInstance();
    }
        
            
    private $uuid;
    
    public function setUuid($uuid){
        $this->params['uuid'] = $uuid;
    }

    public function getUuid(){
        return $this->uuid;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>