<?php 
    $ogrenciler = array("ferhat", "yasin", "ebrar", "bekay");

    // for($i = 0; $i < count($ogrenciler); $i += 1) {
    //     echo $ogrenciler[$i]."<br>";
    // }

    // $i < 0;
    // while($i < count($ogrenciler)) {
    //     echo $ogrenciler[$i]."<br>";
    //     $i += 1;
    // }

    $urunler = array(
        array("Iphone 14", 30000),
        array("Iphone 15", 40000),
        array("Iphone 16", 50000),
    );
    
    for($i = 0; $i <= count($urunler); $i ++){
        echo $urunler[$i] [0] . "<br>" . $urunler[$i] [1];
        echo "<br>";
    }
?>