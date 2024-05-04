<?php


include_once "menuArticle.php";

$se = "s";

if (isset($_GET["s"])) {
    $se = $_GET["s"];
}

switch ($se) {
    case "result":
        break;

    case "article01":
        include_once "article01.php";
        break;

    case "article02":
        include_once "article02.php";
        break;

    case "article03":
        include_once "article03.php";
        break;

    default:
        include_once "error.php";
        break;
}
include_once "footerArticle.php";
