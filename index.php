<?php
$pg = "landing";

if (isset($_GET["p"])) {
    $pg = $_GET["p"];
}

switch ($pg) {

    case "home":
        include_once "paginas/includes/menu.php";
        include_once "paginas/includes/header.php";
        include_once "paginas/landing.php";
        include_once "paginas/includes/footer.php";
        break;

    case "referral":
        include_once "paginas/includes/menu.php";
        include_once "paginas/referral.php";
        include_once "paginas/includes/footer.php";
        break;

    case "otc":
        include_once "paginas/includes/menu.php";
        include_once "paginas/otc.php";
        include_once "paginas/includes/footer.php";
        break;

    case "fees":
        include_once "paginas/includes/menu.php";
        include_once "paginas/fees.php";
        include_once "paginas/includes/footer.php";
        break;

    case "help":
        include_once "paginas/includes/menu.php";
        include_once "paginas/help.php";
        include_once "paginas/includes/footer.php";
        break;

    case "education":
        include_once "paginas/includes/menu.php";
        include_once "paginas/education.php";
        include_once "paginas/includes/footer.php";
        break;

    case "courses":
        include_once "paginas/includes/menu.php";
        include_once "paginas/courses.php";
        include_once "paginas/includes/footer.php";
        break;

    case "tutorials":
        include_once "paginas/includes/menu.php";
        include_once "paginas/tutorials.php";
        include_once "paginas/includes/footer.php";
        break;

    default:

        if (isset($_GET["s"])) {
            $se = $_GET["s"];
            include_once "paginas/articles/index.php";
        } else {
            $_GET["p"] = 'home';
            include_once "paginas/includes/menu.php";
            include_once "paginas/includes/header.php";
            include_once "paginas/landing.php";
            include_once "paginas/includes/footer.php";
        }
        break;
}
