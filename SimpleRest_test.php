<?php
require_once('SimpleRest.php');

function testSimpleRest() {
    $simpleRestObj = new SimpleRest();
   
    $simpleRestObj->setHttpHeaders("application/json", 200);
   
    $responseData = array(
        "status" => "OK",
        "message" => "Sikeres válasz.",
        "http_status_message" => $simpleRestObj->getHttpStatusMessage(200) // HTTP státuszkód üzenet
    );
   
    echo json_encode($responseData);
}

testSimpleRest();
?>