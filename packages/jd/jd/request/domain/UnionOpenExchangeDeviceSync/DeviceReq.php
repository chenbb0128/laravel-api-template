<?php
namespace UnionOpenExchangeDeviceSync;
class DeviceReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.exchange.SyncDeviceReq";
    }
        
    private $deviceInfoList;
                                        
    public function setDeviceInfoList($deviceInfoList){
        $size = count($deviceInfoList);
        for ($i=0; $i<$size; $i++){
            $deviceInfoList [$i] = $deviceInfoList [$i] ->getInstance();
        }
        $this->params['deviceInfoList'] = $deviceInfoList;
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