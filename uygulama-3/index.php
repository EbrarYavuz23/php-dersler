<?php 

    const title = "Popüler Kurslar";

    $kategoriler = array("Programlama", "Web Geliştirme", "Veri Analizi", "Ofis Programları");

    sort($kategoriler);

    $kurslar = array(
        1 => array(
            "baslik" => "Php Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Php ile web geliştirme",
            "resim" => "php.jpg",
            "yayinTarihi" => "2023-01-01",
            "yorumSayisi" => "100",
            "begeniSayisi" => "300",
        ),
        2 => array(
            "baslik" => "Python Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Python prrogramlama",
            "resim" => "python.jpg",
            "yayinTarihi" => "2023-03-03",
            "yorumSayisi" => "200",
            "begeniSayisi" => "400",
        ),
        3 => array(
            "baslik" => "Node.js Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Node.js ile web geliştirme",
            "resim" => "node_js.jpg",
            "yayinTarihi" => "2023-05-05",
            "yorumSayisi" => "300",
            "begeniSayisi" => "500",
        ),
    );


    $yeni_film = array (
        "baslik" => "Django Kursu",
        "altBaslik" => "Sıfırdan ileri seviye Django ile web geliştirme",
        "resim" => "php.jpg",
        "yayinTarihi" => "2023-07-07",
        "yorumSayisi" => "400",
        "begeniSayisi" => "600",
    );

    $kurslar[4] = $yeni_film;


    $kurs1_altBaslik = ucfirst(strtolower($kurslar["1"] ["altBaslik"]));
    $kurs2_altBaslik = ucfirst(strtolower($kurslar["2"] ["altBaslik"]));
    $kurs3_altBaslik = ucfirst(strtolower($kurslar["3"] ["altBaslik"]));

    $kurs1_altBaslik = substr($kurs1_altBaslik, 0, 30). "...";
    $kurs2_altBaslik = substr($kurs2_altBaslik, 0, 30). "...";
    $kurs3_altBaslik = substr($kurs3_altBaslik, 0, 30). "...";

    $kurs1_url = str_replace([" ", "ç", "@", "."], ["-","c","","-"], strtolower($kurslar["1"] ["baslik"]));
    $kurs2_url = str_replace([" ", "ç", "@", "."], ["-","c","","-"], strtolower($kurslar["2"] ["baslik"]));
    $kurs3_url = str_replace([" ", "ç", "@", "."], ["-","c","","-"], strtolower($kurslar["3"] ["baslik"]));
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <title>PHP Uygulama</title>
</head>
<body> 
    
    <div class="container my-3">
        
        <div class="row">
            <div class="col-3">
                <div class="list-group">
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[0]?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[1]?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[2]?></a>
                    <a href="#" class="list-group-item list-group-item-action"><?php echo $kategoriler[3]?></a>
                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo title?></h1>
                <p class="lead"> 
                    <?php echo count($kategoriler)?> kategoride <?php echo count($kurslar)?> kurs listelenmiştir.
                </p>
                <div class="card mb-3">
                <div class="row g-0">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["1"] ["resim"] ?>" class="img-fluid rounded-start" alt="PHP Logo">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs1_url ?>">
                                        <?php echo $kurslar["1"] ["baslik"] ?>
                                    </a> 
                                </h5>
                                <p class="card-text"><?php echo $kurslar["1"] ["altBaslik"] ?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                        Beğeni: <?php echo $kurslar["1"] ["begeniSayisi"] ?>
                                    </span>
                                    <span class="badge rounded-pill text-bg-danger">
                                        Yorum: <?php echo $kurslar["1"] ["yorumSayisi"] ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["2"] ["resim"] ?>" class="img-fluid rounded-start" alt="PHP Logo">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs2_url ?>">
                                        <?php echo $kurslar["2"] ["baslik"] ?>
                                    </a> 
                                </h5>
                                <p class="card-text"><?php echo $kurslar["2"] ["altBaslik"] ?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                        Beğeni: <?php echo $kurslar["2"] ["begeniSayisi"] ?>
                                    </span>
                                    <span class="badge rounded-pill text-bg-danger">
                                        Yorum: <?php echo $kurslar["2"] ["yorumSayisi"] ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["3"] ["resim"] ?>" class="img-fluid rounded-start" alt="PHP Logo">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs3_url ?>">
                                        <?php echo $kurslar["3"] ["baslik"] ?>
                                    </a> 
                                </h5>
                                <p class="card-text"><?php echo $kurslar["3"] ["altBaslik"] ?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                        Beğeni: <?php echo $kurslar["3"] ["begeniSayisi"] ?>
                                    </span>
                                    <span class="badge rounded-pill text-bg-danger">
                                        Yorum: <?php echo $kurslar["3"] ["yorumSayisi"] ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                    <div class="card mb-3">
                    <div class="row g-0">
                        <div class="col-4">
                            <img src="img/<?php echo $kurslar["4"] ["resim"] ?>" class="img-fluid rounded-start" alt="PHP Logo">
                        </div>
                        <div class="col-8">
                            <div class="card-body">
                                <h5 class="card-title">
                                    <a href="<?php echo $kurs3_url ?>">
                                        <?php echo $kurslar["4"] ["baslik"] ?>
                                    </a> 
                                </h5>
                                <p class="card-text"><?php echo $kurslar["4"] ["altBaslik"] ?></p>
                                <p>
                                    <span class="badge rounded-pill text-bg-primary">
                                        Beğeni: <?php echo $kurslar["4"] ["begeniSayisi"] ?>
                                    </span>
                                    <span class="badge rounded-pill text-bg-danger">
                                        Yorum: <?php echo $kurslar["4"] ["yorumSayisi"] ?>
                                    </span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>  
    </div>

</body>
</html>