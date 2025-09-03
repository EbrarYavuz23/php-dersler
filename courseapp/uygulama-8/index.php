<?php 

    const title = "Popüler Kurslar";

    $kategoriler = array(
        array( "kategori_adi" => "Programlama", "aktif" => true),
        array( "kategori_adi" => "Web Geliştirme", "aktif" => false), 
        array( "kategori_adi" => "Veri Analizi", "aktif" => false), 
        array( "kategori_adi" => "Ofis Programları", "aktif" => false),  
    );



    $kurslar = array(
        "1" => array(
            "baslik" => "Php Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Php ile web geliştirme",
            "resim" => "php.jpg",
            "yayinTarihi" => "2023-01-01",
            "yorumSayisi" => 0,
            "begeniSayisi" => 10,
            "onay" => true
        ),
        "2" => array(
            "baslik" => "Python Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Python prrogramlama",
            "resim" => "python.jpg",
            "yayinTarihi" => "2023-03-03",
            "yorumSayisi" => 10,
            "begeniSayisi" => 0,
            "onay" => true
        ),
        "3" => array(
            "baslik" => "Node.js Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Node.js ile web geliştirme",
            "resim" => "node_js.jpg",
            "yayinTarihi" => "2023-05-05",
            "yorumSayisi" => 10,
            "begeniSayisi" => 20,
            "onay" => true
        ),
        "4" => array (
            "baslik" => "Django Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Django ile web geliştirme",
            "resim" => "php.jpg",
            "yayinTarihi" => "2023-07-07",
            "yorumSayisi" => 0,
            "begeniSayisi" => 5,
            "onay" => true
        ),
        "5" => array(
            "baslik" => "Node.js Kursu",
            "altBaslik" => "Sıfırdan ileri seviye Node.js ile web geliştirme",
            "resim" => "node_js.jpg",
            "yayinTarihi" => "2023-05-05",
            "yorumSayisi" => 10,
            "begeniSayisi" => 20,
            "onay" => true
        ),
    );


    function kursEkle (&$kurslar, string $baslik,string $altBaslik,string $resim,string $yayinTarihi,int $yorumSayisi=0,int $begeniSayisi=0,bool $onay=true) {
        $yeniKurs[count($kurslar) + 1] = array (
            "baslik" => $baslik,
            "altBaslik" => $altBaslik,
            "resim" => $resim,
            "yayinTarihi" => $yayinTarihi,
            "yorumSayisi" => $yorumSayisi,
            "begeniSayisi" => $begeniSayisi,
            "onay" => $onay
        );

        $kurslar = array_merge($kurslar, $yeniKurs); 
    }

    kursEkle($kurslar, "yeni kurs", "alt başlık", "php.jpg", "23.12.2003");


    function urlDuzenle($baslik) {
        return str_replace([" ", "ç", "@", "."], ["-","c","","-"], strtolower($baslik));
    }


    function kisaAciklama($altBaslik) {
        if (strlen($altBaslik) > 50) {
            return substr ($altBaslik,0,50)."...";
        } else {
            return $altBaslik;
        }
        

    }

    
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
                    <?php for ($i = 0; $i < count($kategoriler); $i++ ): ?>
                        <a 
                            href="#" 
                            class="list-group-item list-group-item-action" <?php  echo ($kategoriler[$i] ["aktif"]) ? "active" :""  ?>>
                            <?php echo $kategoriler[$i]["kategori_adi"]; ?>
                        </a>
                    <?php endfor ?>

                </div>
            </div>
            <div class="col-9">
                <h1 class="mb-3"><?php echo title?></h1>
                <p class="lead"> 
                    <?php echo count($kategoriler)?> kategoride <?php echo count($kurslar)?> kurs listelenmiştir.
                </p>
                
                <?php foreach ($kurslar as $kurs): ?>
                    <?php if ($kurs ["onay"]): ?>

                        
                        <div class="card mb-3">
                        <div class="row g-0">
                                <div class="col-4">
                                    <img src="img/<?php echo $kurs ["resim"] ?>" class="img-fluid rounded-start" alt="PHP Logo">
                                </div>
                                <div class="col-8">
                                    <div class="card-body">
                                        <h5 class="card-title">
                                            <a href="<?php echo urlDuzenle($kurs ["baslik"]) ?>">
                                                <?php echo $kurs ["baslik"] ?>
                                            </a> 
                                        </h5>
                                        <p class="card-text">
                                            <?php echo kisaAciklama ($kurs ["altBaslik"])?>
                                        <p>
                                            <?php if($kurslar["1"] ["begeniSayisi"] > 0 ): ?>
                                                <span class="badge rounded-pill text-bg-primary">
                                                    Beğeni: <?php echo $kurs ["begeniSayisi"] ?>
                                                </span>
                                            <?php endif?>    
                                            
                                            <?php if($kurs ["yorumSayisi"] > 0 ): ?>
                                                <span class="badge rounded-pill text-bg-danger">
                                                    Yorum: <?php echo $kurs ["yorumSayisi"] ?>
                                                </span>
                                            <?php else: ?>
                                                <span class="badge rounded-pill text-bg-warning">
                                                    İlk yorumu sen yap!
                                                </span>

                                            <?php endif ?>     
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    <?php endif ?>
                <?php endforeach ?>                                
                </div>
            </div>
        </div>  
    </div>

</body>
</html>