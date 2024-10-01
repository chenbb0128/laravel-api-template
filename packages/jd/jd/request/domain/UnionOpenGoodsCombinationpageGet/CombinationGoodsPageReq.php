<?php
namespace UnionOpenGoodsCombinationpageGet;
class CombinationGoodsPageReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.goods.combination.CombinationGoodsPageReq";
    }
        
    private $skuInfo;
    
    public function setSkuInfo($skuInfo){
        $this->params['skuInfo'] = $skuInfo;
    }

    public function getSkuInfo(){
        return $this->skuInfo;
    }
            
    private $couponUrls;
    
    public function setCouponUrls($couponUrls){
        $this->params['couponUrls'] = $couponUrls;
    }

    public function getCouponUrls(){
        return $this->couponUrls;
    }
            
    private $activityUrls;
    
    public function setActivityUrls($activityUrls){
        $this->params['activityUrls'] = $activityUrls;
    }

    public function getActivityUrls(){
        return $this->activityUrls;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>