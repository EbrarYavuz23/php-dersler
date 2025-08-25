<?php

$plakalar = array("34", "06", "35", "01", "16");
$sehirler = array("İstanbul", "Ankara", "İzmir", "Adana", "Bursa"); 

echo "$plakalar[0] : $sehirler[0]" . "<br>";
echo "$plakalar[1] : $sehirler[1]" . "<br>";


$plaka_bilgileri = array(
    "34" => "İstanbul",
    "06" => "Ankara",
    "35" => "İzmir",
    "01" => "Adana",
    "16" => "Bursa"
);

echo $plaka_bilgileri["34"] . "<br>";


$telefon_bilgileri = array(
    "Ferhat" => "555",
    "Yasin" => "444",
    "Ebrar" => "333",
);

echo $telefon_bilgileri["Ebrar"] . "<br>";



?>