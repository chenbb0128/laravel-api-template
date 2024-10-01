<?php
namespace PlaceOrder;
class OrderParam{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jdsmart.open.order.condition.OrderParam";
    }
        
    private $orderType;
    
    public function setOrderType($orderType){
        $this->params['orderType'] = $orderType;
    }

    public function getOrderType(){
        return $this->orderType;
    }
            
    private $customRemark;
    
    public function setCustomRemark($customRemark){
        $this->params['customRemark'] = $customRemark;
    }

    public function getCustomRemark(){
        return $this->customRemark;
    }
            
    private $saleId;
    
    public function setSaleId($saleId){
        $this->params['saleId'] = $saleId;
    }

    public function getSaleId(){
        return $this->saleId;
    }
            
    private $jdOrderNo;
    
    public function setJdOrderNo($jdOrderNo){
        $this->params['jdOrderNo'] = $jdOrderNo;
    }

    public function getJdOrderNo(){
        return $this->jdOrderNo;
    }
            
    private $totalPrice;
    
    public function setTotalPrice($totalPrice){
        $this->params['totalPrice'] = $totalPrice;
    }

    public function getTotalPrice(){
        return $this->totalPrice;
    }
            
    private $sellerNo;
    
    public function setSellerNo($sellerNo){
        $this->params['sellerNo'] = $sellerNo;
    }

    public function getSellerNo(){
        return $this->sellerNo;
    }
            
    private $discountAmount;
    
    public function setDiscountAmount($discountAmount){
        $this->params['discountAmount'] = $discountAmount;
    }

    public function getDiscountAmount(){
        return $this->discountAmount;
    }
            
    private $saleName;
    
    public function setSaleName($saleName){
        $this->params['saleName'] = $saleName;
    }

    public function getSaleName(){
        return $this->saleName;
    }
            
    private $goodsSeqsList;
                                        
    public function setGoodsSeqsList($goodsSeqsList){
        $size = count($goodsSeqsList);
        for ($i=0; $i<$size; $i++){
            $goodsSeqsList [$i] = $goodsSeqsList [$i] ->getInstance();
        }
        $this->params['goodsSeqsList'] = $goodsSeqsList;
    }
                                    
            
    private $jdStatus;
    
    public function setJdStatus($jdStatus){
        $this->params['jdStatus'] = $jdStatus;
    }

    public function getJdStatus(){
        return $this->jdStatus;
    }
            
    private $projectNo;
    
    public function setProjectNo($projectNo){
        $this->params['projectNo'] = $projectNo;
    }

    public function getProjectNo(){
        return $this->projectNo;
    }
            
    private $siteNo;
    
    public function setSiteNo($siteNo){
        $this->params['siteNo'] = $siteNo;
    }

    public function getSiteNo(){
        return $this->siteNo;
    }
            
    private $pinParam;
    
    public function setPinParam($pinParam){
        $this->params['pinParam'] = $pinParam;
    }

    public function getPinParam(){
        return $this->pinParam;
    }
            
    private $totalPriceValue;
    
    public function setTotalPriceValue($totalPriceValue){
        $this->params['totalPriceValue'] = $totalPriceValue;
    }

    public function getTotalPriceValue(){
        return $this->totalPriceValue;
    }
            
    private $offLineOrder;
    
    public function setOffLineOrder($offLineOrder){
        $this->params['offLineOrder'] = $offLineOrder;
    }

    public function getOffLineOrder(){
        return $this->offLineOrder;
    }
            
    private $orderSource;
    
    public function setOrderSource($orderSource){
        $this->params['orderSource'] = $orderSource;
    }

    public function getOrderSource(){
        return $this->orderSource;
    }
            
    private $customTel;
    
    public function setCustomTel($customTel){
        $this->params['customTel'] = $customTel;
    }

    public function getCustomTel(){
        return $this->customTel;
    }
            
    private $actualAmount;
    
    public function setActualAmount($actualAmount){
        $this->params['actualAmount'] = $actualAmount;
    }

    public function getActualAmount(){
        return $this->actualAmount;
    }
            
    private $customName;
    
    public function setCustomName($customName){
        $this->params['customName'] = $customName;
    }

    public function getCustomName(){
        return $this->customName;
    }
            
    private $cashPayWay;
    
    public function setCashPayWay($cashPayWay){
        $this->params['cashPayWay'] = $cashPayWay;
    }

    public function getCashPayWay(){
        return $this->cashPayWay;
    }
            
    private $cartGoodsInfoList;
                                        
    public function setCartGoodsInfoList($cartGoodsInfoList){
        $size = count($cartGoodsInfoList);
        for ($i=0; $i<$size; $i++){
            $cartGoodsInfoList [$i] = $cartGoodsInfoList [$i] ->getInstance();
        }
        $this->params['cartGoodsInfoList'] = $cartGoodsInfoList;
    }
                                    
            
    private $totalDiscount;
    
    public function setTotalDiscount($totalDiscount){
        $this->params['totalDiscount'] = $totalDiscount;
    }

    public function getTotalDiscount(){
        return $this->totalDiscount;
    }
            
    private $payStatus;
    
    public function setPayStatus($payStatus){
        $this->params['payStatus'] = $payStatus;
    }

    public function getPayStatus(){
        return $this->payStatus;
    }
            
    private $open_id_seller;
    
    public function setOpen_id_seller($open_id_seller){
        $this->params['open_id_seller'] = $open_id_seller;
    }

    public function getOpen_id_seller(){
        return $this->open_id_seller;
    }
            
    private $xid_seller;
    
    public function setXid_seller($xid_seller){
        $this->params['xid_seller'] = $xid_seller;
    }

    public function getXid_seller(){
        return $this->xid_seller;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>