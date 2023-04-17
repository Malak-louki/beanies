<?php
    $pageTitle = "home";
?>
<section class='d-flex gap-5 align-items-center justify-content-center m-5'>
    <?php
    $i =0;
    foreach ($beanies as $i => $valeur){
        if ($i==3) {
            break;
        } 
        displayCardsBonnet($valeur); 
    }
    ?>
    </section>
    <a href="list.php" class="btn btn-warning">Liste Complete</a>
