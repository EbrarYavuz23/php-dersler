<?php 

function selamlama($isim) {
    return "Merhaba ".$isim."<br>"; 
} 

echo selamlama("Yasin");
echo selamlama("Ferhat");
echo selamlama("Berkay");


function dogumYili($dogum_tarihi) {
    return date("Y") - $dogum_tarihi."<br>"; 
} 

echo dogumYili(2003);


function emeklilikBilgisi($dogum_tarihi, $isim) {
    $yas = dogumYili($dogum_tarihi);
    $kalan_sure = 65 - $yas;

    if ($kalan_sure < 0) {
        return "$isim, zaten $kalan_sure yıl önce emekli oldun.";
    } else {
        return "Emekliliğine $kalan_sure yıl kaldı $isim !";
    }
}


echo emeklilikBilgisi(1955, "Ebrar");



?>