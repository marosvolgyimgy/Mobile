<?php
require_once('Mobile.php');

function testGetAllMobileUsingReflection() {
    $reflectionClass = new ReflectionClass('Mobile');
   
    $method = $reflectionClass->getMethod('getAllMobile');
   
    if ($method->isPublic()) {
        echo "A getAllMobile metódus elérhető.\n";
       
        $mobileObj = $reflectionClass->newInstance();     
        $mobiles = $method->invoke($mobileObj);
       
        if (empty($mobiles)) {
            echo "Nincs adat a mobileszközökről.\n";
        } else {
            echo "Mobilok listája:\n";
            print_r($mobiles);
            foreach ($mobiles as $mobile)
            {
                echo "ID: " . $mobile['m_id'] . " | Név: "
                 . $mobile['m_desc'] . "\n";
            }
        }
    } else {
        echo "A getAllMobile metódus nem elérhető.\n";
    }
}

testGetAllMobileUsingReflection();
?>