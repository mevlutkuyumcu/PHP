<?php
    //$gunler = array("Pazartesi","Salı","Çarşamba","Perşembe","Cuma","Cumartesi","Pazar");
    //for($i = 0; $i<count($gunler); $i++){
    //	echo $gunler[$i]."<br/>";
//for($i=0;$i<=100;$i++) 
//$dizi[$i] = rand(1,1000); // dizimizin elemanlarını rastgele sayılarla doldurduk
 
 
//for($i=0;$i<count($dizi);$i++) 
//echo $dizi[$i]." "; // dizimizi ekrana yazdırdık.
    for($i=0; $i<=100;$i++)
    $dizi [$i]= rand ( 1,1000); // diziyi rastgele elemanla doldurduk.
    for ($i=0; $i<count($dizi)-1;$i++){
    	for($j=$i +1; $j<count($dizi);$j++){
    		if($dizi[$i]>$dizi[$j]){
    			$geciciDegisken = $dizi[$i];
    			$dizi [$i] = $dizi[$j];
    			$dizi[$j] = $geciciDegisken;
    		}
    	}
    }
    for($i=0; $i<count($dizi);$i++)
    	echo $dizi[$i]."<br/>";
?>