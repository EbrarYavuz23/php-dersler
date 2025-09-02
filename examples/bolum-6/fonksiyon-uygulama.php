<?php 

// function yazdir($kelime, $adet) {
//     for($i = 0; $i < $adet; $i++) {
//         echo $kelime . "<br>";
//     }
    

// }

// yazdir("Testo Taylan", 4);



// function dikdortgen($alt_kenar, $ust_kenar) {
//     $alan = $alt_kenar * $ust_kenar;
//     $cevre = ($alt_kenar * 2) + ($ust_kenar * 2);


//     return "Dikdörtgenin alanı $alan, çevresi ise $cevre boyutundadır.". "<br>";
// }

// echo dikdortgen(10, 10);



// function yaziTura () {
//     $sayi = rand(1, 100);

//     if ($sayi < 50) {
//         return "Yazı!";
//     } else {
//         return "Tura!";
//     }
// }

// echo yaziTura();


function tamBolenleriBul($sayi) {
    $tamBolenler = array();

    for($i = 2; $i < $sayi; $i++) {
        if($sayi % $i == 0) {
            array_push($tamBolenler, $i);
        }
    }
    return $tamBolenler;
}

print_r(tamBolenleriBul(5));

?>