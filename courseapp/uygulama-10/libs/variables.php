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


?>