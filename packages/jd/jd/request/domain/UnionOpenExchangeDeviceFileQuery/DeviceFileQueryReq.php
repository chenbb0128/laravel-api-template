<?php
namespace UnionOpenExchangeDeviceFileQuery;
class DeviceFileQueryReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.exchange.DeviceFileQueryReq";
    }
        
    private $activeDate;
    
    public function setActiveDate($activeDate){
        $this->params['activeDate'] = $activeDate;
    }

    public function getActiveDate(){
        return $this->activeDate;
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