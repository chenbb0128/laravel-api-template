<?php
namespace KplOpenWfpVscQueryCertList;
class QueryData{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.CertQuery";
    }
        
    private $merchantCardId;
    
    public function setMerchantCardId($merchantCardId){
        $this->params['merchantCardId'] = $merchantCardId;
    }

    public function getMerchantCardId(){
        return $this->merchantCardId;
    }
            
    private $queryMerchantCode;
    
    public function setQueryMerchantCode($queryMerchantCode){
        $this->params['queryMerchantCode'] = $queryMerchantCode;
    }

    public function getQueryMerchantCode(){
        return $this->queryMerchantCode;
    }
            
    private $queryBusinessType;
    
    public function setQueryBusinessType($queryBusinessType){
        $this->params['queryBusinessType'] = $queryBusinessType;
    }

    public function getQueryBusinessType(){
        return $this->queryBusinessType;
    }
            
    private $queryCardNum;
    
    public function setQueryCardNum($queryCardNum){
        $this->params['queryCardNum'] = $queryCardNum;
    }

    public function getQueryCardNum(){
        return $this->queryCardNum;
    }
            
    private $cardNumList;
                        
    public function setCardNumList($cardNumList){
        $this->params['cardNumList'] = $cardNumList;
    }
                    
            
    private $erpOrderId;
    
    public function setErpOrderId($erpOrderId){
        $this->params['erpOrderId'] = $erpOrderId;
    }

    public function getErpOrderId(){
        return $this->erpOrderId;
    }
            
    private $skuId;
    
    public function setSkuId($skuId){
        $this->params['skuId'] = $skuId;
    }

    public function getSkuId(){
        return $this->skuId;
    }
            
    private $providedTime;
    
    public function setProvidedTime($providedTime){
        $this->params['providedTime'] = $providedTime;
    }

    public function getProvidedTime(){
        return $this->providedTime;
    }
            
    private $effectiveTime;
    
    public function setEffectiveTime($effectiveTime){
        $this->params['effectiveTime'] = $effectiveTime;
    }

    public function getEffectiveTime(){
        return $this->effectiveTime;
    }
            
    private $lastVerifiedTime;
    
    public function setLastVerifiedTime($lastVerifiedTime){
        $this->params['lastVerifiedTime'] = $lastVerifiedTime;
    }

    public function getLastVerifiedTime(){
        return $this->lastVerifiedTime;
    }
            
    private $expiredTime;
    
    public function setExpiredTime($expiredTime){
        $this->params['expiredTime'] = $expiredTime;
    }

    public function getExpiredTime(){
        return $this->expiredTime;
    }
            
    private $modified;
    
    public function setModified($modified){
        $this->params['modified'] = $modified;
    }

    public function getModified(){
        return $this->modified;
    }
            
    private $providedTimeMax;
    
    public function setProvidedTimeMax($providedTimeMax){
        $this->params['providedTimeMax'] = $providedTimeMax;
    }

    public function getProvidedTimeMax(){
        return $this->providedTimeMax;
    }
            
    private $effectiveTimeMax;
    
    public function setEffectiveTimeMax($effectiveTimeMax){
        $this->params['effectiveTimeMax'] = $effectiveTimeMax;
    }

    public function getEffectiveTimeMax(){
        return $this->effectiveTimeMax;
    }
            
    private $lastVerifiedTimeMax;
    
    public function setLastVerifiedTimeMax($lastVerifiedTimeMax){
        $this->params['lastVerifiedTimeMax'] = $lastVerifiedTimeMax;
    }

    public function getLastVerifiedTimeMax(){
        return $this->lastVerifiedTimeMax;
    }
            
    private $expiredTimeMax;
    
    public function setExpiredTimeMax($expiredTimeMax){
        $this->params['expiredTimeMax'] = $expiredTimeMax;
    }

    public function getExpiredTimeMax(){
        return $this->expiredTimeMax;
    }
            
    private $modifiedMax;
    
    public function setModifiedMax($modifiedMax){
        $this->params['modifiedMax'] = $modifiedMax;
    }

    public function getModifiedMax(){
        return $this->modifiedMax;
    }
            
    private $batchNum;
    
    public function setBatchNum($batchNum){
        $this->params['batchNum'] = $batchNum;
    }

    public function getBatchNum(){
        return $this->batchNum;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>