
    <?php 
    
    $description =  "Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis a leo diam. Quisque lorem orci, accumsan quis dolor sed, gravida.";
    $beanies = [
        [
        "name"        => "bonnet en laine",
        "description" => $description,
        "price"       => 10.0,
    ],
        [
        "name"        => "Bonnet en laine bio",
        "description" => $description,
        "price"       => 14.0,
        ],
        [
        "name" => "Bonnet en laine et cachemire",
        "description" => $description,
        "price"       => 20.0,
    ],
        [
        "name"        => "Bonnet arc-en-ciel",
        "description" => $description,
        "price"       => 12.0,
    ]];
    function priceHT(float $priceTTC): float {
        return $priceTTC / 1.2;
    };
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
    
    <?php foreach($beanies as $key => $beanie){?>
    <?php
    
    if ($beanie['price']<=12) {
        $color = "green";
    } else {
        $color = "blue";
    };
    
    ?>
    <?php  
    
    ?>
        
        <tr>
            <td><?php echo $key; ?></td>
            <td><?php echo $beanie['name'];?></td>
            <td><?php echo number_format(priceHT($beanie['price']),2,',',' '). '€';?></td>
            <td class=<?php echo $color ?>><?php echo number_format($beanie['price'],2,',',' ').'€';?></td>
            <td><?php echo $beanie['description'];?></td>
    </tr>
        <?php }; ?>
    </table>
</body>
</html>
