<?php
namespace UnionOpenCpActivityCancelValidate;
class CpVerifyCancelActivityReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.cp.CpVerifyCancelActivityReq";
    }
        
    private $idList;
    
    public function setIdList($idList){
        $this->params['idList'] = $idList;
    }

    public function getIdList(){
        return $this->idList;
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
            
    private $examineRejectReason;
    
    public function setExamineRejectReason($examineRejectReason){
        $this->params['examineRejectReason'] = $examineRejectReason;
    }

    public function getExamineRejectReason(){
        return $this->examineRejectReason;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>