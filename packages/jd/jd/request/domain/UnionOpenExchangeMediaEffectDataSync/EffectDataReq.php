<?php
namespace UnionOpenExchangeMediaEffectDataSync;
class EffectDataReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.exchange.SyncEffectDataReq";
    }
        
    private $mediaEffectDataList;
                                        
    public function setMediaEffectDataList($mediaEffectDataList){
        $size = count($mediaEffectDataList);
        for ($i=0; $i<$size; $i++){
            $mediaEffectDataList [$i] = $mediaEffectDataList [$i] ->getInstance();
        }
        $this->params['mediaEffectDataList'] = $mediaEffectDataList;
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