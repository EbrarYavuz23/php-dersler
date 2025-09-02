<?php 

function sene() {
    return date("Y");
} 

function yas() {
    return sene() - 2003;
}

$yas_hesaplama = yas();


function saat() {
    return date("h");
}


function selamlama() {
    if (saat() < 12) {
        return "günaydın";
    } else {
        return "iyi akşamlar";
    }
}

echo selamlama();



?>