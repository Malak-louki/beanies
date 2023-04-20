<?php
$pageTitle = "home";
?>
<section class='d-flex gap-5 align-items-center justify-content-center m-5'>
    <?php
    $i = 0;
    foreach ($beanies as $id => $valeur) {
        if ($i == 3) {
            break;
        }
        displayCardsBonnet($id, $valeur);
    }
    ?>
</section>
<a href="?page=cart&id=<?= $id; ?>" class="btn btn-warning">my cart</a>