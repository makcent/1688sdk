<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeBizCargoGroup.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeBizInvoiceGroup.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeBizOtherInfoGroup.class.php');
include_once ('com/alibaba/trade/param/AlibabaOpenplatformTradeBizReceiveAddressGroup.class.php');

class AlibabaTradeGeneralCreateOrderAlipayParam {

        
        /**
    * @return 商品信息列表。JSON串，其中：offerId，quantity（数量），specId（sku offer对应的specId），unitPrice（单价）这几个字段必须有值
    */
        public function getCargoGroups() {
        $tempResult = $this->sdkStdResult["cargoGroups"];
        return $tempResult;
    }
    
    /**
     * 设置商品信息列表。JSON串，其中：offerId，quantity（数量），specId（sku offer对应的specId），unitPrice（单价）这几个字段必须有值     
     * @param array include @see AlibabaOpenplatformTradeBizCargoGroup[] $cargoGroups     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCargoGroups(AlibabaOpenplatformTradeBizCargoGroup $cargoGroups) {
        $this->sdkStdResult["cargoGroups"] = $cargoGroups;
    }
    
        
        /**
    * @return 发票信息，若没有可不填。
    */
        public function getInvoiceGroup() {
        $tempResult = $this->sdkStdResult["invoiceGroup"];
        return $tempResult;
    }
    
    /**
     * 设置发票信息，若没有可不填。     
     * @param AlibabaOpenplatformTradeBizInvoiceGroup $invoiceGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setInvoiceGroup(AlibabaOpenplatformTradeBizInvoiceGroup $invoiceGroup) {
        $this->sdkStdResult["invoiceGroup"] = $invoiceGroup;
    }
    
        
        /**
    * @return 其它信息，针对订单级别。JSON串格式，重要字段：message（买家留言），totalAmount（必填字段，总金额= 货品总金额 + 运费，单位: 元），mixAmount（混批金额，必填），mixNumber（混批数量，除非为0否则必填），sumCarriage（总运费，单位元。除非为0否则必填），filledCarriage（用户填写的运费 单位:元），promotionId(优惠id，如果有订单级别优惠，必须传此值才有效)，additionalFee（附加费,单位元）
    */
        public function getOtherInfoGroup() {
        $tempResult = $this->sdkStdResult["otherInfoGroup"];
        return $tempResult;
    }
    
    /**
     * 设置其它信息，针对订单级别。JSON串格式，重要字段：message（买家留言），totalAmount（必填字段，总金额= 货品总金额 + 运费，单位: 元），mixAmount（混批金额，必填），mixNumber（混批数量，除非为0否则必填），sumCarriage（总运费，单位元。除非为0否则必填），filledCarriage（用户填写的运费 单位:元），promotionId(优惠id，如果有订单级别优惠，必须传此值才有效)，additionalFee（附加费,单位元）     
     * @param AlibabaOpenplatformTradeBizOtherInfoGroup $otherInfoGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOtherInfoGroup(AlibabaOpenplatformTradeBizOtherInfoGroup $otherInfoGroup) {
        $this->sdkStdResult["otherInfoGroup"] = $otherInfoGroup;
    }
    
        
        /**
    * @return 收货地址。JSON串，主要字段：addressId（用户在阿里巴巴保存的地址的id。若能提供，其他可以不填。若不能提供，请设为-1），fullName（收货人姓名），areaCode，cityCode，provinceCode（县/区，市，省份编码。参考”行政区划代码“），address（街道地址），mobile（手机），phone（电话），postCode（邮编）
    */
        public function getReceiveAddressGroup() {
        $tempResult = $this->sdkStdResult["receiveAddressGroup"];
        return $tempResult;
    }
    
    /**
     * 设置收货地址。JSON串，主要字段：addressId（用户在阿里巴巴保存的地址的id。若能提供，其他可以不填。若不能提供，请设为-1），fullName（收货人姓名），areaCode，cityCode，provinceCode（县/区，市，省份编码。参考”行政区划代码“），address（街道地址），mobile（手机），phone（电话），postCode（邮编）     
     * @param AlibabaOpenplatformTradeBizReceiveAddressGroup $receiveAddressGroup     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setReceiveAddressGroup(AlibabaOpenplatformTradeBizReceiveAddressGroup $receiveAddressGroup) {
        $this->sdkStdResult["receiveAddressGroup"] = $receiveAddressGroup;
    }
    
        
        /**
    * @return 交易方式
    */
        public function getTradeWay() {
        $tempResult = $this->sdkStdResult["tradeWay"];
        return $tempResult;
    }
    
    /**
     * 设置交易方式     
     * @param String $tradeWay     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeWay( $tradeWay) {
        $this->sdkStdResult["tradeWay"] = $tradeWay;
    }
    
        
        /**
    * @return 交易模型
    */
        public function getTradeMode() {
        $tempResult = $this->sdkStdResult["tradeMode"];
        return $tempResult;
    }
    
    /**
     * 设置交易模型     
     * @param String $tradeMode     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeMode( $tradeMode) {
        $this->sdkStdResult["tradeMode"] = $tradeMode;
    }
    
        
    private $sdkStdResult=array();
    
    public function getSdkStdResult(){
    	return $this->sdkStdResult;
    }

}
?>