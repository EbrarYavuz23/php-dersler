<?php 

    require "libs/variables.php";

    require "libs/functions.php";

    
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>


<?php 

    if($_SERVER["REQUEST_METHOD"]=="POST") {
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $repassword = $_POST["repassword"];
        $city = $_POST["city"];
        $hobiler = $_POST["hobi"];

    }

        echo $username."<br>";
        echo $email."<br>"; 
        echo $password."<br>"; 
        echo $repassword."<br>"; 

        foreach ($hobiler as $hobi){
        echo $hobi."<br>";
        }

        echo "<pre>";
        print_r($_POST);
        echo "</pre>";
    
?>


    
<div class="container my-3">
        
        <div class="row">
            <div class="col-12">
                <form action="register.php" method="post">
                    <div class="mb-3">
                        <label for="username">Kullanıcı Adı</label>
                        <input type="text" name="username" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="email">E-Posta</label>
                        <input type="email" name="email" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="password">Şifre</label>
                        <input type="password" name="password" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label for="repassword">Şifre Tekrar</label>
                        <input type="password" name="repassword" class="form-control">
                    </div>
                    
                    <div class="mb-3">
                        <label for="city">Şehir Seçiniz</label>
                        <select name="city" class="form-select">
                            <option value="-1">Şehir Seçiniz</option>
                            <option value="1">İstanbul</option>
                            <option value="2">Ankara</option>
                            <option value="3">İzmir</option>
                            <option value="4">Kırklareli</option>
                            <option value="5">Edirne</option>
                            <option value="6">Balıkesir</option>
                            <option value="7">Çanakkale</option>
                            <option value="8">Muğla</option>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="hobiler">Hobiler</label>
                        <div class="form-check">
                            <input type="checkbox" name="hobi[]" value="sinema" id="hobiler_0">
                            <label for="hobiler_0" class="form-check-label">Sinema</label>
                        </div>
                        
                        <div class="form-check">
                            <input type="checkbox" name="hobi[]" value="spor" id="hobiler_1">
                            <label for="hobiler_1" class="form-check-label">Spor</label>
                        </div>
                        
                        <div class="form-check">
                            <input type="checkbox" name="hobi[]" value="müzik" id="hobiler_2">
                            <label for="hobiler_2" class="form-check-label">Müzik</label>
                        </div>

                    </div>
                    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                </form>
            </div>
        </div>  
</div>

<?php include "partials/_footer.php" ?>