<?php
namespace UnionOpenExchangeMediaEffectDataSync;
class MediaEffectData{

    private $params=array();

    function __construct(){
        $this->params["@type"]="com.jd.union.open.gateway.api.dto.exchange.MediaEffectData";
    }
        
    private $commentNum;
    
    public function setCommentNum($commentNum){
        $this->params['commentNum'] = $commentNum;
    }

    public function getCommentNum(){
        return $this->commentNum;
    }
            
    private $orderId;
    
    public function setOrderId($orderId){
        $this->params['orderId'] = $orderId;
    }

    public function getOrderId(){
        return $this->orderId;
    }
            
    private $activeUvNum;
    
    public function setActiveUvNum($activeUvNum){
        $this->params['activeUvNum'] = $activeUvNum;
    }

    public function getActiveUvNum(){
        return $this->activeUvNum;
    }
            
    private $authorFansNum;
    
    public function setAuthorFansNum($authorFansNum){
        $this->params['authorFansNum'] = $authorFansNum;
    }

    public function getAuthorFansNum(){
        return $this->authorFansNum;
    }
            
    private $contentId;
    
    public function setContentId($contentId){
        $this->params['contentId'] = $contentId;
    }

    public function getContentId(){
        return $this->contentId;
    }
            
    private $followUvNum;
    
    public function setFollowUvNum($followUvNum){
        $this->params['followUvNum'] = $followUvNum;
    }

    public function getFollowUvNum(){
        return $this->followUvNum;
    }
            
    private $playUvNum;
    
    public function setPlayUvNum($playUvNum){
        $this->params['playUvNum'] = $playUvNum;
    }

    public function getPlayUvNum(){
        return $this->playUvNum;
    }
            
    private $viewDate;
    
    public function setViewDate($viewDate){
        $this->params['viewDate'] = $viewDate;
    }

    public function getViewDate(){
        return $this->viewDate;
    }
            
    private $cycle;
    
    public function setCycle($cycle){
        $this->params['cycle'] = $cycle;
    }

    public function getCycle(){
        return $this->cycle;
    }
            
    private $shareNum;
    
    public function setShareNum($shareNum){
        $this->params['shareNum'] = $shareNum;
    }

    public function getShareNum(){
        return $this->shareNum;
    }
            
    private $taskId;
    
    public function setTaskId($taskId){
        $this->params['taskId'] = $taskId;
    }

    public function getTaskId(){
        return $this->taskId;
    }
            
    private $likeNum;
    
    public function setLikeNum($likeNum){
        $this->params['likeNum'] = $likeNum;
    }

    public function getLikeNum(){
        return $this->likeNum;
    }
            
    private $playNum;
    
    public function setPlayNum($playNum){
        $this->params['playNum'] = $playNum;
    }

    public function getPlayNum(){
        return $this->playNum;
    }
            
    private $brandId;
    
    public function setBrandId($brandId){
        $this->params['brandId'] = $brandId;
    }

    public function getBrandId(){
        return $this->brandId;
    }
            
    private $categoryId;
    
    public function setCategoryId($categoryId){
        $this->params['categoryId'] = $categoryId;
    }

    public function getCategoryId(){
        return $this->categoryId;
    }
            
    private $convertUvNum;
    
    public function setConvertUvNum($convertUvNum){
        $this->params['convertUvNum'] = $convertUvNum;
    }

    public function getConvertUvNum(){
        return $this->convertUvNum;
    }
    
    function getInstance(){
        return $this->params;
    }

}

?>