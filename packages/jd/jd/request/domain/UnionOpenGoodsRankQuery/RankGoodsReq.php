<?php
namespace UnionOpenGoodsRankQuery;
class RankGoodsReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.goods.rank.RankGoodsReq";
    }
        
    private $rankId;
    
    public function setRankId($rankId){
        $this->params['rankId'] = $rankId;
    }

    public function getRankId(){
        return $this->rankId;
    }
            
    private $sortType;
    
    public function setSortType($sortType){
        $this->params['sortType'] = $sortType;
    }

    public function getSortType(){
        return $this->sortType;
    }
            
    private $pageIndex;
    
    public function setPageIndex($pageIndex){
        $this->params['pageIndex'] = $pageIndex;
    }

    public function getPageIndex(){
        return $this->pageIndex;
    }
            
    private $pageSize;
    
    public function setPageSize($pageSize){
        $this->params['pageSize'] = $pageSize;
    }

    public function getPageSize(){
        return $this->pageSize;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>