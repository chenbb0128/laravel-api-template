<?php
namespace UnionOpenCpActivityGet;
class CpActivityGetReq{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.cp.CpActivityReq";
    }
        
    private $serviceRateMin;
    
    public function setServiceRateMin($serviceRateMin){
        $this->params['serviceRateMin'] = $serviceRateMin;
    }

    public function getServiceRateMin(){
        return $this->serviceRateMin;
    }
            
    private $priceMax;
    
    public function setPriceMax($priceMax){
        $this->params['priceMax'] = $priceMax;
    }

    public function getPriceMax(){
        return $this->priceMax;
    }
            
    private $weeklySales;
    
    public function setWeeklySales($weeklySales){
        $this->params['weeklySales'] = $weeklySales;
    }

    public function getWeeklySales(){
        return $this->weeklySales;
    }
            
    private $title;
    
    public function setTitle($title){
        $this->params['title'] = $title;
    }

    public function getTitle(){
        return $this->title;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $dongdong;
    
    public function setDongdong($dongdong){
        $this->params['dongdong'] = $dongdong;
    }

    public function getDongdong(){
        return $this->dongdong;
    }
            
    private $priceMin;
    
    public function setPriceMin($priceMin){
        $this->params['priceMin'] = $priceMin;
    }

    public function getPriceMin(){
        return $this->priceMin;
    }
            
    private $jdGoodShop;
    
    public function setJdGoodShop($jdGoodShop){
        $this->params['jdGoodShop'] = $jdGoodShop;
    }

    public function getJdGoodShop(){
        return $this->jdGoodShop;
    }
            
    private $batchCommissionRateMin;
    
    public function setBatchCommissionRateMin($batchCommissionRateMin){
        $this->params['batchCommissionRateMin'] = $batchCommissionRateMin;
    }

    public function getBatchCommissionRateMin(){
        return $this->batchCommissionRateMin;
    }
            
    private $activityId;
    
    public function setActivityId($activityId){
        $this->params['activityId'] = $activityId;
    }

    public function getActivityId(){
        return $this->activityId;
    }
            
    private $evaluationCnt;
    
    public function setEvaluationCnt($evaluationCnt){
        $this->params['evaluationCnt'] = $evaluationCnt;
    }

    public function getEvaluationCnt(){
        return $this->evaluationCnt;
    }
            
    private $shipping;
    
    public function setShipping($shipping){
        $this->params['shipping'] = $shipping;
    }

    public function getShipping(){
        return $this->shipping;
    }
            
    private $jdLogistics;
    
    public function setJdLogistics($jdLogistics){
        $this->params['jdLogistics'] = $jdLogistics;
    }

    public function getJdLogistics(){
        return $this->jdLogistics;
    }
            
    private $startTime;
    
    public function setStartTime($startTime){
        $this->params['startTime'] = $startTime;
    }

    public function getStartTime(){
        return $this->startTime;
    }
            
    private $freightInsurance;
    
    public function setFreightInsurance($freightInsurance){
        $this->params['freightInsurance'] = $freightInsurance;
    }

    public function getFreightInsurance(){
        return $this->freightInsurance;
    }
            
    private $qq;
    
    public function setQq($qq){
        $this->params['qq'] = $qq;
    }

    public function getQq(){
        return $this->qq;
    }
            
    private $coupon;
    
    public function setCoupon($coupon){
        $this->params['coupon'] = $coupon;
    }

    public function getCoupon(){
        return $this->coupon;
    }
            
    private $estimateSales;
    
    public function setEstimateSales($estimateSales){
        $this->params['estimateSales'] = $estimateSales;
    }

    public function getEstimateSales(){
        return $this->estimateSales;
    }
            
    private $purchase;
    
    public function setPurchase($purchase){
        $this->params['purchase'] = $purchase;
    }

    public function getPurchase(){
        return $this->purchase;
    }
            
    private $favorableRate;
    
    public function setFavorableRate($favorableRate){
        $this->params['favorableRate'] = $favorableRate;
    }

    public function getFavorableRate(){
        return $this->favorableRate;
    }
            
    private $goodsType;
    
    public function setGoodsType($goodsType){
        $this->params['goodsType'] = $goodsType;
    }

    public function getGoodsType(){
        return $this->goodsType;
    }
            
    private $endTime;
    
    public function setEndTime($endTime){
        $this->params['endTime'] = $endTime;
    }

    public function getEndTime(){
        return $this->endTime;
    }
            
    private $pin;
    
    public function setPin($pin){
        $this->params['pin'] = $pin;
    }

    public function getPin(){
        return $this->pin;
    }
            
    private $popServiceRateMin;
    
    public function setPopServiceRateMin($popServiceRateMin){
        $this->params['popServiceRateMin'] = $popServiceRateMin;
    }

    public function getPopServiceRateMin(){
        return $this->popServiceRateMin;
    }
            
    private $status;
    
    public function setStatus($status){
        $this->params['status'] = $status;
    }

    public function getStatus(){
        return $this->status;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>