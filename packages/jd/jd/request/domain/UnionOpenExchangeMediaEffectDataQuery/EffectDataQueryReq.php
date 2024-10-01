<?php
namespace UnionOpenExchangeMediaEffectDataQuery;
class EffectDataQueryReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.exchange.EffectDataQueryReq";
    }
        
    private $maxId;
    
    public function setMaxId($maxId){
        $this->params['maxId'] = $maxId;
    }

    public function getMaxId(){
        return $this->maxId;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $uuid;
    
    public function setUuid($uuid){
        $this->params['uuid'] = $uuid;
    }

    public function getUuid(){
        return $this->uuid;
    }
            
    private $actDate;
    
    public function setActDate($actDate){
        $this->params['actDate'] = $actDate;
    }

    public function getActDate(){
        return $this->actDate;
    }
            
    private $taskIdList;
    
    public function setTaskIdList($taskIdList){
        $this->params['taskIdList'] = $taskIdList;
    }

    public function getTaskIdList(){
        return $this->taskIdList;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>