<?php include_once "paginas/lang/lang.php" ?>
<header>
    <!-- Controles -->
    <!-- slide -->
    <div id="carousel" class="carousel slide" data-bs-interval="false">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <br><br><br><br>
                <div class="txtBox1">
                    <h1 id="carTxt1"><?php echo $lang["h_1"] ?></h1>
                    <h1 id="carTxt1"><?php echo $lang["h_2"] ?></h1>
                    <h1 id="carTxt1"><?php echo $lang["h_3"] ?></h1>
                </div>
                <div class="txtBox2">
                    <h1 id="carTxt2"><?php echo $lang["h_4"] ?></h1>
                    <h1 id="carTxt2"><?php echo $lang["h_5"] ?></h1>
                </div>

                <a id="carBtn" target="blank" href="https://trade.bullgain.com/pt/b/login/signup"><?php echo $lang["h_6"] ?></a>
            </div>

            <div class="carousel-item">
                <br><br><br><br>
                <div class="txtBox1">
                    <h1 id="carTxt1"><?php echo $lang["h_7"] ?></h1>
                    <h1 id="carTxt1"><?php echo $lang["h_8"] ?></h1>
                </div>
                <div class="txtBox2">
                    <h1 id="carTxt2"><?php echo $lang["h_9"] ?></h1>
                    <h1 id="carTxt2"><?php echo $lang["h_10"] ?></h1>
                    <h1 id="carTxt2"><?php echo $lang["h_11"] ?></h1>
                    <h1 id="carTxt2"><?php echo $lang["h_12"] ?></h1>
                </div>

                <a id="carBtn" target="blank" href="https://trade.bullgain.com/pt/b/login/signup"><?php echo $lang["h_13"] ?></a>
            </div>

            <button id="btnHeader" class="carousel-control-next-ps" onclick="switchElement()" type="button" data-bs-target="#carousel" data-bs-slide="next">
                <img id="imgBtnHeader" src="assets/img/arrowLeft.png" alt="">
            </button>
        </div>
    </div>

</header>