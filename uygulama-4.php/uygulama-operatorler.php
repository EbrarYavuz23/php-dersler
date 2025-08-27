<?php
    $a = 10;
    $b = 20;
    $c = 5;


    //1- a, b çarpımı ile a,b,c toplamının farkı nedir?
    //$sonuc1 = ($a * $b) - ($a + $b + $c);
    
    //2- a, b ve c toplamımım mod 3'ü nedir?
    //$sonuc = ($a + $b + $c) % 3;
    
    //3- b'nin c kuvveti nedir?
    //$sonuc = $b ** $c;
    //4- a için 50 - 100 arasında kontrol yapın
    //$sonuc = ($a > 50 and $a < 100);
    
    //5- a için pozitif çift kontrol yapın.
    $sonuc = ($a > 0 and $a % 2 == 0);
  
    //6- username ve password giriş kontrolü yapın

    $username = "ebrar";
    $password = "1234";


    $giris_onay = ($username == "ebrar" and $password == "123");
    //echo var_dump($giris_onay);

    //7- a, b, c için büyüklük kontrolü yapın.


    $vize1 = "60";
    $vize2 = "50";
    $final = "70";

    $ortalama = (($vize1 + $vize2) / 2 ) * 0.6 + ($final * 0.4);  
    //$gecmeDurumu = $ortalama >= 50;
    $gecmeDurumu = ($ortalama >= 50 and $final >= 50 );

    echo "Sınavdan ".$gecmeDurumu;

 

?>