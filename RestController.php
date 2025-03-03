<?php
require_once("MobileRestHandler.php");
$view="";
if(isset($_GET["view"]))
{
    $view=$_GET["view"];
    switch($view)
    {
        case "all";
        $mobileRestHandler= new MobileRestHandler();
        $mobileRestHandler->getAllMobiles();
        break;

        case "";
        break;
    }
}

?>