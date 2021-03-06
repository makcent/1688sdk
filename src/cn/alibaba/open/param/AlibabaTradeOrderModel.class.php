<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/OrderMemoModel.class.php');
include_once ('cn/alibaba/open/param/AlibabaTradeBizOrderEntry.class.php');
include_once ('cn/alibaba/open/param/AlibabaTradeBizStepOrderModel.class.php');

class AlibabaTradeOrderModel extends SDKDomain {

       	
    private $buyerAlipayId;
    
        /**
    * @return 买家支付宝
    */
        public function getBuyerAlipayId() {
        return $this->buyerAlipayId;
    }
    
    /**
     * 设置买家支付宝     
     * @param String $buyerAlipayId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerAlipayId( $buyerAlipayId) {
        $this->buyerAlipayId = $buyerAlipayId;
    }
    
        	
    private $buyerMemberId;
    
        /**
    * @return 买家id
    */
        public function getBuyerMemberId() {
        return $this->buyerMemberId;
    }
    
    /**
     * 设置买家id     
     * @param String $buyerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerMemberId( $buyerMemberId) {
        $this->buyerMemberId = $buyerMemberId;
    }
    
        	
    private $id;
    
        /**
    * @return 订单id
    */
        public function getId() {
        return $this->id;
    }
    
    /**
     * 设置订单id     
     * @param Long $id     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setId( $id) {
        $this->id = $id;
    }
    
        	
    private $sellerAlipayId;
    
        /**
    * @return 卖家支付宝
    */
        public function getSellerAlipayId() {
        return $this->sellerAlipayId;
    }
    
    /**
     * 设置卖家支付宝     
     * @param String $sellerAlipayId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerAlipayId( $sellerAlipayId) {
        $this->sellerAlipayId = $sellerAlipayId;
    }
    
        	
    private $sellerMemberId;
    
        /**
    * @return 卖家id
    */
        public function getSellerMemberId() {
        return $this->sellerMemberId;
    }
    
    /**
     * 设置卖家id     
     * @param String $sellerMemberId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerMemberId( $sellerMemberId) {
        $this->sellerMemberId = $sellerMemberId;
    }
    
        	
    private $status;
    
        /**
    * @return exception 交易异常，处理中
exceptionend 交易异常，已处理完毕
waitsellermodify 等待买家修改信息
waitbuyerpay 等待买家付款
waitsellersend 等待卖家发货
waitbuyerreceive 等待买家收货
success 交易成功
successend 交易成功，保证金已退回
cancel 交易取消，违约金等交割完毕
waitsellerbindalipay 等待卖家绑定支付宝
waitsellerconfirm 等待卖家确认信息
liquidatealready 交易成功， 已清算 （ETC）
waitbuyerconfirm 等待买家确认信息
waitsellerconfirmfund 等待卖家确认到账
waitselleract 等待卖家XX操作
waitbuyerconfirmaction 等待买家确认XX操作
waitsellerpush 等待卖家推进
waitlogisticstakein 等待物流揽件 COD引入
waitbuyersign 等待买家签收 COD引入
signinsuccess 买家已签收 COD引入
signinfailed 签收失败 COD引入
    */
        public function getStatus() {
        return $this->status;
    }
    
    /**
     * 设置exception 交易异常，处理中
exceptionend 交易异常，已处理完毕
waitsellermodify 等待买家修改信息
waitbuyerpay 等待买家付款
waitsellersend 等待卖家发货
waitbuyerreceive 等待买家收货
success 交易成功
successend 交易成功，保证金已退回
cancel 交易取消，违约金等交割完毕
waitsellerbindalipay 等待卖家绑定支付宝
waitsellerconfirm 等待卖家确认信息
liquidatealready 交易成功， 已清算 （ETC）
waitbuyerconfirm 等待买家确认信息
waitsellerconfirmfund 等待卖家确认到账
waitselleract 等待卖家XX操作
waitbuyerconfirmaction 等待买家确认XX操作
waitsellerpush 等待卖家推进
waitlogisticstakein 等待物流揽件 COD引入
waitbuyersign 等待买家签收 COD引入
signinsuccess 买家已签收 COD引入
signinfailed 签收失败 COD引入     
     * @param String $status     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStatus( $status) {
        $this->status = $status;
    }
    
        	
    private $refundStatus;
    
        /**
    * @return waitselleragree 等待卖家同意
refundsuccess 退款成功
refundclose 退款关闭
waitbuyermodify 待买家修改
waitbuyersend 等待买家退货
waitsellerreceive 等待卖家确认收货
    */
        public function getRefundStatus() {
        return $this->refundStatus;
    }
    
