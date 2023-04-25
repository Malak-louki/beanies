<?php
$pageTitle = "home";
?>
<section class='d-flex gap-5 align-items-center justify-content-center m-5'>
    <?php
    $i = 0;
    foreach ($beanies as $i => $beanie) {
        if ($i == 3) {
            break;
        }
        displayCardsBonnet($beanie);
    }
    ?>
</section>