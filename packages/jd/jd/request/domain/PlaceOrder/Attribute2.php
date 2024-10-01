<?php
namespace PlaceOrder;
class Attribute2{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jdsmart.open.order.condition.CartGoodsInfo";
    }
        
    private $goodsNoParam;
    
    public function setGoodsNoParam($goodsNoParam){
        $this->params['goodsNoParam'] = $goodsNoParam;
    }

    public function getGoodsNoParam(){
        return $this->goodsNoParam;
    }
            
    private $skuTotalAmount;
    
    public function setSkuTotalAmount($skuTotalAmount){
        $this->params['skuTotalAmount'] = $skuTotalAmount;
    }

    public function getSkuTotalAmount(){
        return $this->skuTotalAmount;
    }
            
    private $seqNo;
    
    public function setSeqNo($seqNo){
        $this->params['seqNo'] = $seqNo;
    }

    public function getSeqNo(){
        return $this->seqNo;
    }
            
    private $qty;
    
    public function setQty($qty){
        $this->params['qty'] = $qty;
    }

    public function getQty(){
        return $this->qty;
    }
            
    private $isbn;
    
    public function setIsbn($isbn){
        $this->params['isbn'] = $isbn;
    }

    public function getIsbn(){
        return $this->isbn;
    }
            
    private $priceType;
    
    public function setPriceType($priceType){
        $this->params['priceType'] = $priceType;
    }

    public function getPriceType(){
        return $this->priceType;
    }
            
    private $salePrimePrice;
    
    public function setSalePrimePrice($salePrimePrice){
        $this->params['salePrimePrice'] = $salePrimePrice;
    }

    public function getSalePrimePrice(){
        return $this->salePrimePrice;
    }
            
    private $serialFlag;
    
    public function setSerialFlag($serialFlag){
        $this->params['serialFlag'] = $serialFlag;
    }

    public function getSerialFlag(){
        return $this->serialFlag;
    }
            
    private $saleDiscount;
    
    public function setSaleDiscount($saleDiscount){
        $this->params['saleDiscount'] = $saleDiscount;
    }

    public function getSaleDiscount(){
        return $this->saleDiscount;
    }
            
    private $saleActualPrice;
    
    public function setSaleActualPrice($saleActualPrice){
        $this->params['saleActualPrice'] = $saleActualPrice;
    }

    public function getSaleActualPrice(){
        return $this->saleActualPrice;
    }
            
    private $type;
    
    public function setType($type){
        $this->params['type'] = $type;
    }

    public function getType(){
        return $this->type;
    }
            
    private $goodsNameParam;
    
    public function setGoodsNameParam($goodsNameParam){
        $this->params['goodsNameParam'] = $goodsNameParam;
    }

    public function getGoodsNameParam(){
        return $this->goodsNameParam;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>