    /**
     * 设置waitselleragree 等待卖家同意
refundsuccess 退款成功
refundclose 退款关闭
waitbuyermodify 待买家修改
waitbuyersend 等待买家退货
waitsellerreceive 等待卖家确认收货     
     * @param String $refundStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRefundStatus( $refundStatus) {
        $this->refundStatus = $refundStatus;
    }
    
        	
    private $tradeType;
    
        /**
    * @return 1 担保交易
2 预存款交易
3 ETC境外收单交易
4 即时到帐交易
5 保障金安全交易
6 统一交易流程
7 分阶段付款
8 货到付款交易
9 信用凭证支付交易
10 账期支付交易
    */
        public function getTradeType() {
        return $this->tradeType;
    }
    
    /**
     * 设置1 担保交易
2 预存款交易
3 ETC境外收单交易
4 即时到帐交易
5 保障金安全交易
6 统一交易流程
7 分阶段付款
8 货到付款交易
9 信用凭证支付交易
10 账期支付交易     
     * @param String $tradeType     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setTradeType( $tradeType) {
        $this->tradeType = $tradeType;
    }
    
        	
    private $alipayTradeId;
    
        /**
    * @return 支付宝交易号
    */
        public function getAlipayTradeId() {
        return $this->alipayTradeId;
    }
    
    /**
     * 设置支付宝交易号     
     * @param String $alipayTradeId     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setAlipayTradeId( $alipayTradeId) {
        $this->alipayTradeId = $alipayTradeId;
    }
    
        	
    private $gmtPayment;
    
        /**
    * @return 付款时间
    */
        public function getGmtPayment() {
        return $this->gmtPayment;
    }
    
    /**
     * 设置付款时间     
     * @param String $gmtPayment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtPayment( $gmtPayment) {
        $this->gmtPayment = $gmtPayment;
    }
    
        	
    private $gmtCreate;
    
        /**
    * @return 订单创建时间
    */
        public function getGmtCreate() {
        return $this->gmtCreate;
    }
    
    /**
     * 设置订单创建时间     
     * @param String $gmtCreate     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtCreate( $gmtCreate) {
        $this->gmtCreate = $gmtCreate;
    }
    
        	
    private $gmtModified;
    
        /**
    * @return 订单修改时间
    */
        public function getGmtModified() {
        return $this->gmtModified;
    }
    
    /**
     * 设置订单修改时间     
     * @param String $gmtModified     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setGmtModified( $gmtModified) {
        $this->gmtModified = $gmtModified;
    }
    
        	
    private $carriage;
    
        /**
    * @return 运费
    */
        public function getCarriage() {
        return $this->carriage;
    }
    
    /**
     * 设置运费     
     * @param Long $carriage     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCarriage( $carriage) {
        $this->carriage = $carriage;
    }
    
        	
    private $discount;
    
        /**
    * @return 折扣
    */
        public function getDiscount() {
        return $this->discount;
    }
    
    /**
     * 设置折扣     
     * @param Long $discount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDiscount( $discount) {
        $this->discount = $discount;
    }
    
        	
    private $sumPayment;
    
        /**
    * @return 付款总金额，单位（分）订单需要支付的总金额=产品总金额+运费-折扣金额-抵价券（如果有的话）
    */
        public function getSumPayment() {
        return $this->sumPayment;
    }
    
