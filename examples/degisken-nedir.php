<?php
    
    $maasEbrar = 10000;

    $maasYasin = 30000;

    $maasFerhat = 50000;

    $vergi = 0.27;


    echo $maasEbrar - ($maasEbrar * $vergi);  //Ali'ın maaşı
    echo "<br>";
    echo $maasYasin - ($maasYasin * $vergi);  //Yasin'in maaşı
    echo "<br>";
    echo $maasFerhat - ($maasFerhat * $vergi);  //Ferhat'ın maaşı

?>