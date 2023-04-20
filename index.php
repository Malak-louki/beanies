<?php



$pages = [
    'list' => 'all our beanies',
    'login' => 'login page',
    'home' => '"welcome !',
    'logout' => '',
    'cart' => 'Your cart',
    'contact'=>'contact us'

];

$page = 'home';

if (isset($_GET["page"]) && array($_GET['page'], $pages)) {
    $page = $_GET["page"];
}

$pageTitle = $pages[$page];

// switch($page) {
//     case 'list':
//     $pageTitle ="all our beanies";
//     break;
//     case 'login':
//     $pageTitle = "login page";
//     break;
//     default:
//     $pageTitle = "welcome !";
//     break;
// }
ob_start();

include_once 'includes/header.php';

include_once 'pages/' . $page . '.php';

include_once 'includes/footer.php';

ob_end_flush();
?>

