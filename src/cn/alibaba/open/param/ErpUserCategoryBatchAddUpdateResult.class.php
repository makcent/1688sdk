<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class ErpUserCategoryBatchAddUpdateResult {

        	
    private $resultData;
    
        /**
    * @return 操作结果
    */
        public function getResultData() {
        return $this->resultData;
    }
    
    /**
     * 设置操作结果     
     * @param String $resultData     
          
     * 此参数必填     */
    public function setResultData( $resultData) {
        $this->resultData = $resultData;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "resultData", $this->stdResult )) {
    				$this->resultData = $this->stdResult->{"resultData"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "resultData", $this->arrayResult )) {
    			$this->resultData = $arrayResult['resultData'];
    			}
    		    	    		}

}
?>