    /**
     * 设置付款总金额，单位（分）订单需要支付的总金额=产品总金额+运费-折扣金额-抵价券（如果有的话）     
     * @param Long $sumPayment     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSumPayment( $sumPayment) {
        $this->sumPayment = $sumPayment;
    }
    
        	
    private $couponAmount;
    
        /**
    * @return 抵价券对应的RMB，单位为分
    */
        public function getCouponAmount() {
        return $this->couponAmount;
    }
    
    /**
     * 设置抵价券对应的RMB，单位为分     
     * @param Long $couponAmount     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCouponAmount( $couponAmount) {
        $this->couponAmount = $couponAmount;
    }
    
        	
    private $toArea;
    
        /**
    * @return 收货地址
    */
        public function getToArea() {
        return $this->toArea;
    }
    
    /**
     * 设置收货地址     
     * @param String $toArea     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToArea( $toArea) {
        $this->toArea = $toArea;
    }
    
        	
    private $toFullName;
    
        /**
    * @return 收货人姓名
    */
        public function getToFullName() {
        return $this->toFullName;
    }
    
    /**
     * 设置收货人姓名     
     * @param String $toFullName     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToFullName( $toFullName) {
        $this->toFullName = $toFullName;
    }
    
        	
    private $toMobile;
    
        /**
    * @return 收货人手机
    */
        public function getToMobile() {
        return $this->toMobile;
    }
    
    /**
     * 设置收货人手机     
     * @param String $toMobile     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToMobile( $toMobile) {
        $this->toMobile = $toMobile;
    }
    
        	
    private $toPhone;
    
        /**
    * @return 收货人电话
    */
        public function getToPhone() {
        return $this->toPhone;
    }
    
    /**
     * 设置收货人电话     
     * @param String $toPhone     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToPhone( $toPhone) {
        $this->toPhone = $toPhone;
    }
    
        	
    private $toPost;
    
        /**
    * @return 收货地址邮编
    */
        public function getToPost() {
        return $this->toPost;
    }
    
    /**
     * 设置收货地址邮编     
     * @param String $toPost     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setToPost( $toPost) {
        $this->toPost = $toPost;
    }
    
        	
    private $buyerFeedback;
    
        /**
    * @return 买家留言
    */
        public function getBuyerFeedback() {
        return $this->buyerFeedback;
    }
    
    /**
     * 设置买家留言     
     * @param String $buyerFeedback     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerFeedback( $buyerFeedback) {
        $this->buyerFeedback = $buyerFeedback;
    }
    
        	
    private $memos;
    
        /**
    * @return 订单备注
    */
        public function getMemos() {
        return $this->memos;
    }
    
    /**
     * 设置订单备注     
     * @param array include @see OrderMemoModel[] $memos     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setMemos(OrderMemoModel $memos) {
        $this->memos = $memos;
    }
    
        	
    private $orderEntries;
    
        /**
    * @return 订单明细
    */
        public function getOrderEntries() {
        return $this->orderEntries;
    }
    
    /**
     * 设置订单明细     
     * @param array include @see AlibabaTradeBizOrderEntry[] $orderEntries     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setOrderEntries(AlibabaTradeBizOrderEntry $orderEntries) {
        $this->orderEntries = $orderEntries;
    }
    
        	
    private $buyerRateStatus;
    
        /**
    * @return 买家评价状态(4:已评论,5:未评论,6;不需要评论)
    */
        public function getBuyerRateStatus() {
        return $this->buyerRateStatus;
    }
    
    /**
     * 设置买家评价状态(4:已评论,5:未评论,6;不需要评论)     
     * @param Integer $buyerRateStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setBuyerRateStatus( $buyerRateStatus) {
        $this->buyerRateStatus = $buyerRateStatus;
    }
    
        	
    private $sellerRateStatus;
    
        /**
    * @return 卖家评价状态(4:已评论,5:未评论,6;不需要评论)
    */
        public function getSellerRateStatus() {
        return $this->sellerRateStatus;
    }
    
    /**
     * 设置卖家评价状态(4:已评论,5:未评论,6;不需要评论)     
     * @param Integer $sellerRateStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setSellerRateStatus( $sellerRateStatus) {
        $this->sellerRateStatus = $sellerRateStatus;
    }
    
        	
    private $stepPayAll;
    
        /**
    * @return 是否一次性付款
    */
        public function getStepPayAll() {
        return $this->stepPayAll;
    }
    
