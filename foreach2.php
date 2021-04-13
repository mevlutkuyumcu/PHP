<?php
    $dizi = array ( 
    "müsteri-1" => array("Ad" => "vehbi","<br/>Soyad"=> "Akdoğan"),
    "müsteri-2" => array("Ad" => "Taha", "<br/>Soyad" => "Kırca"),
    "müsteri-3" => array("Ad" => "Eren", "<br/>Soyad" => "Başaran")
    );
    foreach ($dizi as $key1 => $val1) {
    	echo "$key1  ";
        foreach ($val1 as $key2 => $val2) {
    	echo "$key2 $val2";
        }
        echo "<br/>";       
    }
?>