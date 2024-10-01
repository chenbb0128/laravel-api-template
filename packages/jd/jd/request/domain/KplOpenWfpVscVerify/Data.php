<?php
namespace KplOpenWfpVscVerify;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.VerifyCerts";
    }
        
    private $transactionId;
    
    public function setTransactionId($transactionId){
        $this->params['transactionId'] = $transactionId;
    }

    public function getTransactionId(){
        return $this->transactionId;
    }
            
    private $verifyingCertList;
                                        
    public function setVerifyingCertList($verifyingCertList){
        $size = count($verifyingCertList);
        for ($i=0; $i<$size; $i++){
            $verifyingCertList [$i] = $verifyingCertList [$i] ->getInstance();
        }
        $this->params['verifyingCertList'] = $verifyingCertList;
    }
                                    
            
    private $keepReserve;
    
    public function setKeepReserve($keepReserve){
        $this->params['keepReserve'] = $keepReserve;
    }

    public function getKeepReserve(){
        return $this->keepReserve;
    }
            
    private $erpOrderId;
    
    public function setErpOrderId($erpOrderId){
        $this->params['erpOrderId'] = $erpOrderId;
    }

    public function getErpOrderId(){
        return $this->erpOrderId;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>