    /**
     * 设置是否一次性付款     
     * @param Boolean $stepPayAll     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStepPayAll( $stepPayAll) {
        $this->stepPayAll = $stepPayAll;
    }
    
        	
    private $payStatus;
    
        /**
    * @return 1 未冻结/未付款
2 已冻结/已付款
4 已退款
6 已转交易
7 没有创建外部交易(支付宝交易)
8 交易未付款被关闭
9 不可付款(目前仅账期订单使用)
12 待到账
    */
        public function getPayStatus() {
        return $this->payStatus;
    }
    
    /**
     * 设置1 未冻结/未付款
2 已冻结/已付款
4 已退款
6 已转交易
7 没有创建外部交易(支付宝交易)
8 交易未付款被关闭
9 不可付款(目前仅账期订单使用)
12 待到账     
     * @param Integer $payStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setPayStatus( $payStatus) {
        $this->payStatus = $payStatus;
    }
    
        	
    private $logisticsStatus;
    
        /**
    * @return 1 未发货
2 已发货
3 已收货
4 已经退货
5 部分发货
8 还未创建物流订单
    */
        public function getLogisticsStatus() {
        return $this->logisticsStatus;
    }
    
    /**
     * 设置1 未发货
2 已发货
3 已收货
4 已经退货
5 部分发货
8 还未创建物流订单     
     * @param Integer $logisticsStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setLogisticsStatus( $logisticsStatus) {
        $this->logisticsStatus = $logisticsStatus;
    }
    
        	
    private $stepAgreementPath;
    
        /**
    * @return 分阶段法务协议地址，冗余自分阶段模板
    */
        public function getStepAgreementPath() {
        return $this->stepAgreementPath;
    }
    
    /**
     * 设置分阶段法务协议地址，冗余自分阶段模板     
     * @param String $stepAgreementPath     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStepAgreementPath( $stepAgreementPath) {
        $this->stepAgreementPath = $stepAgreementPath;
    }
    
        	
    private $stepOrderList;
    
        /**
    * @return 分阶段订单list
    */
        public function getStepOrderList() {
        return $this->stepOrderList;
    }
    
    /**
     * 设置分阶段订单list     
     * @param array include @see AlibabaTradeBizStepOrderModel[] $stepOrderList     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setStepOrderList(AlibabaTradeBizStepOrderModel $stepOrderList) {
        $this->stepOrderList = $stepOrderList;
    }
    
        	
    private $codActualFee;
    
        /**
    * @return cod交易的实付款（买家实际支付给物流的费用）
    */
        public function getCodActualFee() {
        return $this->codActualFee;
    }
    
    /**
     * 设置cod交易的实付款（买家实际支付给物流的费用）     
     * @param Long $codActualFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodActualFee( $codActualFee) {
        $this->codActualFee = $codActualFee;
    }
    
        	
    private $codAudit;
    
        /**
    * @return 是否COD订单并且清算成功
    */
        public function getCodAudit() {
        return $this->codAudit;
    }
    
    /**
     * 设置是否COD订单并且清算成功     
     * @param Boolean $codAudit     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodAudit( $codAudit) {
        $this->codAudit = $codAudit;
    }
    
        	
    private $codBuyerFee;
    
        /**
    * @return 买家承担的服务费
    */
        public function getCodBuyerFee() {
        return $this->codBuyerFee;
    }
    
    /**
     * 设置买家承担的服务费     
     * @param Long $codBuyerFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodBuyerFee( $codBuyerFee) {
        $this->codBuyerFee = $codBuyerFee;
    }
    
        	
    private $codBuyerInitFee;
    
        /**
    * @return 买家承担的服务费初始值
    */
        public function getCodBuyerInitFee() {
        return $this->codBuyerInitFee;
    }
    
