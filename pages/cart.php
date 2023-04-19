<?php
if (!isset($_SESSION['cart'])) {
    $_SESSION['cart'] = [];
}

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $cart = $_SESSION['cart'];
    $mode = 'plus';
    if (isset($_GET['mode'])) {
        $mode = $_GET['mode'];
    }
    switch ($mode) {
        case 'plus':
            $cart[$id]++;
            break;
        case 'min':
            $cart[$id]--;
            break;
        case 'delete':
            $cart[$id] = 0;
            break;
    }

    if ($cart[$id] <= 0) {
        $cart[$id] = 0;

    }

    if (!isset($cart[$id])) {
        $cart[$id] = 0;
    }

    if ($cart[$id] <= 0) {
        unset($cart[$id]);
    }



    $_SESSION['cart'] = $cart;
    header('Location: ?page=cart');
} elseif (isset($_GET['mode']) && $_GET['mode'] == 'empty') {
    $_SESSION['cart'] = [];
}
var_dump($_SESSION['cart']);


?>
<h1>My cart</h1>

<table class="table">
    <thead>
        <tr>
            <th scope="col">id</th>
            <th scope="col">name</th>
            <th scope="col">price</th>
            <th scope="col">quantity</th>
            <th scope="col">total</th>
        </tr>
    </thead>


    <?php
    $total = 0.0;
    foreach ($_SESSION['cart'] as $id => $quantity) {
        $beanie = $beanies[$id];
        $price = $beanie['price'] * $quantity;
        $total += $price
            ?>
        <tbody>
            <tr>
                <td scope="row">
                    <?= $id ?>
                </td>
                <td>
                    <?= $beanie['name'] ?>
                </td>
                <td>
                    <?= formatPrice($beanie['price']) ?>
                </td>
                <td> <a href="?page=cart&id=<?= $id; ?>">+</a>
                    <?= $quantity ?>
                    <a href="?page=cart&id=<?= $id; ?>&mode=min">-</a>
                </td>
                <td>
                    <?= formatPrice($price) ?>€
                    <a href="?page=cart&id=<?= $id; ?>&mode=delete">delete</a>

                </td>
            </tr>
        </tbody>
    <?php }
    ?>
    <tr>
        <td colspan="4" align="right">
            your total is:
        </td>
        <td>
            <?= formatPrice($total) ?>€
            <a class="btn btn-danger" href="?page=cart&mode=empty">empty the cart</a>
        </td>
    </tr>
</table>