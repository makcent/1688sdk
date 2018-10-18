<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class CaigouApiOrderUpdateOrderStatusResult {

        	
    private $result;
    
        /**
    * @return 若成功，为true；若失败为false，具体错误信息请看错误码。
    */
        public function getResult() {
        return $this->result;
    }
    
    /**
     * 设置若成功，为true；若失败为false，具体错误信息请看错误码。     
     * @param Boolean $result     
          
     * 此参数必填     */
    public function setResult( $result) {
        $this->result = $result;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "result", $this->stdResult )) {
    				$this->result = $this->stdResult->{"result"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "result", $this->arrayResult )) {
    			$this->result = $arrayResult['result'];
    			}
    		    	    		}

}
?>