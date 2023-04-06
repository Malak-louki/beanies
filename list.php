
<?php 
$pageTitle = "Bienvenue !";
include 'includes/header.php';
?>

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
    <?php 
include 'includes/footer.php';
?>