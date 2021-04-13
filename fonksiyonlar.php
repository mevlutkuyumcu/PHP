<?php
    $sayi3= 16;
    $kelime="saglam";
    echo "Sayının karekökü : ".sqrt($sayi3)."<br>";
    echo "Sayının üssü : ".pow(3,2)."<br>";
    echo "Sayının mutlak değeri : ".abs(-3)."<br>";
    echo "En küçük sayı : ".min(1,2,3,4,5,6)."<br>";
    echo "En büyük sayı : ".max(3,5,6,7,8)."<br>";
    echo "kelimenin veri tipi :" .gettype($kelime)."<br>";
    echo "Sayının veri tipi :".gettype($sayi3)."<br>";
 /*"<br>" string olarak kullanımı bu şekilde. Alt satıra alır.
 Stringi fonksiyonla birleştirmek için nokta kullanılır. Örneğin echo "sayı karesi : ".fonksiyon($tanımlanansayi)
alta kaydırmak için fonksiyon oldugu için string halinde "<br>"; ekleriz.*/
?>