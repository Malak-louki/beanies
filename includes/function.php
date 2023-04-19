<?php
function formatPrice(float $price): string{
    return number_format($price, 2, ',', ' ');
}
    function priceHT(float $priceTTC): float {
        return $priceTTC / 1.2;
    }

    function afficherTableau($beanie,$id){
        ($beanie['price']<= 12)? $color = "green" : $color = "blue";
        ?><tr>
        <td><?php echo $id; ?></td>
        <td><?php echo $beanie['name'];?></td>
        <td><?php echo number_format(priceHT($beanie['price']),2,',',' '). '€';?></td>
        <td class=<?php echo $color ?>><?php echo number_format($beanie['price'],2,',',' ').'€';?></td>
        <td><?php echo $beanie['description'];?></td>
        <td><a href="?page=cart&id=<?php echo $id; ?>" class="btn btn-primary">Add</a></td>

</tr>
<?php

};
?>
<?php function displayCardsBonnet(int $id, array $beanie): void
{?>
<div class="card" style="width: 18rem;">
<img src="<?php echo $beanie['image'];?>" class="card-img-top" alt="...">
<div class="card-body">
<h5 class="card-title"> <?php echo $beanie['name'];?></h5>
    <p class="card-text"> <?php echo $beanie['description'];?></p>
    <p><?php echo $beanie['price'];?></p>
    <a href="?page=cart&id=<?= $id; ?>" class="btn btn-primary">buy</a>
</div>
</div>
<?php } ?>