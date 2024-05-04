<?php include_once "menuSearch.php"; ?>


<div class="container">

    <div class="text-center">
        <br><br>
        <h1 id="articleTitle">Resultado da sua pesquisa: </h1>
        <br><br><br><br><br>

        <?php
        $se = "s";

        if (isset($_GET["s"])) {
            $se = $_GET["s"];
        }

        if ($se == 's') {
            include_once "error.php";
        } else {

            $search = explode(" ", $se);

            //Article Keywords
            //var = ["title of article", "visible get value", "keywork 1", "keyword 2", "keyword 3"...]
            $article01 = ["Bitcoin, a moeda que mais valoriza!", "article01", "bitcoin", "preço", "valor", "moeda"];
            $article02 = ["Título do artigo 2", "article02", "ethereum", "price", "value", "coin"];
            $article03 = ["Título do artigo 3", "article03", "bullgain", "exchange", "corretora"];

            //List of Articles 
            $list_of_articles = [$article01, $article02, $article03];

            //Index the articles related
            // for ($i = 0; $i < count($search); $i++) {
            //     for ($j = 0; $j < count($list_of_articles); $j++) {
            //         if (in_array(strtolower($search[$i]), $list_of_articles[$j])) {

            //             echo '<h3><a id="articleLink" href="../articles/?s=' . $list_of_articles[$j][1] . '">' . $list_of_articles[$j][0] . ' </a></h3><br><br>';
            //         }
            //     }
            // }

            for ($i = 0; $i < count($list_of_articles); $i++) {
                for ($j = 0; $j < count($search); $j++) {
                    if (in_array(strtolower($search[$j]), $list_of_articles[$i])) {

                        echo '<h3><a id="articleLink" href="../articles/?s=' . $list_of_articles[$i][1] . '">' . $list_of_articles[$i][0] . ' </a></h3><br><br>';
                        break;
                    }
                }
            }
        }


        ?>

    </div>
    <br><br><br><br><br><br><br><br>
</div>
<?php include_once "footerSearch.php"; ?>