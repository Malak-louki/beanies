<?php
$pageTitle = "Bienvenue !";

if (!empty($_POST['size'])) {
    $beanies = array_filter($beanies, function (Beanie $beanie): bool {
        return in_array($_POST['size'], $beanie->getSizes());
    });
}
if (!empty($_POST['materials'])){
    $beanies = array_filter($beanies, function (Beanie $beanie) :bool {
        return in_array($_POST['materials'], $beanie->getMaterials());
    });
}
if (!empty($_POST['minPrice'])) {
    $beanies = array_filter($beanies, function (Beanie $beanie) :bool{
        return $_POST['minPrice'] <= $beanie->getPrice();
    });
}
if (!empty($_POST['maxPrice'])) {
    $beanies = array_filter($beanies, function (Beanie $beanie) :bool{
        return $_POST['maxPrice'] >= $beanie->getPrice();
    });
}

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
    <form action="" method="post" class="container">
        <div class="">
            <label for="size">size</label>
            <select name="size" id="sizes">
                <option value=""></option>
                <?php
                foreach (Beanie::AVAILABLE_SIZES as $id => $size) { ?>
                    <option value="<?= $size ?>" <?php if (isset($_POST['size']) && $_POST['size'] == $size) {
                        echo 'selected';
                    } ?>> <?= $size ?></option>
                <?php }
                ?>
            </select>

            <label for="materials">materials</label>
            <select name="materials" id="materials">
                <option value=""></option>
                <?php
                foreach (Beanie::AVAILABLE_MATERIALS as $id => $materials) { ?>
                    <option value="<?= $materials ?>" <?php if (isset($_POST['materials']) && $_POST['materials'] == $materials) {
                        echo "selected";
                    } ?>> <?= $materials ?></option>
                <?php }
                ?>

            </select>
        </div>
        <div class="">
            <label for="minPrice">Prix min :</label>
            <input type="number" name="minPrice" id="minPrice" value="<?php if (isset($_POST['minPrice'])) { echo $_POST['minPrice'];} ?>">
            <label for="maxPrice">Prix max :</label>
            <input type="number" name="maxPrice" id="maxPrice" value="<?php if (isset($_POST['maxPrice'])) { echo $_POST['maxPrice'];} ?>">
            <button type="submit" class="btn btn-primary">Filter</button>
        </div>
    </form>
    <?php

    foreach ($beanies as $beanie) {
        afficherTableau($beanie);
    }
    ;
    ?>
</table>