<?php
namespace KplOpenWfpVscQueryCertList;
class Param{

    private $params=array();

    function __construct(){
        $this->params["@type"]="java.util.Map";
    }
        
    private $queryCertListRequestWrap;
            
    public function setQueryCertListRequestWrap($queryCertListRequestWrap){
        $this->params['queryCertListRequestWrap'] = $queryCertListRequestWrap ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>