    /**
     * 设置买家承担的服务费初始值     
     * @param Long $codBuyerInitFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodBuyerInitFee( $codBuyerInitFee) {
        $this->codBuyerInitFee = $codBuyerInitFee;
    }
    
        	
    private $codFee;
    
        /**
    * @return cod服务费
    */
        public function getCodFee() {
        return $this->codFee;
    }
    
    /**
     * 设置cod服务费     
     * @param Long $codFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodFee( $codFee) {
        $this->codFee = $codFee;
    }
    
        	
    private $codFeeDividend;
    
        /**
    * @return cod三家分润
    */
        public function getCodFeeDividend() {
        return $this->codFeeDividend;
    }
    
    /**
     * 设置cod三家分润     
     * @param String $codFeeDividend     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodFeeDividend( $codFeeDividend) {
        $this->codFeeDividend = $codFeeDividend;
    }
    
        	
    private $codGmtSign;
    
        /**
    * @return 买家签收时间(COD)
    */
        public function getCodGmtSign() {
        return $this->codGmtSign;
    }
    
    /**
     * 设置买家签收时间(COD)     
     * @param Date $codGmtSign     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodGmtSign( $codGmtSign) {
        $this->codGmtSign = $codGmtSign;
    }
    
        	
    private $codInitFee;
    
        /**
    * @return cod服务费初始值
    */
        public function getCodInitFee() {
        return $this->codInitFee;
    }
    
    /**
     * 设置cod服务费初始值     
     * @param Long $codInitFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodInitFee( $codInitFee) {
        $this->codInitFee = $codInitFee;
    }
    
        	
    private $codSellerFee;
    
        /**
    * @return 卖家承担的服务费
    */
        public function getCodSellerFee() {
        return $this->codSellerFee;
    }
    
    /**
     * 设置卖家承担的服务费     
     * @param Long $codSellerFee     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodSellerFee( $codSellerFee) {
        $this->codSellerFee = $codSellerFee;
    }
    
        	
    private $codStatus;
    
        /**
    * @return 初始值，没有业务逻辑在:0
接单:20
不接单:-20
接单超时:2
揽收成功:30
揽收失败:-30
揽收超时:3
签收成功:100
签收失败:-100
订单等候发送给物流公司:10
用户取消物流订单:-1
    */
        public function getCodStatus() {
        return $this->codStatus;
    }
    
