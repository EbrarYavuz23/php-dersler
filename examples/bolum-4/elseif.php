<?php 

// $username = "admin";
// $password = "1234";

// if ($username != "admin") {
//     echo "Kullanıcı adı yanlış.";
// } elseif ($password != "1234") {
//     echo "Şifre yanlış";
// } else {
//     echo "Hoş geldiniz";
// }


$not = 40;


// if ($not >= 0 and $not <= 25) {
//     echo "Notunuz: 0";
// } elseif ($not >= 25 and $not < 45) {
//     echo "Notunuz: 1";
// } elseif ($not >= 45 and $not < 55) {
//     echo "Notunuz: 2";
// } elseif ($not >= 55 and $not < 70) {
//     echo "Notunuz: 3";
// } elseif ($not >= 70 and $not < 85) {
//     echo "Notunuz: 4";
// } elseif ($not >= 85 and $not <= 100) {
//     echo "Notunuz: 5";
// } else {
//     echo "Yanlış bir sayı girdiniz.";
// }



// switch(true) {
//     case ($not >= 0 and $not <= 25):
//     echo "Notunuz: 0";
//     break;
//     case ($not >= 25 and $not < 45): 
//     echo "Notunuz: 1";
//     break;
//     case ($not >= 45 and $not < 55):
//     echo "Notunuz: 2";
//     break;
//     case ($not >= 55 and $not < 70):
//     echo "Notunuz: 3";
//     break;
//     case ($not >= 70 and $not < 85):
//     echo "Notunuz: 4";
//     break;
//     case ($not >= 85 and $not <= 100): 
//     echo "Notunuz: 5";
//     break;
//     default:
//     echo "Yanlış bir sayı girdiniz.";
// }


$ay = "kasım";

switch($ay) {
    case "aralık":
    case "ocak":
    case "şubat":
        echo "kış";
        break;
    case "mart":
    case "nisan":
    case "mayıs":
        echo "ilkbahar";
        break;
    case "haziran":
    case "temmuz":
    case "ağustos":
        echo "yaz";
        break;
    case "eylül":
    case "ekim":
    case "kasım":
        echo "sonbahar";
        break;
    default:
        echo "Yanlış bilgi.";
}






?>