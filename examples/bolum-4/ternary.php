<?php

$yas = 21;
$egitim = "lise";


// if ($yas >= 18) {
//     if ($egitim == "üniversite" or $egitim == "lise") {
//         echo "Ehliyet alabilir.";
//     } else {
//         echo "Eğitim durumunuz yetersiz";
//     }
// } else {
//     echo "Yaş yetersiz";
// }


$sonuc = ($yas >= 18) 
            ? (($egitim = "lise" or $egitim ="üniversite")
                ? "Ehliyet alabilir"
                : "Eğitim düzeyi yetersiz")
            : "Yaşınız yetmiyor";

echo $sonuc;



?>