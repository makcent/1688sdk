<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('com/alibaba/logistics/param/AlibabaLogisticsCommonError.class.php');
include_once ('com/alibaba/logistics/param/AlibabaLogisticsExpressExpressWTDOrderCreateResult.class.php');

class AlibabaLogisticsInternationalexpressWtdOrderAddResult {

        	
    private $error;
    
        /**
    * @return 错误信息
    */
        public function getError() {
        return $this->error;
    }
    
    /**
     * 设置错误信息     
     * @param AlibabaLogisticsCommonError $error     
          
     * 此参数必填     */
    public function setError(AlibabaLogisticsCommonError $error) {
        $this->error = $error;
    }
    
        	
    private $result;
    
        /**
    * @return 创建订单结果
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置创建订单结果     
     * @param AlibabaLogisticsExpressExpressWTDOrderCreateResult $result     
          
     * 此参数必填     */
    public function setResult(AlibabaLogisticsExpressExpressWTDOrderCreateResult $result) {
        $this->result = $result;
    }
    
        	
    private $success;
    
        /**
    * @return 是否处理成功：true为成功，false为失败，失败原因见error
    */
        public function getSuccess() {
        return $this->success;
    }
    
    /**
     * 设置是否处理成功：true为成功，false为失败，失败原因见error     
     * @param Boolean $success     
          
     * 此参数必填     */
    public function setSuccess( $success) {
        $this->success = $success;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "error", $this->stdResult )) {
    				$errorResult=$this->stdResult->{"error"};
    				$this->error = new AlibabaLogisticsCommonError();
    				$this->error->setStdResult ( $errorResult);
    			}
    			    		    				    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$resultResult=$this->stdResult->{"result"};
    				$this->result = new AlibabaLogisticsExpressExpressWTDOrderCreateResult();
    				$this->result->setStdResult ( $resultResult);
    			}
    			    		    				    			    			if (array_key_exists ( "success", $this->stdResult )) {
    				$this->success = $this->stdResult->{"success"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "error", $this->arrayResult )) {
    		$errorResult=$arrayResult['error'];
    			    			$this->error = new AlibabaLogisticsCommonError();
    			    			$this->error->setStdResult ( $errorResult);
    		}
    		    	    			    		    		if (array_key_exists ( "result", $this->arrayResult )) {
    		$resultResult=$arrayResult['result'];
    			    			$this->result = new AlibabaLogisticsExpressExpressWTDOrderCreateResult();
    			    			$this->result->setStdResult ( $resultResult);
    		}
    		    	    			    		    			if (array_key_exists ( "success", $this->arrayResult )) {
    			$this->success = $arrayResult['success'];
    			}
    		    	    		}

}
?>