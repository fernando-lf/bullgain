<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bullgain Exchange</title>

    <link rel="stylesheet" href="../../assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="../../assets/icons/bullgainIconBLK.png">
    <link rel="stylesheet" href="../../assets/css/hamburguer.css">
    <link rel="stylesheet" href="../../assets/css/bullgain-style.css">
    <!-- <link rel="stylesheet" href="assets/css/bullgain-menu.css"> -->
</head>

<body>
    <style>
        body {
            background-image: none;
        }
    </style>

    <!-- menu desktop -->

    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <img id="logo" src="../../assets/img/logoBullgain.png">
            <ul class="navbar-nav me-auto mb-2 ml-5 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active " aria-current="page" href="../../?p=home">INÍCIO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../?p=referral">INDICAÇÕES</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        GRÁFICO
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">BTC</a></li>
                        <li><a class="dropdown-item" href="#">ETH</a></li>
                        <li><a class="dropdown-item" href="#">DOGE</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../?p=fees">TAXAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../?p=otc">OTC</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../?p=education">EDUCAÇÃO</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="../../?p=help">AJUDA</a>
                </li>
                <li class="nav-item">
                    <div class="search-bar-wrapper">
                        <a href="#" class="search-bar-text">Buscar</a>
                        <a href="#" class="search-bar-icon"></a>
                        <form method="GET" action="../search" class="search-bar-inner" action="">
                            <span class="search-bar-inner-icon"></span>
                            <input type="text" class="search-bar-input" name="s" placeholder="Digite aqui o que busca">
                            <a href="#" class="search-bar-close"><img src="assets/img/close.png" alt=""></a>
                            <button type="submit" class="search-bar-button">Buscar</button>
                        </form>
                    </div>
                </li>
                <li id="btnAcc" class="nav-item">
                    <button class="btn btn-outline-warning">Abra sua conta</button>
                </li>
            </ul>
        </div>
    </nav>



    <!-- menu mobile -->
    <nav role="navigation">
        <div id="menuToggle">
            <input type="checkbox" />
            <span></span>
            <span></span>
            <span></span>

            <ul id="menuT">
                <a href="?p=home">
                    <li>INICIO</li>
                </a>
                <a href="?p=referral">
                    <li>INDICAÇÕES</li>
                </a>
                <a href="#">
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            GRÁFICO
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item" href="#">BTC</a></li>
                            <li><a class="dropdown-item" href="#">ETH</a></li>
                            <li><a class="dropdown-item" href="#">DOGE</a></li>
                        </ul>
                    </li>
                </a>
                <a href="?p=fees">
                    <li>TAXAS</li>
                </a>
                <a href="?p=otc">
                    <li>OTC</li>
                </a>
                <a href="?p=education">
                    <li>EDUCAÇÃO</li>
                </a>
                <a href="?p=help">
                    <li>AJUDA</li>
                </a>
            </ul>
        </div>
    </nav>