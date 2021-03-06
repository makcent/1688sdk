<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');

class AlibabaProductRelateRelationGroupInfo extends SDKDomain {

       	
    private $code;
    
        /**
    * @return 
    */
        public function getCode() {
        return $this->code;
    }
    
    /**
     * 设置     
     * @param String $code     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setCode( $code) {
        $this->code = $code;
    }
    
        	
    private $description;
    
        /**
    * @return 
    */
        public function getDescription() {
        return $this->description;
    }
    
    /**
     * 设置     
     * @param String $description     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setDescription( $description) {
        $this->description = $description;
    }
    
        	
    private $related;
    
        /**
    * @return 
    */
        public function getRelated() {
        return $this->related;
    }
    
    /**
     * 设置     
     * @param Boolean $related     
     * 参数示例：<pre></pre>     
     * 此参数必填     */
    public function setRelated( $related) {
        $this->related = $related;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "code", $this->stdResult )) {
    				$this->code = $this->stdResult->{"code"};
    			}
    			    		    				    			    			if (array_key_exists ( "description", $this->stdResult )) {
    				$this->description = $this->stdResult->{"description"};
    			}
    			    		    				    			    			if (array_key_exists ( "related", $this->stdResult )) {
    				$this->related = $this->stdResult->{"related"};
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    			if (array_key_exists ( "code", $this->arrayResult )) {
    			$this->code = $arrayResult['code'];
    			}
    		    	    			    		    			if (array_key_exists ( "description", $this->arrayResult )) {
    			$this->description = $arrayResult['description'];
    			}
    		    	    			    		    			if (array_key_exists ( "related", $this->arrayResult )) {
    			$this->related = $arrayResult['related'];
    			}
    		    	    		}
 
   
}
?>