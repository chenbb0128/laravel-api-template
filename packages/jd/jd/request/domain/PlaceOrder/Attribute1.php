<?php
namespace PlaceOrder;
class Attribute1{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.jdsmart.open.order.condition.GoodsSeq";
    }
        
    private $goodsNo;
    
    public function setGoodsNo($goodsNo){
        $this->params['goodsNo'] = $goodsNo;
    }

    public function getGoodsNo(){
        return $this->goodsNo;
    }
            
    private $lotAttrMap;
                        
    public function setLotAttrMap($lotAttrMap){
        $this->params['lotAttrMap'] = $lotAttrMap;
    }
                    
            
    private $goodsName;
    
    public function setGoodsName($goodsName){
        $this->params['goodsName'] = $goodsName;
    }

    public function getGoodsName(){
        return $this->goodsName;
    }
            
    private $seq;
    
    public function setSeq($seq){
        $this->params['seq'] = $seq;
    }

    public function getSeq(){
        return $this->seq;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>