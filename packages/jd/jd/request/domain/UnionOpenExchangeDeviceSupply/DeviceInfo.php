<?php
namespace UnionOpenExchangeDeviceSupply;
class DeviceInfo{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.exchange.DeviceInfo";
    }
        
    private $deviceType;
    
    public function setDeviceType($deviceType){
        $this->params['deviceType'] = $deviceType;
    }

    public function getDeviceType(){
        return $this->deviceType;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $requestId;
    
    public function setRequestId($requestId){
        $this->params['requestId'] = $requestId;
    }

    public function getRequestId(){
        return $this->requestId;
    }
            
    private $eventTime;
    
    public function setEventTime($eventTime){
        $this->params['eventTime'] = $eventTime;
    }

    public function getEventTime(){
        return $this->eventTime;
    }
            
    private $contentId;
    
    public function setContentId($contentId){
        $this->params['contentId'] = $contentId;
    }

    public function getContentId(){
        return $this->contentId;
    }
            
    private $eventType;
    
    public function setEventType($eventType){
        $this->params['eventType'] = $eventType;
    }

    public function getEventType(){
        return $this->eventType;
    }
            
    private $deviceId;
    
    public function setDeviceId($deviceId){
        $this->params['deviceId'] = $deviceId;
    }

    public function getDeviceId(){
        return $this->deviceId;
    }
            
    private $taskId;
    
    public function setTaskId($taskId){
        $this->params['taskId'] = $taskId;
    }

    public function getTaskId(){
        return $this->taskId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>