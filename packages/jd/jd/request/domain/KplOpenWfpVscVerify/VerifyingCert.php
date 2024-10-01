<?php
namespace KplOpenWfpVscVerify;
class VerifyingCert{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.Cert";
    }
        
    private $cardNum;
    
    public function setCardNum($cardNum){
        $this->params['cardNum'] = $cardNum;
    }

    public function getCardNum(){
        return $this->cardNum;
    }
            
    private $pwd;
    
    public function setPwd($pwd){
        $this->params['pwd'] = $pwd;
    }

    public function getPwd(){
        return $this->pwd;
    }
            
    private $verifyingTimes;
    
    public function setVerifyingTimes($verifyingTimes){
        $this->params['verifyingTimes'] = $verifyingTimes;
    }

    public function getVerifyingTimes(){
        return $this->verifyingTimes;
    }
            
    private $mobile;
    
    public function setMobile($mobile){
        $this->params['mobile'] = $mobile;
    }

    public function getMobile(){
        return $this->mobile;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>