<?php 
    /*
    $toplam = 0;
    $dizi = array(1,2,3,4,5,6,7,8,9);
    foreach ($dizi as $d ) {
    	$toplam +=$d;
    }
    echo "Dizinin Elemanları Toplamı : $toplam";
    */
    $dizi = array(array( 1,2),array(3,4),array(5,6)
    );
    foreach ($dizi as $d) {
     foreach( $d as $v){
     	echo "$v-";
     }
     echo "<br/>";

   }
 ?>