    /**
     * 设置初始值，没有业务逻辑在:0
接单:20
不接单:-20
接单超时:2
揽收成功:30
揽收失败:-30
揽收超时:3
签收成功:100
签收失败:-100
订单等候发送给物流公司:10
用户取消物流订单:-1     
     * @param Integer $codStatus     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCodStatus( $codStatus) {
        $this->codStatus = $codStatus;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "buyerAlipayId", $this->stdResult )) {
    				$this->buyerAlipayId = $this->stdResult->{"buyerAlipayId"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerMemberId", $this->stdResult )) {
    				$this->buyerMemberId = $this->stdResult->{"buyerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "id", $this->stdResult )) {
    				$this->id = $this->stdResult->{"id"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerAlipayId", $this->stdResult )) {
    				$this->sellerAlipayId = $this->stdResult->{"sellerAlipayId"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerMemberId", $this->stdResult )) {
    				$this->sellerMemberId = $this->stdResult->{"sellerMemberId"};
    			}
    			    		    				    			    			if (array_key_exists ( "status", $this->stdResult )) {
    				$this->status = $this->stdResult->{"status"};
    			}
    			    		    				    			    			if (array_key_exists ( "refundStatus", $this->stdResult )) {
    				$this->refundStatus = $this->stdResult->{"refundStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "tradeType", $this->stdResult )) {
    				$this->tradeType = $this->stdResult->{"tradeType"};
    			}
    			    		    				    			    			if (array_key_exists ( "alipayTradeId", $this->stdResult )) {
    				$this->alipayTradeId = $this->stdResult->{"alipayTradeId"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtPayment", $this->stdResult )) {
    				$this->gmtPayment = $this->stdResult->{"gmtPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtCreate", $this->stdResult )) {
    				$this->gmtCreate = $this->stdResult->{"gmtCreate"};
    			}
    			    		    				    			    			if (array_key_exists ( "gmtModified", $this->stdResult )) {
    				$this->gmtModified = $this->stdResult->{"gmtModified"};
    			}
    			    		    				    			    			if (array_key_exists ( "carriage", $this->stdResult )) {
    				$this->carriage = $this->stdResult->{"carriage"};
    			}
    			    		    				    			    			if (array_key_exists ( "discount", $this->stdResult )) {
    				$this->discount = $this->stdResult->{"discount"};
    			}
    			    		    				    			    			if (array_key_exists ( "sumPayment", $this->stdResult )) {
    				$this->sumPayment = $this->stdResult->{"sumPayment"};
    			}
    			    		    				    			    			if (array_key_exists ( "couponAmount", $this->stdResult )) {
    				$this->couponAmount = $this->stdResult->{"couponAmount"};
    			}
    			    		    				    			    			if (array_key_exists ( "toArea", $this->stdResult )) {
    				$this->toArea = $this->stdResult->{"toArea"};
    			}
    			    		    				    			    			if (array_key_exists ( "toFullName", $this->stdResult )) {
    				$this->toFullName = $this->stdResult->{"toFullName"};
    			}
    			    		    				    			    			if (array_key_exists ( "toMobile", $this->stdResult )) {
    				$this->toMobile = $this->stdResult->{"toMobile"};
    			}
    			    		    				    			    			if (array_key_exists ( "toPhone", $this->stdResult )) {
    				$this->toPhone = $this->stdResult->{"toPhone"};
    			}
    			    		    				    			    			if (array_key_exists ( "toPost", $this->stdResult )) {
    				$this->toPost = $this->stdResult->{"toPost"};
    			}
    			    		    				    			    			if (array_key_exists ( "buyerFeedback", $this->stdResult )) {
    				$this->buyerFeedback = $this->stdResult->{"buyerFeedback"};
    			}
    			    		    				    			    			if (array_key_exists ( "memos", $this->stdResult )) {
    			$memosResult=$this->stdResult->{"memos"};
    				$object = json_decode ( json_encode ( $memosResult ), true );
					$this->memos = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$OrderMemoModelResult=new OrderMemoModel();
						$OrderMemoModelResult->setArrayResult($arrayobject );
						$this->memos [$i] = $OrderMemoModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "orderEntries", $this->stdResult )) {
    			$orderEntriesResult=$this->stdResult->{"orderEntries"};
    				$object = json_decode ( json_encode ( $orderEntriesResult ), true );
					$this->orderEntries = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaTradeBizOrderEntryResult=new AlibabaTradeBizOrderEntry();
						$AlibabaTradeBizOrderEntryResult->setArrayResult($arrayobject );
						$this->orderEntries [$i] = $AlibabaTradeBizOrderEntryResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "buyerRateStatus", $this->stdResult )) {
    				$this->buyerRateStatus = $this->stdResult->{"buyerRateStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "sellerRateStatus", $this->stdResult )) {
    				$this->sellerRateStatus = $this->stdResult->{"sellerRateStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "stepPayAll", $this->stdResult )) {
    				$this->stepPayAll = $this->stdResult->{"stepPayAll"};
    			}
    			    		    				    			    			if (array_key_exists ( "payStatus", $this->stdResult )) {
    				$this->payStatus = $this->stdResult->{"payStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "logisticsStatus", $this->stdResult )) {
    				$this->logisticsStatus = $this->stdResult->{"logisticsStatus"};
    			}
    			    		    				    			    			if (array_key_exists ( "stepAgreementPath", $this->stdResult )) {
    				$this->stepAgreementPath = $this->stdResult->{"stepAgreementPath"};
    			}
    			    		    				    			    			if (array_key_exists ( "stepOrderList", $this->stdResult )) {
    			$stepOrderListResult=$this->stdResult->{"stepOrderList"};
    				$object = json_decode ( json_encode ( $stepOrderListResult ), true );
					$this->stepOrderList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$AlibabaTradeBizStepOrderModelResult=new AlibabaTradeBizStepOrderModel();
						$AlibabaTradeBizStepOrderModelResult->setArrayResult($arrayobject );
						$this->stepOrderList [$i] = $AlibabaTradeBizStepOrderModelResult;
					}
    			}
    			    		    				    			    			if (array_key_exists ( "codActualFee", $this->stdResult )) {
    				$this->codActualFee = $this->stdResult->{"codActualFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "codAudit", $this->stdResult )) {
    				$this->codAudit = $this->stdResult->{"codAudit"};
    			}
    			    		    				    			    			if (array_key_exists ( "codBuyerFee", $this->stdResult )) {
    				$this->codBuyerFee = $this->stdResult->{"codBuyerFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "codBuyerInitFee", $this->stdResult )) {
    				$this->codBuyerInitFee = $this->stdResult->{"codBuyerInitFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "codFee", $this->stdResult )) {
    				$this->codFee = $this->stdResult->{"codFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "codFeeDividend", $this->stdResult )) {
    				$this->codFeeDividend = $this->stdResult->{"codFeeDividend"};
    			}
    			    		    				    			    			if (array_key_exists ( "codGmtSign", $this->stdResult )) {
    				$this->codGmtSign = $this->stdResult->{"codGmtSign"};
    			}
    			    		    				    			    			if (array_key_exists ( "codInitFee", $this->stdResult )) {
    				$this->codInitFee = $this->stdResult->{"codInitFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "codSellerFee", $this->stdResult )) {
    				$this->codSellerFee = $this->stdResult->{"codSellerFee"};
    			}
    			    		    				    			    			if (array_key_exists ( "codStatus", $this->stdResult )) {
    				$this->codStatus = $this->stdResult->{"codStatus"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "buyerAlipayId", $this->arrayResult )) {
    			$this->buyerAlipayId = $arrayResult['buyerAlipayId'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerMemberId", $this->arrayResult )) {
    			$this->buyerMemberId = $arrayResult['buyerMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "id", $this->arrayResult )) {
    			$this->id = $arrayResult['id'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerAlipayId", $this->arrayResult )) {
    			$this->sellerAlipayId = $arrayResult['sellerAlipayId'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerMemberId", $this->arrayResult )) {
    			$this->sellerMemberId = $arrayResult['sellerMemberId'];
    			}
    		    	    			    		    			if (array_key_exists ( "status", $this->arrayResult )) {
    			$this->status = $arrayResult['status'];
    			}
    		    	    			    		    			if (array_key_exists ( "refundStatus", $this->arrayResult )) {
    			$this->refundStatus = $arrayResult['refundStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "tradeType", $this->arrayResult )) {
    			$this->tradeType = $arrayResult['tradeType'];
    			}
    		    	    			    		    			if (array_key_exists ( "alipayTradeId", $this->arrayResult )) {
    			$this->alipayTradeId = $arrayResult['alipayTradeId'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtPayment", $this->arrayResult )) {
    			$this->gmtPayment = $arrayResult['gmtPayment'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtCreate", $this->arrayResult )) {
    			$this->gmtCreate = $arrayResult['gmtCreate'];
    			}
    		    	    			    		    			if (array_key_exists ( "gmtModified", $this->arrayResult )) {
    			$this->gmtModified = $arrayResult['gmtModified'];
    			}
    		    	    			    		    			if (array_key_exists ( "carriage", $this->arrayResult )) {
    			$this->carriage = $arrayResult['carriage'];
    			}
    		    	    			    		    			if (array_key_exists ( "discount", $this->arrayResult )) {
    			$this->discount = $arrayResult['discount'];
    			}
    		    	    			    		    			if (array_key_exists ( "sumPayment", $this->arrayResult )) {
    			$this->sumPayment = $arrayResult['sumPayment'];
    			}
    		    	    			    		    			if (array_key_exists ( "couponAmount", $this->arrayResult )) {
    			$this->couponAmount = $arrayResult['couponAmount'];
    			}
    		    	    			    		    			if (array_key_exists ( "toArea", $this->arrayResult )) {
    			$this->toArea = $arrayResult['toArea'];
    			}
    		    	    			    		    			if (array_key_exists ( "toFullName", $this->arrayResult )) {
    			$this->toFullName = $arrayResult['toFullName'];
    			}
    		    	    			    		    			if (array_key_exists ( "toMobile", $this->arrayResult )) {
    			$this->toMobile = $arrayResult['toMobile'];
    			}
    		    	    			    		    			if (array_key_exists ( "toPhone", $this->arrayResult )) {
    			$this->toPhone = $arrayResult['toPhone'];
    			}
    		    	    			    		    			if (array_key_exists ( "toPost", $this->arrayResult )) {
    			$this->toPost = $arrayResult['toPost'];
    			}
    		    	    			    		    			if (array_key_exists ( "buyerFeedback", $this->arrayResult )) {
    			$this->buyerFeedback = $arrayResult['buyerFeedback'];
    			}
    		    	    			    		    		if (array_key_exists ( "memos", $this->arrayResult )) {
    		$memosResult=$arrayResult['memos'];
    			$this->memos = new OrderMemoModel();
    			$this->memos->setStdResult ( $memosResult);
    		}
    		    	    			    		    		if (array_key_exists ( "orderEntries", $this->arrayResult )) {
    		$orderEntriesResult=$arrayResult['orderEntries'];
    			$this->orderEntries = new AlibabaTradeBizOrderEntry();
    			$this->orderEntries->setStdResult ( $orderEntriesResult);
    		}
    		    	    			    		    			if (array_key_exists ( "buyerRateStatus", $this->arrayResult )) {
    			$this->buyerRateStatus = $arrayResult['buyerRateStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "sellerRateStatus", $this->arrayResult )) {
    			$this->sellerRateStatus = $arrayResult['sellerRateStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "stepPayAll", $this->arrayResult )) {
    			$this->stepPayAll = $arrayResult['stepPayAll'];
    			}
    		    	    			    		    			if (array_key_exists ( "payStatus", $this->arrayResult )) {
    			$this->payStatus = $arrayResult['payStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "logisticsStatus", $this->arrayResult )) {
    			$this->logisticsStatus = $arrayResult['logisticsStatus'];
    			}
    		    	    			    		    			if (array_key_exists ( "stepAgreementPath", $this->arrayResult )) {
    			$this->stepAgreementPath = $arrayResult['stepAgreementPath'];
    			}
    		    	    			    		    		if (array_key_exists ( "stepOrderList", $this->arrayResult )) {
    		$stepOrderListResult=$arrayResult['stepOrderList'];
    			$this->stepOrderList = new AlibabaTradeBizStepOrderModel();
    			$this->stepOrderList->setStdResult ( $stepOrderListResult);
    		}
    		    	    			    		    			if (array_key_exists ( "codActualFee", $this->arrayResult )) {
    			$this->codActualFee = $arrayResult['codActualFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "codAudit", $this->arrayResult )) {
    			$this->codAudit = $arrayResult['codAudit'];
    			}
    		    	    			    		    			if (array_key_exists ( "codBuyerFee", $this->arrayResult )) {
    			$this->codBuyerFee = $arrayResult['codBuyerFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "codBuyerInitFee", $this->arrayResult )) {
    			$this->codBuyerInitFee = $arrayResult['codBuyerInitFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "codFee", $this->arrayResult )) {
    			$this->codFee = $arrayResult['codFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "codFeeDividend", $this->arrayResult )) {
    			$this->codFeeDividend = $arrayResult['codFeeDividend'];
    			}
    		    	    			    		    			if (array_key_exists ( "codGmtSign", $this->arrayResult )) {
    			$this->codGmtSign = $arrayResult['codGmtSign'];
    			}
    		    	    			    		    			if (array_key_exists ( "codInitFee", $this->arrayResult )) {
    			$this->codInitFee = $arrayResult['codInitFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "codSellerFee", $this->arrayResult )) {
    			$this->codSellerFee = $arrayResult['codSellerFee'];
    			}
    		    	    			    		    			if (array_key_exists ( "codStatus", $this->arrayResult )) {
    			$this->codStatus = $arrayResult['codStatus'];
    			}
    		    	    		}
 
   
}
?>