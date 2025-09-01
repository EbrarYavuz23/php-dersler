<?php 
    // $ogrenciler = array("ferhat", "yasin", "ebrar", "bekay");

    // foreach ($ogrenciler as $ogrenci) {
    //     echo $ogrenci."<br>";
    // }
    

    // $urunler = array(
    //     array("Iphone 14", 30000),
    //     array("Iphone 15", 40000),
    //     array("Iphone 16", 50000),
    // );
    
    // foreach ($urunler as $urun) {
    //     echo $urun[0] ." ". $urun[1] . "<br>";
    // }

    

     $urunler = array(
        "100" => array(
            "urun_adi" => "Iphone 14", 
            "fiyat" => 30000
        ),
         "101" => array(
            "urun_adi" => "Iphone 15", 
            "fiyat" => 40000
        ),
         "102" => array(
            "urun_adi" => "Iphone 16", 
            "fiyat" => 50000
        ),
    );
    

        foreach ($urunler as $key => $value) {
        echo $key . " " . $value["urun_adi"]." ".$value[$fiyat]. "<br>"; 
    }



?>