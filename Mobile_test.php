<?php 

require_once("Mobile.php");

function testGetAllMobile()
{
    $mobileOBJ=new Mobile();
    $mobiles = $mobileOBJ->getAllMobile();

    if(empty($mobiles))
    {
        echo "Nincs adat a mobileszközről.\n";
    }
    else
    {
        echo "Mobilok listája.\n";
        foreach($mobiles as $mobile)
    {
        echo "ID: ".$mobile['m_id']."|Név: ".$mobile["m_desc"]."\n";
    }
    }
    
}

testGetAllMobile();


?>