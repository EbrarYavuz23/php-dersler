<?php 

    if(!empty($_GET["q"])) {
        $keyword = $_GET["q"];

        $kurslar = array_filter($kurslar, function($kurs) use ($keyword) {
            return stristr($kurs["baslik"], $keyword) or (stristr($kurs["altBaslik"], $keyword));
        });
    }

?>




<nav class="navbar navbar-expand-lg bg-primary navbar-dark">
    <div class="container">
        <a href="/" class="navbar-brand">Courseapp</a>
        
        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="" class="nav-link active">Anasayfa</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Anasayfa</a>
            </li>
        </ul>

        <ul class="navbar-nav me-auto">
            <li class="nav-item">
                <a href="login.php" class="nav-link">Login</a>
            </li>
            <li class="nav-item">
                <a href="register.php" class="nav-link">Register</a>
            </li>
        </ul>

        <form action="index.php" class="d-flex" method="GET"> 
            <input type="text" name="q"class="form-control me-2" placeholder="Keyworld">
            <button type="submit" class="btn btn-warning">Ara</button>
        </form>
    </div>
</nav>