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
<?php function displayCardsBonnet(array $beanie){?>
<div class="card" style="width: 18rem;">
<img src="<?php echo $beanie['image'];?>" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title"> <?php echo $beanie['name'];?></h5>
    <p class="card-text"> <?php echo $beanie['description'];?></p>
    <p><?php echo $beanie['price'];?></p>
    <a href="#" class="btn btn-primary"></a>
</div>
</div>
<?php } ?>