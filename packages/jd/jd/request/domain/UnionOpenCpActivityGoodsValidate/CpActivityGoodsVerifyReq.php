<?php
namespace UnionOpenCpActivityGoodsValidate;
class CpActivityGoodsVerifyReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.cp.CpActivityGoodsVerifyReq";
    }
        
    private $goodsVerifyInfo;
    
    public function setGoodsVerifyInfo($goodsVerifyInfo){
        $this->params['goodsVerifyInfo'] = $goodsVerifyInfo;
    }

    public function getGoodsVerifyInfo(){
        return $this->goodsVerifyInfo;
    }
            
    private $activityId;
    
    public function setActivityId($activityId){
        $this->params['activityId'] = $activityId;
    }

    public function getActivityId(){
        return $this->activityId;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $examineStatus;
    
    public function setExamineStatus($examineStatus){
        $this->params['examineStatus'] = $examineStatus;
    }

    public function getExamineStatus(){
        return $this->examineStatus;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>