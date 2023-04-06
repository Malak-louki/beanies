<?php
include "variables.php";
include "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Beanies PHP</title>
</head>
<body>

<table>
    <tr>
        <th>key</th>
        <th>Product name</th>
        <th>HT price</th>
        <th>Price</th>
        <th>description</th>
    </tr>
    <?php 

        foreach($beanies as $key => $beanie){
            afficherTableau($beanie,$key);
        };
    ?>
    </table>
</body>
</html>
