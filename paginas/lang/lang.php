<?php
session_start();

// define which language will be used
if (!isset($_SESSION['lang'])) {
    // define a initial language as portuguese
    $_SESSION['lang'] = 'pt';
}

// define a new language from a get
if(isset($_GET['lang'])){
$_SESSION['lang'] = $_GET['lang'];
}
include_once 'paginas/lang/' . $_SESSION['lang'] . '.php';