<?php 

    require "libs/variables.php";

    require "libs/functions.php";

    
?>

<?php include "partials/_header.php" ?>
<?php include "partials/_navbar.php" ?>
    
<div class="container my-3">
        
        <div class="row">
            <div class="col-3">
                <?php include "partials/_menu.php" ?>
            </div>
            <div class="col-9">
                <?php include "partials/_title.php" ?>
                <?php include "partials/_kurs-listesi.php" ?>      
                </div>
            </div>
        </div>  
</div>

<?php include "partials/_footer.php" ?>