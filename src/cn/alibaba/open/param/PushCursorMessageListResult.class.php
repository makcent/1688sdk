<?php

include_once ('com/alibaba/openapi/client/entity/SDKDomain.class.php');
include_once ('com/alibaba/openapi/client/entity/ByteArray.class.php');
include_once ('cn/alibaba/open/param/PushMessage.class.php');

class PushCursorMessageListResult {

        	
    private $pushMessageList;
    
        /**
    * @return 推送消息列表
    */
        public function getPushMessageList() {
        return $this->pushMessageList;
    }
    
    /**
     * 设置推送消息列表     
     * @param array include @see PushMessage[] $pushMessageList     
          
     * 此参数必填     */
    public function setPushMessageList(PushMessage $pushMessageList) {
        $this->pushMessageList = $pushMessageList;
    }
    
    	
	private $stdResult;
	
	public function setStdResult($stdResult) {
		$this->stdResult = $stdResult;
					    			    			if (array_key_exists ( "pushMessageList", $this->stdResult )) {
    			$pushMessageListResult=$this->stdResult->{"pushMessageList"};
    				$object = json_decode ( json_encode ( $pushMessageListResult ), true );
					$this->pushMessageList = array ();
					for($i = 0; $i < count ( $object ); $i ++) {
						$arrayobject = new ArrayObject ( $object [$i] );
						$PushMessageResult=new PushMessage();
						$PushMessageResult->setArrayResult($arrayobject );
						$this->pushMessageList [$i] = $PushMessageResult;
					}
    			}
    			    		    		}
	
	private $arrayResult;
	public function setArrayResult($arrayResult) {
		$this->arrayResult = $arrayResult;
				    		    		if (array_key_exists ( "pushMessageList", $this->arrayResult )) {
    		$pushMessageListResult=$arrayResult['pushMessageList'];
    			$this->pushMessageList = new PushMessage();
    			$this->pushMessageList->setStdResult ( $pushMessageListResult);
    		}
    		    	    		}

}
?>