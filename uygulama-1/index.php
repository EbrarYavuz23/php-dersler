<?php 

    const title = "Popüler Kurslar";

    $kurs1_baslik = "Php Kursu";
    $kurs1_altBaslik = "Sıfırdan ileri seviye Php ile web geliştirme";
    $kurs1_resmi = "php.jpg";
    $kurs1_yayinTarihi = "2023-01-01";
    $kurs1_yorumSayisi = "100";
    $kurs1_begeniSayisi = "300";

    $kurs2_baslik = "Python Kursu";
    $kurs2_altBaslik = "Sıfırdan ileri seviye Python prrogramlama";
    $kurs2_resmi = "python.jpg";
    $kurs2_yayinTarihi = "2023-03-03";
    $kurs2_yorumSayisi = "200";
    $kurs2_begeniSayisi = "400";

    $kurs3_baslik = "Node.js Kursu";
    $kurs3_altBaslik = "Sıfırdan ileri seviye Node.js ile web geliştirme";
    $kurs3_resmi = "node_js.jpg";
    $kurs3_yayinTarihi = "2023-05-05";
    $kurs3_yorumSayisi = "300";
    $kurs3_begeniSayisi = "500";

    $kurs1_altBaslik = ucfirst(strtolower($kurs1_altBaslik));
    $kurs2_altBaslik = ucfirst(strtolower($kurs2_altBaslik));
    $kurs3_altBaslik = ucfirst(strtolower($kurs3_altBaslik));

    $kurs1_altBaslik = substr($kurs1_altBaslik, 0, 30). "...";
    $kurs2_altBaslik = substr($kurs2_altBaslik, 0, 30). "...";
    $kurs3_altBaslik = substr($kurs3_altBaslik, 0, 30). "...";

    $kurs1_url = str_replace([" ", "ç", "@", "."], ["-","c","","-"], strtolower($kurs1_baslik));
    $kurs2_url = str_replace([" ", "ç", "@", "."], ["-","c","","-"], strtolower($kurs2_baslik));
    $kurs3_url = str_replace([" ", "ç", "@", "."], ["-","c","","-"], strtolower($kurs3_baslik));
    
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.2.3/css/bootstrap.min.css"/>
    <title>Document</title>
</head>
<body> 
    
    <div class="container my-3">
        <h1 class="mb-3"><?php echo title?></h1>
        <div class="card mb-3">
            <div class="row g-0">
                <div class="col-3">
                    <img src="img/<?php echo $kurs1_resmi ?>" class="img-fluid rounded-start" alt="PHP Logo">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs1_url ?>">
                                <?php echo $kurs1_baslik ?>
                            </a> 
                        </h5>
                        <p class="card-text"><?php echo $kurs1_altBaslik ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni: <?php echo $kurs1_begeniSayisi ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum: <?php echo $kurs1_yorumSayisi ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

            <div class="card mb-3">
            <div class="row g-0">
                <div class="col-3">
                    <img src="img/<?php echo $kurs2_resmi ?>" class="img-fluid rounded-start" alt="PHP Logo">
                </div>
                <div class="col-9">
                    <div class="card-body">
                        <h5 class="card-title">
                            <a href="<?php echo $kurs2_url ?>">
                                <?php echo $kurs2_baslik ?>
                            </a> 
                        </h5>
                        <p class="card-text"><?php echo $kurs2_altBaslik ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni: <?php echo $kurs2_begeniSayisi ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum: <?php echo $kurs2_yorumSayisi ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>

            <div class="card mb-3">
            <div class="row g-0">
                <div class="col-3">
                    <img src="img/<?php echo $kurs3_resmi ?>" class="img-fluid rounded-start" alt="PHP Logo">
                </div>
                <div class="col-9">
                    <div class="card-body">
                            <a href="<?php echo $kurs3_url ?>">
                                <?php echo $kurs3_baslik ?>
                            </a> 
                    </h5>
                        <p class="card-text"><?php echo $kurs3_altBaslik ?></p>
                        <p>
                            <span class="badge rounded-pill text-bg-primary">
                                Beğeni: <?php echo $kurs3_begeniSayisi ?>
                            </span>
                            <span class="badge rounded-pill text-bg-danger">
                                Yorum: <?php echo $kurs3_yorumSayisi ?>
                            </span>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>