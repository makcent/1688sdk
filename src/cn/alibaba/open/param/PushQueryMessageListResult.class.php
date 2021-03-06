<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/PushMessagePage.class.php');

class PushQueryMessageListResult {

        	
    private $pushMessagePage;
    
        /**
    * @return 分页数据
    */
        public function getPushMessagePage() {
        return $this->pushMessagePage;
    }
    
    /**
     * 设置分页数据     
     * @param PushMessagePage $pushMessagePage     
          
     * 此参数必填     */
    public function setPushMessagePage(PushMessagePage $pushMessagePage) {
        $this->pushMessagePage = $pushMessagePage;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "pushMessagePage", $this->stdResult )) {
    				$pushMessagePageResult=$this->stdResult->{"pushMessagePage"};
    				$this->pushMessagePage = new PushMessagePage();
    				$this->pushMessagePage->setStdResult ( $pushMessagePageResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "pushMessagePage", $this->arrayResult )) {
    		$pushMessagePageResult=$arrayResult['pushMessagePage'];
    			    			$this->pushMessagePage = new PushMessagePage();
    			    			$this->pushMessagePage->setStdResult ( $pushMessagePageResult);
    		}
    		    	    		}

}
?>