<?php
include_once "paginas/lang/lang.php";

$url = file_get_contents("https://trade.bullgain.com/api/v3/public/getticker?market=BTC_BRL");
$last = explode('"Last":', $url);
$valBTC = explode(',', $last[1]);

$url = file_get_contents("https://trade.bullgain.com/api/v3/public/getticker?market=ETH_BRL");
$last = explode('"Last":', $url);
$valETH = explode(',', $last[1]);

$url = file_get_contents("https://trade.bullgain.com/api/v3/public/getticker?market=LTC_BRL");
$last = explode('"Last":', $url);
$valLITE = explode(',', $last[1]);

$url = file_get_contents("https://trade.bullgain.com/api/v3/public/getticker?market=DOGE_BRL");
$last = explode('"Last":', $url);
$valDOGE = explode(',', $last[1]);

$url = file_get_contents("https://trade.bullgain.com/api/v3/public/getticker?market=USDT_BRL");
$last = explode('"Last":', $url);
$valUSDT = explode(',', $last[1]);

$url = file_get_contents("https://trade.bullgain.com/api/v3/public/getticker?market=LQX_BRL");
$last = explode('"Last":', $url);
$valLQX = explode(',', $last[1]);



?>

<div id="grad1Landing">

    <div class="tickerAnim">
        <h1>
            <div class="bloco btc">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valBTC[0];
                                        } else {
                                            echo '$ ' . bcdiv($valBTC[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco eth">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valETH[0];
                                        } else {
                                            echo '$ ' . bcdiv($valETH[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco lite">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valLITE[0];
                                        } else {
                                            echo '$ ' . bcdiv($valLITE[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco doge">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valDOGE[0];
                                        } else {
                                            echo '$ ' . bcdiv($valDOGE[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco tether">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valUSDT[0];
                                        } else {
                                            echo '$ ' . bcdiv($valUSDT[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco lqx">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valLQX[0];
                                        } else {
                                            echo '$ ' .  bcdiv($valLQX[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco btc">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valBTC[0];
                                        } else {
                                            echo '$ ' . bcdiv($valBTC[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco eth">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valETH[0];
                                        } else {
                                            echo '$ ' . bcdiv($valETH[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco lite">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valLITE[0];
                                        } else {
                                            echo '$ ' . bcdiv($valLITE[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco doge">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valDOGE[0];
                                        } else {
                                            echo '$ ' . bcdiv($valDOGE[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco tether">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valUSDT[0];
                                        } else {
                                            echo '$ ' . bcdiv($valUSDT[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco lqx">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valLQX[0];
                                        } else {
                                            echo '$ ' .  bcdiv($valLQX[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco btc">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valBTC[0];
                                        } else {
                                            echo '$ ' . bcdiv($valBTC[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco eth">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valETH[0];
                                        } else {
                                            echo '$ ' . bcdiv($valETH[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco lite">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valLITE[0];
                                        } else {
                                            echo '$ ' . bcdiv($valLITE[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco doge">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valDOGE[0];
                                        } else {
                                            echo '$ ' . bcdiv($valDOGE[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco tether">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valUSDT[0];
                                        } else {
                                            echo '$ ' . bcdiv($valUSDT[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>
            <div class="bloco lqx">
                <h5 id="genTxtSb4-val"><?php if ($_SESSION["lang"] == 'pt') {
                                            echo 'R$ ' . $valLQX[0];
                                        } else {
                                            echo '$ ' .  bcdiv($valLQX[0] / $valUSDT[0], 1, 3);
                                        } ?></h5>
            </div>






        </h1>
    </div>
</div>

<div id="grad2Landing">

    <!-- fazer simulação -->
    <div class="text-center">
        <b><br><br>
            <div class="space">
                <br><br>
            </div>
            <h4 id="genTxtSb-tl"><?php echo $lang["l_s_1"] ?></h4>
            <br>
            <h3 id="genTxtSb"><?php echo $lang["l_s_2"] ?>
                <span>
                    <select id="txt1" name="select" onchange="simulate(<?php echo $valBTC[0] ?>)">
                        <option value="2010">2010</option>
                        <option value="2011">2011</option>
                        <option value="2012">2012</option>
                        <option value="2013">2013</option>
                        <option value="2014">2014</option>
                        <option value="2015">2015</option>
                        <option value="2016">2016</option>
                        <option value="2017">2017</option>
                        <option value="2018">2018</option>
                    </select>
                </span>
                <?php echo $lang["l_s_3"] ?>
                <span>
                    <input id="txt2" type="text" minlength="1" maxlength="5" value="1" onkeyup="simulate(<?php echo $valBTC[0] ?>)" />
                </span>
            </h3>
            <h3 id="genTxtSb"><?php echo $lang["l_s_4"] ?></h3>
            <h3 id="genTxtSb"><?php echo $lang["l_s_5"] ?>
                <span>
                    <input id="result" type="text" value="517.578,13" />
                </span>
                <br><br><br><br>
            </h3>
    </div>
</div>

<!-- abrir conta, adicionar saldo, comprar ativo  -->
<div class="container-fluid">

    <div class="text-center landing_desk1">
        <div class="row" id="teste">
            <div class="col-1"></div>
            <div class="col">

                <input type="checkbox" id="zoomCheck1">
                <label for="zoomCheck1">
                    <div class="rectangle">
                        <h1>01</h1>
                        <h5><?php echo $lang["l_o_1"] ?></h5>
                    </div>
                </label>

            </div>
            <div class="col-1 align-self-center">
                <img class="img-fluid" src="assets/img/arrRight.png" alt="">
            </div>
            <div class="col">

                <input type="checkbox" id="zoomCheck2">
                <label for="zoomCheck2">
                    <div class="rectangle">
                        <h1>02</h1>
                        <h5><?php echo $lang["l_o_2"] ?></h5>
                    </div>
                </label>


            </div>
            <div class="col-1 align-self-center">
                <img class="img-fluid" src="assets/img/arrRight.png" alt="">
            </div>
            <div class="col">

                <input type="checkbox" id="zoomCheck3">
                <label for="zoomCheck3">
                    <div class="rectangle">
                        <h1>03</h1>
                        <h5><?php echo $lang["l_o_3"] ?></h5>
                    </div>
                </label>


            </div>
            <div class="col-1"></div>
        </div>
    </div>


    <div class="text-center landing_mob1">
        <div class="col">
            <div class=" row text-center">
                <div class="col">

                    <input type="checkbox" id="zoomCheck11">
                    <label for="zoomCheck11">
                        <div class="rectangle">
                            <h1>01</h1>
                            <h5><?php echo $lang["l_o_1"] ?></h5>
                        </div>
                    </label>
                </div>
            </div>
            <div id="rowMob" class="row align-self-center"><img id="arrowDown" class="img-fluid" src="assets/img/arrRight.png" alt=""></div>
            <div id="rowMob" class="row text-center">
                <div class="col">

                    <input type="checkbox" id="zoomCheck21">
                    <label for="zoomCheck21">
                        <div class="rectangle">
                            <h1>02</h1>
                            <h5><?php echo $lang["l_o_2"] ?></h5>
                        </div>
                    </label>
                </div>
            </div>
            <div id="rowMob" class="row align-self-center"><img id="arrowDown" class="img-fluid" src="assets/img/arrRight.png" alt=""></div>
            <div class="row text-center">
                <div class="col">

                    <input type="checkbox" id="zoomCheck31">
                    <label for="zoomCheck31">
                        <div class="rectangle">
                            <h1>03</h1>
                            <h5><?php echo $lang["l_o_3"] ?></h5>
                        </div>
                    </label>
                </div>
            </div>
        </div>
    </div>
    <br><br><br>
    <div class="space">
        <br><br><br><br>
    </div>



    <!-- conheça a bullgain -->

    <div class="text-center">

        <h1 id="genTxtReg-bgn"><?php echo $lang["l_c_1"] ?></h1>
        <div class="space">
            <br><br>
        </div>
        <iframe id="ytVideo" width="1024" height="576" src="https://www.youtube-nocookie.com/embed/THpWyUY-1fc" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
    </div>

    <div class="space">
        <br><br><br>
    </div>
    <br><br><br>


    <!-- vantagens -->
    <div class="text-center">
        <h1 id="genTxtReg-bgn"><?php echo $lang["l_v_0"] ?></h1>
    </div>
    <br><br>
    <div class="space">
        <br><br>
    </div>
</div>
<div id="backg2">
    <div id="benefDesk" class="container-fluid">

        <div class="row">
            <div class="col"></div>
            <div class="col text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <img src="assets/img/checkTransfer.png">
                            <br><br>
                            <h4><?php echo $lang["l_v_1"] ?></h4>
                            <br>
                            <h6><?php echo $lang["l_v_2"] ?></h6>
                            <h6><?php echo $lang["l_v_3"] ?></h6>
                        </div>
                        <div class="flip-card-back">
                            <br><br>
                            <h3><?php echo $lang["l_v_4"] ?></h3>
                            <br>
                            <h6><?php echo $lang["l_v_5"] ?></h6>
                            <h6><?php echo $lang["l_v_6"] ?></h6>
                            <h6><?php echo $lang["l_v_7"] ?></h6>
                            <h6><?php echo $lang["l_v_8"] ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <img src="assets/img/deposits.png">
                            <br><br>
                            <h4><?php echo $lang["l_v_9"] ?></h4>
                            <br>
                            <h6><?php echo $lang["l_v_10"] ?></h6>
                        </div>
                        <div class="flip-card-back">
                            <br><br>
                            <h3><?php echo $lang["l_v_11"] ?></h3>
                            <br>
                            <h6><?php echo $lang["l_v_12"] ?></h6>
                            <h6><?php echo $lang["l_v_13"] ?></h6>
                            <h6><?php echo $lang["l_v_14"] ?></h6>
                            <h6><?php echo $lang["l_v_15"] ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col">
                <div class="flip-card ">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <img src="assets/img/ami.png">
                            <br><br>
                            <h4><?php echo $lang["l_v_16"] ?></h4>
                            <br>
                            <h6><?php echo $lang["l_v_17"] ?></h6>
                        </div>
                        <div class="flip-card-back">
                            <br><br>
                            <h3><?php echo $lang["l_v_18"] ?></h3>
                            <br>
                            <h6><?php echo $lang["l_v_19"] ?></h6>
                            <h6><?php echo $lang["l_v_20"] ?></h6>
                            <h6><?php echo $lang["l_v_21"] ?></h6>
                            <h6><?php echo $lang["l_v_22"] ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
        <br><br><br><br>

        <div class="row justify-content-center align-items-center">
            <div class="col"></div>
            <div class="col text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <img id="advImg" src="assets/img/flexFees.png">
                            <br><br>
                            <h4><?php echo $lang["l_v_23"] ?></h4>
                            <br>
                            <h6><?php echo $lang["l_v_24"] ?></h6>
                        </div>
                        <div class="flip-card-back">
                            <br><br>
                            <h3><?php echo $lang["l_v_25"] ?></h3>
                            <br>

                            <h6><?php echo $lang["l_v_26"] ?></h6>
                            <h6><?php echo $lang["l_v_27"] ?></h6>
                            <h6><?php echo $lang["l_v_28"] ?></h6>
                            <h6><?php echo $lang["l_v_29"] ?></h6>
                            <h6><?php echo $lang["l_v_30"] ?></h6>
                            <h6><?php echo $lang["l_v_31"] ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <img src="assets/img/call.png">
                            <br><br>
                            <h4><?php echo $lang["l_v_32"] ?></h4>
                            <br>
                            <h6><?php echo $lang["l_v_33"] ?></h6>
                        </div>
                        <div class="flip-card-back">
                            <br><br>
                            <h3><?php echo $lang["l_v_34"] ?></h3>
                            <br>
                            <h6><?php echo $lang["l_v_35"] ?></h6>
                            <h6><?php echo $lang["l_v_36"] ?></h6>
                            <h6><?php echo $lang["l_v_37"] ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-1"></div>
            <div class="col">
                <div class="flip-card ">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <img id="advImg" src="assets/img/advPlat.png">
                            <br><br>
                            <h4><?php echo $lang["l_v_38"] ?></h4>
                            <h4><?php echo $lang["l_v_39"] ?></h4>
                            <br>
                            <h6><?php echo $lang["l_v_40"] ?></h6>
                        </div>
                        <div class="flip-card-back">
                            <br><br>
                            <h3><?php echo $lang["l_v_41"] ?></h3>
                            <br>

                            <h6><?php echo $lang["l_v_42"] ?></h6>
                            <h6><?php echo $lang["l_v_43"] ?></h6>
                            <h6><?php echo $lang["l_v_44"] ?></h6>
                            <h6><?php echo $lang["l_v_45"] ?></h6>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col"></div>
        </div>
    </div>
    <!-- Mob -->
    <div id="benefMob" class="container-fluid">


        <div id="centerBlock" class="row">

            <div class="col text-center">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <img id="benefImg" src="assets/img/checkTransfer.png">
                            <br><br>
                            <h4 id="txtCardMob1"><?php echo $lang["l_v_1"] ?></h4>
                            <br>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_2"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_3"] ?></h6>
                        </div>
                        <div class="flip-card-back">

                            <h3 id="txtCardMob3"><?php echo $lang["l_v_4"] ?></h3>
                            <br>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_5"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_6"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_7"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_8"] ?></h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <img id="benefImg" src="assets/img/deposits.png">
                            <br><br>
                            <h4 id="txtCardMob1"><?php echo $lang["l_v_9"] ?></h4>
                            <br>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_10"] ?></h6>
                        </div>
                        <div class="flip-card-back">

                            <h3 id="txtCardMob3"><?php echo $lang["l_v_11"] ?></h3>
                            <br>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_12"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_13"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_14"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_15"] ?></h6>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <br><br>



        <div id="centerBlock" class="row">

            <div class="col">
                <div class="flip-card ">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <img id="benefImg" src="assets/img/ami.png">
                            <br><br>
                            <h4 id="txtCardMob1"><?php echo $lang["l_v_16"] ?></h4>
                            <br>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_17"] ?></h6>
                        </div>
                        <div class="flip-card-back">

                            <h3 id="txtCardMob3"><?php echo $lang["l_v_18"] ?></h3>
                            <br>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_19"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_20"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_21"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_22"] ?></h6>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col text-center">
                <div class="flip-card ">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <img id="advImg" src="assets/img/advPlat.png">
                            <br><br>
                            <h4 id="txtCardMob1"><?php echo $lang["l_v_38"] ?></h4>
                            <h4 id="txtCardMob1"><?php echo $lang["l_v_39"] ?></h4>
                            <br>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_40"] ?></h6>
                        </div>
                        <div class="flip-card-back">

                            <h3 id="txtCardMob3"><?php echo $lang["l_v_41"] ?></h3>
                            <br>

                            <h6 id="txtCardMob2"><?php echo $lang["l_v_42"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_43"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_44"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_45"] ?></h6>
                        </div>
                    </div>
                </div>

            </div>
        </div>

        <br><br>
        <div id="centerBlock" class="row">

            <div class="col">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <img id="advImg" src="assets/img/flexFees.png">
                            <br><br>
                            <h4 id="txtCardMob1"><?php echo $lang["l_v_23"] ?></h4>
                            <br>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_24"] ?></h6>
                        </div>
                        <div class="flip-card-back">

                            <h3 id="txtCardMob3"><?php echo $lang["l_v_25"] ?></h3>


                            <h6 id="txtCardMob2"><?php echo $lang["l_v_26"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_27"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_28"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_29"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_30"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_31"] ?></h6>
                        </div>
                    </div>
                </div>

            </div>

            <div class="col">
                <div class="flip-card">
                    <div class="flip-card-inner">
                        <div class="flip-card-front">
                            <br>
                            <img id="benefImg" src="assets/img/call.png">
                            <br><br>
                            <h4 id="txtCardMob1"><?php echo $lang["l_v_32"] ?></h4>
                            <br>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_33"] ?></h6>
                        </div>
                        <div class="flip-card-back">

                            <h3 id="txtCardMob3"><?php echo $lang["l_v_34"] ?></h3>
                            <br>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_35"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_36"] ?></h6>
                            <h6 id="txtCardMob2"><?php echo $lang["l_v_37"] ?></h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- --- -->

    </div>
    <div class="space">
        <br><br><br><br><br>
    </div>
    <br><br><br>

    <div class="text-center">
        <h1 id="genTxtReg-part"><?php echo $lang["l_p_1"] ?></h1>
    </div>
    <br><br>

    <div id="partnersDesk" class="container-fluid">

        <div class="row">
            <div class="col"></div>
            <div class="col align-self-center">
                <img src="assets/img/bleu.png" alt="">
            </div>
            <div class="col-1"></div>
            <div class="col align-self-center">
                <img src="assets/img/stonoex.png" alt="">
            </div>
            <div class="col-1"></div>
            <div class="col align-self-center">
                <img src="assets/img/exccripto.png" alt="">
            </div>
            <div class="col"></div>
        </div>
        <br><br><br>

        <div class="row">
            <div class="col"></div>
            <div class="col align-self-center">
                <img src="assets/img/comprarbit.png" alt="">
            </div>
            <div class="col-1"></div>
            <div class="col align-self-center">
                <img src="assets/img/recife.png" alt="">
            </div>
            <div class="col-1"></div>
            <div class="col align-self-center">
                <img src="assets/img/dash.png" alt="">
            </div>
            <div class="col"></div>
        </div>
        <br><br><br><br>

    </div>


    <div id="partnersMob" class="container-fluid">

        <div id="centerBlock" class="row">
            <div class="col align-self-center">
                <img id="partImg" src="assets/img/bleu.png" alt="">
            </div>
            <div class="col-1"></div>
            <div class="col align-self-center">
                <img id="partImg" src="assets/img/stonoex.png" alt="">
            </div>
        </div>
        <br><br><br>

        <div id="centerBlock" class="row">
            <div class="col align-self-center">
                <img id="partImg" src="assets/img/comprarbit.png" alt="">
            </div>
            <div class="col-1"></div>
            <div class="col align-self-center">
                <img id="partImg" src="assets/img/recife.png" alt="">
            </div>
        </div>

        <br><br><br>
        <div id="centerBlock" class="row">
            <div class="col align-self-center">
                <img id="partImg" src="assets/img/dash.png" alt="">
            </div>
            <div class="col-1"></div>
            <div class="col align-self-center">
                <img id="partImg" src="assets/img/exccripto.png" alt="">
            </div>
        </div>

    </div>

    <br><br><br><br><br><br><br>
</div>

<div class="container-fluid">


    <!-- Reviews -->

    <div class="container-fluid">


        <div class="text-center">
            <h1 id="genTxtReg-rev"><?php echo $lang["l_r_1"] ?></h1>
        </div>
        <br><br>
        <img id="revImg" src="assets/img/asp1.png" alt="">
        <img id="revImg" src="assets/img/asp1.png" alt="">
        <br><br>
        <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js"></script>
        <link rel="stylesheet" href="assets/css/owl.carousel.min.css">

        <div class="slider owl-carousel" id="reviewCards">
            <div class="card">
                <br>
                <h3 id="getTxtSb"><?php echo $lang["l_r_2"] ?></h3>
                <div class="content">
                    <h6><?php echo $lang["l_r_3"] ?></h6>
                    <h6><?php echo $lang["l_r_4"] ?></h6>
                    <h6><?php echo $lang["l_r_5"] ?></h6>
                    <h6><?php echo $lang["l_r_6"] ?></h6>
                    <br>
                    <div class="btn">
                        <button><?php echo $lang["l_r_7"] ?> -></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <br>
                <h3 id="getTxtSb"><?php echo $lang["l_r_8"] ?></h3>
                <div class="content">
                    <h6><?php echo $lang["l_r_9"] ?></h6>
                    <h6><?php echo $lang["l_r_10"] ?></h6>
                    <h6><?php echo $lang["l_r_11"] ?></h6>
                    <h6><?php echo $lang["l_r_12"] ?></h6>
                    <h6 id="marginCorrect"><?php echo $lang["l_r_13"] ?></h6>

                    <div class="btn">
                        <button><?php echo $lang["l_r_14"] ?> -></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <br>
                <h3 id="getTxtSb"><?php echo $lang["l_r_15"] ?></h3>
                <div class="content">
                    <h6><?php echo $lang["l_r_16"] ?></h6>
                    <h6><?php echo $lang["l_r_17"] ?></h6>
                    <h6><?php echo $lang["l_r_18"] ?></h6>
                    <h6><?php echo $lang["l_r_19"] ?></h6>
                    <br>
                    <div class="btn">
                        <button><?php echo $lang["l_r_20"] ?> -></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <br>
                <h3 id="getTxtSb"><?php echo $lang["l_r_2"] ?></h3>
                <div class="content">
                    <h6><?php echo $lang["l_r_3"] ?></h6>
                    <h6><?php echo $lang["l_r_4"] ?></h6>
                    <h6><?php echo $lang["l_r_5"] ?></h6>
                    <h6><?php echo $lang["l_r_6"] ?></h6>
                    <br>
                    <div class="btn">
                        <button><?php echo $lang["l_r_7"] ?> -></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <br>
                <h3 id="getTxtSb"><?php echo $lang["l_r_8"] ?></h3>
                <div class="content">
                    <h6><?php echo $lang["l_r_9"] ?></h6>
                    <h6><?php echo $lang["l_r_10"] ?></h6>
                    <h6><?php echo $lang["l_r_11"] ?></h6>
                    <h6><?php echo $lang["l_r_12"] ?></h6>
                    <h6 id="marginCorrect"><?php echo $lang["l_r_13"] ?></h6>

                    <div class="btn">
                        <button><?php echo $lang["l_r_14"] ?> -></button>
                    </div>
                </div>
            </div>
            <div class="card">
                <br>
                <h3 id="getTxtSb"><?php echo $lang["l_r_15"] ?></h3>
                <div class="content">
                    <h6><?php echo $lang["l_r_16"] ?></h6>
                    <h6><?php echo $lang["l_r_17"] ?></h6>
                    <h6><?php echo $lang["l_r_18"] ?></h6>
                    <h6><?php echo $lang["l_r_19"] ?></h6>
                    <br>
                    <div class="btn">
                        <button><?php echo $lang["l_r_20"] ?> -></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script>
        $(".slider").owlCarousel({
            loop: true,
            autoplay: true,
            autoplayTimeout: 2000, //2000ms = 2s;
            autoplayHoverPause: true,
            responsive: {
                0: {
                    items: 1,
                    stagePadding: 10
                },
                400: {
                    items: 1,
                    stagePadding: 30
                },
                600: {
                    stagePadding: 50,
                    items: 3
                }
            }
        });
    </script>

    <div class="container-fluid">
        <div id="asp">
            <img id="revImg" src="assets/img/asp2.png" alt="">
            <img id="revImg" src="assets/img/asp2.png" alt="">

        </div>
    </div>

    <!-- Abrir conta -->
    <br><br><br>
    <div class="space"><br><br></div>
    <div class="text-center">

        <h1 id="genTxtReg2-prf"><?php echo $lang["l_pf_1"] ?></h1>
        <h1 id="genTxtReg2-prf"><?php echo $lang["l_pf_2"] ?></h1>
        <h1 id="genTxtReg2-prf"><?php echo $lang["l_pf_3"] ?></h1>
        <br>
        <h5 id="genTxtReg3-prf"><?php echo $lang["l_pf_4"] ?></h5>
        <br>
        <div class="space"><br></div>
        <a id="carBtnAlt" href=""><?php echo $lang["l_pf_5"] ?></a>
        <br><br><br><br><br>
        <div class="space">
            <br><br><br><br><br>
        </div>
    </div>

    <!-- <script src="//code-sa1.jivosite.com/widget/yWKoc8dRjf" async></script> -->
</div>