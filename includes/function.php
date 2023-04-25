<?php
function formatPrice(float $price): string
{
    return number_format($price, 2, ',', ' ');
}
function priceHT(float $priceTTC): float
{
    return $priceTTC / 1.2;
}

function afficherTableau($beanie)
{
    ($beanie->getPrice() <= 12) ? $color = "green" : $color = "blue";
    ?>
    <tr>
        <td>
            <?php echo $beanie->getId(); ?>
        </td>
        <td>
            <?php echo $beanie->getName(); ?>
        </td>
        <td>
            <?php echo number_format(priceHT($beanie->getPrice()), 2, ',', ' ') . '€'; ?>
        </td>
        <td class=<?php echo $color ?>><?php echo number_format($beanie->getPrice(), 2, ',', ' ') . '€'; ?></td>
        <td>
            <?php echo $beanie->getDescription(); ?>
        </td>
        <td><a href="?page=cart&id=<?php echo $beanie->getId(); ?>" class="btn btn-primary">Add</a></td>

    </tr>
    <?php

}
;
?>
<?php function displayCardsBonnet(Beanie $beanie): void
{ ?>
    <div class="card" style="width: 18rem;">
        <img src="<?php echo $beanie->getImage(); ?>" class="card-img-top" alt="...">
        <div class="card-body">
            <h5 class="card-title">
                <?php echo $beanie->getName(); ?>
            </h5>
            <p class="card-text">
                <?php echo $beanie->getDescription(); ?>
            </p>
            <p>
                <?php echo $beanie->getPrice(); ?>
            </p>
            <a href="?page=cart&id=<?= $beanie->getId(); ?>" class="btn btn-primary">buy</a>
        </div>
    </div>
<?php }

function findById(array $beanies, int $id): ?Beanie
{
    foreach ($beanies as $beanie) {
        if ($beanie->getId() == $id) {
            return $beanie;
        }
    }
    return null;
}
?>