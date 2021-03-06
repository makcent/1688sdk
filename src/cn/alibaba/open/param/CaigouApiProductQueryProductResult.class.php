<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/CaigouDomainCommonPage.class.php');

class CaigouApiProductQueryProductResult {

        	
    private $pageResult;
    
        /**
    * @return 分页信息
    */
        public function getPageResult() {
        return $this->pageResult;
    }
    
    /**
     * 设置分页信息     
     * @param CaigouDomainCommonPage $pageResult     
          
     * 此参数必填     */
    public function setPageResult(CaigouDomainCommonPage $pageResult) {
        $this->pageResult = $pageResult;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "pageResult", $this->stdResult )) {
    				$pageResultResult=$this->stdResult->{"pageResult"};
    				$this->pageResult = new CaigouDomainCommonPage();
    				$this->pageResult->setStdResult ( $pageResultResult);
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "pageResult", $this->arrayResult )) {
    		$pageResultResult=$arrayResult['pageResult'];
    			    			$this->pageResult = new CaigouDomainCommonPage();
    			    			$this->pageResult->setStdResult ( $pageResultResult);
    		}
    		    	    		}

}
?>