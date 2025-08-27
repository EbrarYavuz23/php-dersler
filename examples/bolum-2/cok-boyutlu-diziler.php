<?php

    $ogreci_notu1 = array("Ahmet Yılmaz", array(70, 80, 90));

    $ogreci_notu2 = array("Ali Yılmaz", array(59, 30, 50));

    $ogreci1_ortalama = ($ogreci_notu1[1] [0] + $ogreci_notu1[1] [1] + $ogreci_notu1[1] [2]) / 3;
    $ogreci_notu2_ortalama = ($ogreci_notu2[1] [0] + $ogreci_notu2[1] [1] + $ogreci_notu2[1] [2]) / 3;
    
    
    echo $ogreci_notu1[0] . "<br>";
    echo $ogreci_notu1[1] [0] . "<br>";
    echo $ogreci_notu1[1] [1] . "<br>";
    echo $ogreci_notu1[1] [2] . "<br>";
    echo $ogreci1_ortalama . "<br>";

    
    

    echo $ogreci_notu2[0] . "<br>";
    echo $ogreci_notu2[1] [0] . "<br>";
    echo $ogreci_notu2[1] [1] . "<br>";
    echo $ogreci_notu2[1] [2] . "<br>";
    echo $ogreci_notu2_ortalama . "<br>";
    

    $arkadaslar = array(
        
        "1" => array(
            "Ad" => "Mehmet",
            "Soyad" => "Karartı",
            "Yaş" => "21",
            "Dersler ve Notlar" => array(
                "Ekonomi" => array(0, 0, 0),
                "Reklam" => array ( 70, 80, 30),
            )
        ),
        "2" => array(
            "Ad" => "Sencer",
            "Soyad" => "Çoşkun",
            "Yaş" => "21",
            "Dersler ve Notlar" => array(
                "Elektronik Mühendisliğine Giriş" => array(0, 0, 0),
                "C++" => array ( 10, 10, 20),
            )
        ),
    );

    echo $arkadaslar["1"] ["Ad"] . "<br>";
    echo $arkadaslar["2"] ["Dersler ve Notlar"] ["C++"] [2] . "<br>";

    $sencer_not1 = $arkadaslar ["2"] ["Dersler ve Notlar"] ["C++"] [0];
    $sencer_not2 = $arkadaslar ["2"] ["Dersler ve Notlar"] ["C++"] [1];
    $sencer_not3 = $arkadaslar ["2"] ["Dersler ve Notlar"] ["C++"] [2];

    echo $sencer_not_ortalama = ($sencer_not1 + $sencer_not2 + $sencer_not3) / 3 . "<br>";
?>
