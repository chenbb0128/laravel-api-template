<?php
namespace KplOpenWfpVscVerify;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $requestWrap;
            
    public function setRequestWrap($requestWrap){
        $this->params['requestWrap'] = $requestWrap ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>