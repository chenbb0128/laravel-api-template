<?php
namespace KplOpenWfpVscPreview;
class RequestWrap{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.RequestWrap";
    }
        
    private $appCode;
    
    public function setAppCode($appCode){
        $this->params['appCode'] = $appCode;
    }

    public function getAppCode(){
        return $this->appCode;
    }
            
    private $businessType;
    
    public function setBusinessType($businessType){
        $this->params['businessType'] = $businessType;
    }

    public function getBusinessType(){
        return $this->businessType;
    }
            
    private $merchantCode;
    
    public function setMerchantCode($merchantCode){
        $this->params['merchantCode'] = $merchantCode;
    }

    public function getMerchantCode(){
        return $this->merchantCode;
    }
            
    private $token;
    
    public function setToken($token){
        $this->params['token'] = $token;
    }

    public function getToken(){
        return $this->token;
    }
            
    private $clientIp;
    
    public function setClientIp($clientIp){
        $this->params['clientIp'] = $clientIp;
    }

    public function getClientIp(){
        return $this->clientIp;
    }
            
    private $clientPort;
    
    public function setClientPort($clientPort){
        $this->params['clientPort'] = $clientPort;
    }

    public function getClientPort(){
        return $this->clientPort;
    }
            
    private $trackerId;
    
    public function setTrackerId($trackerId){
        $this->params['trackerId'] = $trackerId;
    }

    public function getTrackerId(){
        return $this->trackerId;
    }
            
    private $source;
    
    public function setSource($source){
        $this->params['source'] = $source;
    }

    public function getSource(){
        return $this->source;
    }
            
    private $operatorPerson;
    
    public function setOperatorPerson($operatorPerson){
        $this->params['operatorPerson'] = $operatorPerson;
    }

    public function getOperatorPerson(){
        return $this->operatorPerson;
    }
            
    private $data;
            
    public function setData($data){
        $this->params['data'] = $data ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>