<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Introduction PHP - Exo 5</title>
</head>
<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 5</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a class="main-nav-link" href="index.php">Entrainement</a></li>
                    <li><a class="main-nav-link" href="exo2.php">Donnez moi des fruits</a></li>
                    <li><a class="main-nav-link" href="exo3.php">Donnez moi de la thune</a></li>
                    <li><a class="main-nav-link" href="exo4.php">Des fonctions et des tableaux</a></li>
                    <li><a class="main-nav-link active" href="exo5.php">Netflix</a></li>
                </ul>
            </nav>
        </header>

<?php

// Json file
try {
    $fileContent = file_get_contents("datas/series.json");
    $series = json_decode($fileContent, true);
} catch (Exception $e) {
    echo "Something went wrong with json file...";
    exit;
}

?>

        <section class="exercice">
            Sur cette page un fichier comportant les données de séries télé est importé côté serveur. (voir datas/series.json)
            Les données sont accessibles dans la variable $series.
        </section>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Récupérer dans un tableau puis affichez l'ensemble des plateformes de diffusion des séries. Afficher les par ordre alphabétique.</p>
            <div class="exercice-sandbox">
                <?php
                    function var_dumb($var) {
                        echo "<pre>" , var_dump($var) , "</pre>";
                    }

                    // var_dumb($series);
                    ?>
                        <?php
                            $array = [];
                            foreach($series as $platform) {
                                $array[] = $platform["availableOn"]; 
                            }
                            asort($array);
                            var_dumb($array);
                    ?>
            </div>
        </section>


        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Récupérer dans un tableau puis affichez l'ensemble des styles de séries. Afficher les par ordre alphabétique.</p>
            <div class="exercice-sandbox">
                <?php
                    $array2 = [];
                    $styleList = [];
                    foreach($series as $styles) {
                        $array2[] = $styles["styles"];
                        foreach($array2 as $style => $val) {
                            $styleList[] = $val;
                        }
                    }
                                        
                    function getValues($array){
                        $table = [];
                        foreach($array as $key => $value){
                            if(is_array($value)){
                                foreach($value as $val) {
                                    $table[] = array_pop($value);
                                }
                            }
                        }
                        asort($table);
                        return array_unique($table);
                    }
                    var_dumb(getValues($array2));
                ?>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Afficher la liste de toutes les séries avec l'image principale, le titre, l'équipe de création et la liste des acteurs</p>
            <p class="exercice-txt">L'image et le titre de la série sont des liens menant à cette page avec en paramètre "serie", l'identifiant de la série</p>
            <p class="exercice-txt">Afficher une seule série par ligne sur les plus petits écrans, 2 séries par ligne sur les écrans intermédiaires et 4 séries par ligne sur un écran d'ordinateur.</p>
            <div class="exercice-sandbox">

            </div>
        </section>


        <!-- QUESTION 5 -->
        <section id="question5" class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Si l'URL de la page appelée comporte l'identifiant d'une série, alors afficher toutes les informations de la série.</p>
            <p class="exercice-txt">Si l'identifiant ne correspond à aucune série, afficher un message d'erreur.</p>
            <div class="exercice-sandbox">
                
            </div>
        </section>

    </div>
<div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>