<?php 

    require "libs/variables.php";

    require "libs/functions.php";

    
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>


<?php 

    if($_SERVER["REQUEST_METHOD"]=="POST") {

        $username = " ";
        $usernameErr = " ";
        if (empty($_POST["username"])) {
            $usernameErr = "username gerekli alan";
        } else {
            $username = $_POST["username"];
        }


        $email = " ";
        $emailErr = " ";
        if (empty($_POST["email"])) { 
            $emailErr = "email gerekli alan";
        } else {
            $email = $_POST["email"];
        }

        $password = " ";
        $passwordErr = " ";
        if (empty($_POST["pasword"])) {
            $passwordErr = "password gerekli alan";
        } else {
            $password = $_POST["password"];
        }
    
        
        $repassword = " ";
        $repasswordErr = " ";
        if ($_POST["repasword"]!= $_POST["password"]) {
            $repasswordErr = "parolalar eşleşmiyor";
        } else {
            $repassword = $_POST["repassword"];
        }

        
        
        $city = " ";
        $cityErr = " ";
        if ($_POST["city"]== -1) {
            $cityErr = "şehir seçmelisin";
        } else {
            $city = $_POST["city"];
        }

        $hobiler = " ";
        $hobilerErr = " ";
        if (!isset($_POST["hobiler"])) {
            $hobilerErr = "en az 1 hobi seçmelisin";
        } else {
            $hobiler = $_POST["hobiler"];
        }
    }

?>


    
<div class="container my-3">
        
        <div class="row">
            <div class="col-12">
                <form action="register.php" method="post">
                    <div class="mb-3">
                        <label for="username">Kullanıcı Adı</label>
                        <input type="text" name="username" class="form-control">
                        <div class="text-danger"><?php echo $usernameErr;?></div>
                    </div>

                    <div class="mb-3">
                        <label for="email">E-Posta</label>
                        <input type="email" name="email" class="form-control">
                        <div class="text-danger"><?php echo $emailErr;?></div>
                    </div>

                    <div class="mb-3">
                        <label for="password">Şifre</label>
                        <input type="password" name="password" class="form-control">
                        <div class="text-danger"><?php echo $passwordErr;?></div>
                    </div>

                    <div class="mb-3">
                        <label for="repassword">Şifre Tekrar</label>
                        <input type="password" name="repassword" class="form-control">
                        <div class="text-danger"><?php echo $repasswordErr;?></div>
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
                        <div class="text-danger"><?php echo $cityErr;?></div>
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
                        <div class="text-danger"><?php echo $hobilerErr;?></div>
                    </div>
                    <button type="submit" class="btn btn-primary">Kayıt Ol</button>
                </form>
            </div>
        </div>  
</div>

<?php include "partials/_footer.php" ?>