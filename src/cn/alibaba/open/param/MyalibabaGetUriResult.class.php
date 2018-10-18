<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class MyalibabaGetUriResult {

        	
    private $url;
    
        /**
    * @return 阿里助手页面地址
    */
        public function getUrl() {
        return $this->url;
    }
    
    /**
     * 设置阿里助手页面地址     
     * @param String $url     
          
     * 此参数必填     */
    public function setUrl( $url) {
        $this->url = $url;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "url", $this->stdResult )) {
    				$this->url = $this->stdResult->{"url"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "url", $this->arrayResult )) {
    			$this->url = $arrayResult['url'];
    			}
    		    	    		}

}
?>