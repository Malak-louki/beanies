<?php
$pageTitle = "Bienvenue !";

?>

<table>
    <tr>
        <th>key</th>
        <th>Product name</th>
        <th>HT price</th>
        <th>Price</th>
        <th>description</th>
        <th>buy</th>
    </tr>
    <?php

    foreach ($beanies as $key => $beanie) {
        afficherTableau($beanie, $key);
    }
    ;
    ?>
</table>