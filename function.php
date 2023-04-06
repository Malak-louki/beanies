<?php

    function priceHT(float $priceTTC): float {
        return $priceTTC / 1.2;
    };

    function afficherTableau($beanie,$key){
        ($beanie['price']<= 12)? $color = "green" : $color = "blue";
        ?><tr>
        <td><?php echo $key; ?></td>
        <td><?php echo $beanie['name'];?></td>
        <td><?php echo number_format(priceHT($beanie['price']),2,',',' '). '€';?></td>
        <td class=<?php echo $color ?>><?php echo number_format($beanie['price'],2,',',' ').'€';?></td>
        <td><?php echo $beanie['description'];?></td>
</tr>
<?php

};
?>