<?php
namespace KplOpenWfpVscQueryCertList;
class Data{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.kpl.PageQuery";
    }
        
    private $pageNum;
    
    public function setPageNum($pageNum){
        $this->params['pageNum'] = $pageNum;
    }

    public function getPageNum(){
        return $this->pageNum;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
            
    private $queryData;
            
    public function setQueryData($queryData){
        $this->params['queryData'] = $queryData ->getInstance();
    }
        
    
    function getInstance(){
        return $this->params;
    }

}

?>