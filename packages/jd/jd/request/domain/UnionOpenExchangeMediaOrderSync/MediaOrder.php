<?php
namespace UnionOpenExchangeMediaOrderSync;
class MediaOrder{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.exchange.MediaOrder";
    }
        
    private $orderType;
    
    public function setOrderType($orderType){
        $this->params['orderType'] = $orderType;
    }

    public function getOrderType(){
        return $this->orderType;
    }
            
    private $orderContentList;
                                        
    public function setOrderContentList($orderContentList){
        $size = count($orderContentList);
        for ($i=0; $i<$size; $i++){
            $orderContentList [$i] = $orderContentList [$i] ->getInstance();
        }
        $this->params['orderContentList'] = $orderContentList;
    }
                                    
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $orderStatus;
    
    public function setOrderStatus($orderStatus){
        $this->params['orderStatus'] = $orderStatus;
    }

    public function getOrderStatus(){
        return $this->orderStatus;
    }
            
    private $orderPrice;
    
    public function setOrderPrice($orderPrice){
        $this->params['orderPrice'] = $orderPrice;
    }

    public function getOrderPrice(){
        return $this->orderPrice;
    }
            
    private $cancelReason;
    
    public function setCancelReason($cancelReason){
        $this->params['cancelReason'] = $cancelReason;
    }

    public function getCancelReason(){
        return $this->cancelReason;
    }
            
    private $taskId;
    
    public function setTaskId($taskId){
        $this->params['taskId'] = $taskId;
    }

    public function getTaskId(){
        return $this->taskId;
    }
            
    private $balancePrice;
    
    public function setBalancePrice($balancePrice){
        $this->params['balancePrice'] = $balancePrice;
    }

    public function getBalancePrice(){
        return $this->balancePrice;
    }
            
    private $orderName;
    
    public function setOrderName($orderName){
        $this->params['orderName'] = $orderName;
    }

    public function getOrderName(){
        return $this->orderName;
    }
            
    private $balanceStatus;
    
    public function setBalanceStatus($balanceStatus){
        $this->params['balanceStatus'] = $balanceStatus;
    }

    public function getBalanceStatus(){
        return $this->balanceStatus;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>