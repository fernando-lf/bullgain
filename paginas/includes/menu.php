<?php include_once "paginas/lang/lang.php" ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bullgain Exchange</title>

    <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <link rel="shortcut icon" href="assets/icons/bullgainIconBLK.png">
    <link rel="stylesheet" href="assets/css/hamburguer.css">
    <link rel="stylesheet" href="assets/css/bullgain-style.css">
    <!-- <link rel="stylesheet" href="assets/css/bullgain-menu.css"> -->


</head>

<body id="body">

    <!-- menu desktop -->

    <nav class="navbar navbar-expand-lg">
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <img id="logo" src="assets/img/logoBullgain.png">
            <ul class="navbar-nav me-auto mb-2 ml-5 mb-lg-0">
                <li class="nav-item">
                    <a class="nav-link active" <?php echo (($_GET['p'] == 'home') ? 'id=menuSelected' : ''); ?> aria-current="page" href="?p=home"><?php echo $lang["m_1"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" <?php echo (($_GET['p'] == 'referral') ? 'id=menuSelected' : ''); ?> aria-current="page" href="?p=referral"><?php echo $lang["m_2"] ?></a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        <?php echo $lang["m_3"] ?>
                    </a>
                    <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="#">BTC/BRL</a></li>
                        <li><a class="dropdown-item" href="#">ETH/BRL</a></li>
                        <li><a id="lastItem" class="dropdown-item" href="#">DOGE/BRL</a></li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" <?php echo (($_GET['p'] == 'fees') ? 'id=menuSelected' : ''); ?> aria-current="page" href="?p=fees"><?php echo $lang["m_4"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" <?php echo (($_GET['p'] == 'otc') ? 'id=menuSelected' : ''); ?> aria-current="page" href="?p=otc"><?php echo $lang["m_5"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" <?php echo (($_GET['p'] == 'education' || $_GET['p'] == 'courses' || $_GET['p'] == 'tutorial') ? 'id=menuSelected' : ''); ?> aria-current="page" href="?p=education"><?php echo $lang["m_6"] ?></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" <?php echo (($_GET['p'] == 'help') ? 'id=menuSelected' : ''); ?> aria-current="page" href="?p=help"><?php echo $lang["m_7"] ?></a>
                </li>
                <li class="nav-item">
                    <div class="search-bar-wrapper">
                        <a href="/paginas/articles/" class="search-bar-text"><?php echo $lang["m_8"] ?></a>
                        <a href="#" class="search-bar-icon"></a>
                        <form method="GET" action="paginas/search" class="search-bar-inner">
                            <span class="search-bar-inner-icon"></span>
                            <input type="text" name="s" placeholder="Digite aqui o que busca">
                            <a href="#" class="search-bar-close"><img src="assets/img/close.png" alt=""></a>
                            <button type="submit" class="search-bar-button"><?php echo $lang["m_8"] ?></button>
                        </form>
                    </div>
                </li>
                <li id="btnAcc" class="nav-item">
                    <a id="btnMenu" target="blank" href="https://trade.bullgain.com/pt/b/login/signup"><?php echo $lang["m_9"] ?></a>
                </li>
            </ul>
        </div>
        <a href="?lang=pt" class="langBR"><img src="assets/icons/brazil-icon.png" alt=""></a>
        <a href="?lang=en" class="langEN"><img src="assets/icons/usa-icon.png" alt=""></a>
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
                    <li><?php echo $lang["m_1"] ?></li>
                </a>
                <a href="?p=referral">
                    <li><?php echo $lang["m_2"] ?></li>
                </a>


                <button class="dropdown-btn"><?php echo $lang["m_3"] ?>
                    <i id="caret"></i>
                </button>
                <div class="dropdown-container">
                    <a href="#">BTC/BRL</a>
                    <a href="#">ETH/BRL</a>
                    <a href="#">DOGE/BRL</a>
                </div>


                <a href="?p=fees">
                    <li><?php echo $lang["m_4"] ?></li>
                </a>
                <a href="?p=otc">
                    <li><?php echo $lang["m_5"] ?></li>
                </a>
                <a href="?p=education">
                    <li><?php echo $lang["m_6"] ?></li>
                </a>
                <a href="?p=help">
                    <li><?php echo $lang["m_7"] ?></li>
                </a>
            </ul>
        </div>

        <img id="logoMob" src="assets/img/logoBullgain.png">
        <div id="searchMob" class="search-bar-wrapper">
            <a href="/paginas/articles/" class="search-bar-text"><?php echo $lang["m_8"] ?></a>
            <a href="#" class="search-bar-icon"></a>
            <form method="GET" action="paginas/search" class="search-bar-inner">
                <span class="search-bar-inner-icon"></span>
                <input type="text" class="search-bar-input" name="s" placeholder="Digite aqui o que busca">
                <a href="#" class="search-bar-close"><img src="assets/img/close.png" alt=""></a>
                <button onclick="submitValue()" class="search-bar-button"><?php echo $lang["m_8"] ?></button>
            </form>
        </div>
    </nav>

    <script>
        /* Loop through all dropdown buttons to toggle between hiding and showing its dropdown content - This allows the user to have multiple dropdowns without any conflict */
        var dropdown = document.getElementsByClassName("dropdown-btn");
        var caret = document.getElementById("caret");
        var i;

        for (i = 0; i < dropdown.length; i++) {
            dropdown[i].addEventListener("click", function() {
                this.classList.toggle("active");
                var dropdownContent = this.nextElementSibling;

                if (dropdownContent.style.display === "block") {
                    dropdownContent.style.display = "none";
                    caret.style.backgroundImage = "url(assets/icons/caretDown.png)";
                } else {
                    dropdownContent.style.display = "block";
                    caret.style.backgroundImage = "url(assets/icons/caretUp.png)";
                }
            });
        }
    </script>