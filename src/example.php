<?php

include_once './SDK.php';

 makcent\AlibabaSDK\SDK::schema();

$obj = makcent\AlibabaSDK\SDK::getSdk('com.logistics.AlibabaBulksettlementOpBulkSettlementQueryReceiveNoteListByIdsParam');
var_dump($obj);
exit();
