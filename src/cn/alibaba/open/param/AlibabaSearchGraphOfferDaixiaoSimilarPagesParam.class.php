<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaSearchGraphOfferDaixiaoSimilarPagesParam {

        
        /**
    * @return offer的id
    */
        public function getOfferId() {
        $tempResult = $this->sdkStdResult["offerId"];
        return $tempResult;
    }
    
    /**
     * 设置offer的id     
     * @param Long $offerId     
     * 参数示例：<pre>527756483369</pre>     
     * 此参数必填     */
    public function setOfferId( $offerId) {
        $this->sdkStdResult["offerId"] = $offerId;
    }
    
        
        /**
    * @return 查询的页码
    */
        public function getBeginPage() {
        $tempResult = $this->sdkStdResult["beginPage"];
        return $tempResult;
    }
    
    /**
     * 设置查询的页码     
     * @param Integer $beginPage     
     * 参数示例：<pre>1</pre>     
     * 此参数必填     */
    public function setBeginPage( $beginPage) {
        $this->sdkStdResult["beginPage"] = $beginPage;
    }
    
        
        /**
    * @return 每页的offer数量
    */
        public function getPageSize() {
        $tempResult = $this->sdkStdResult["pageSize"];
        return $tempResult;
    }
    
    /**
     * 设置每页的offer数量     
     * @param Integer $pageSize     
     * 参数示例：<pre>20</pre>     
     * 此参数必填     */
    public function setPageSize( $pageSize) {
        $this->sdkStdResult["pageSize"] = $pageSize;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>