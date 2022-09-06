<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Introduction PHP - Exo 4</title>
</head>
<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 4</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a class="main-nav-link" href="index.php">Entrainement</a></li>
                    <li><a class="main-nav-link" href="exo2.php">Donnez moi des fruits</a></li>
                    <li><a class="main-nav-link" href="exo3.php">Donnez moi de la thune</a></li>
                    <li><a class="main-nav-link active" href="exo4.php">Des fonctions et des tableaux</a></li>
                    <li><a class="main-nav-link" href="exo5.php">Netflix</a></li>
                </ul>
            </nav>
        </header>

<?php

$array = [12, 65, 95, 41, 85, 63, 71, 64];

$arrayA = [12, "le", 95, 12, 85, "le", 71, "toi", 95, "la"];
$arrayB = [85, "toi", 95, "la", 65, 94, 85, "avec", 37, "chat"];
?>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et retourne la chaîne de caractère HTML permettant d'afficher les valeurs du tableau sous la forme d'une liste.</p>
            <div class="exercice-sandbox">
                <?php
                     function var_dumb($var) {
                        echo "<pre>" , var_dump($var) , "</pre>";
                    }

                    function makeAListFromArray(array $arr): string {
                         $var = "<ul>";
                        foreach($arr as $val) {
                            $var .= "<li>$val</li>";
                        }
                        $var .= "</ul>";
                        return $var;
                    }
                    echo makeAListFromArray($array);
                ?>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les valeurs paires. Afficher les valeurs du tableau sous la forme d'une liste HTML.</p>
            <div class="exercice-sandbox">
                    <?php
                        function getEvenFromArray(array $arr): string {
                            $var = "<ul>";
                            foreach($arr as $val) {
                                if($val%2 === 0){
                                    $var .= "<li>$val</li>";
                                }
                            }
                            $var .= "</ul>";
                            return $var;
                        }
                        echo getEvenFromArray($array);
                    ?>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et retourne uniquement les entiers d'index pair</p>
            <div class="exercice-sandbox">
                <?php
                    function getEvenIndexFromArray(array $arr):array {
                        $var = [];
                        foreach($arr as $ind => $val) {
                            if($ind%2 === 0) {
                                $var[$ind] = $val;
                            }
                        };
                        return $var;
                    }
                    var_dumb(getEvenIndexFromArray($array));
                ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers. La fonction doit retourner les valeurs du tableau mulipliées par 2.</p>
            <div class="exercice-sandbox">
                <?php
                    function multiplyValuesOfArrayBy2($arr): array {
                        $var = [];
                        foreach($arr as $ind => $val) {
                            $val *= 2;
                            $var[$ind] = $val;
                        }
                        return $var;
                    }
                    var_dumb(multiplyValuesOfArrayBy2($array));
                ?>
            </div>
        </section>

        <!-- QUESTION 4 BIS -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4 bis</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers et un entier. La fonction doit retourner les valeurs du tableau divisées par le second paramètre</p>
            <div class="exercice-sandbox">
                <?php
                    
                    function divideValuesByIt(array $arr, int $it): array {
                        $var = [];
                        foreach($arr as $ind => $val) {
                            $output = $val / $it;
                            $var[$ind] = $output;
                        }
                        return $var;
                    }
                    var_dumb(divideValuesByIt($array, 2));
                ?>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau d'entiers ou de chaînes de caractères et retourne le tableau sans doublons</p>
            <div class="exercice-sandbox">
                <?php
                    function cleanArrayFromDuplicate(array $arr): array {
                        $result = array_unique($arr);
                        return $result;
                    }
                    var_dumb(cleanArrayFromDuplicate($arrayA));
                    var_dumb(cleanArrayFromDuplicate($arrayB));
                    ?>
            </div>
        </section>

        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau représentant l'intersection des 2</p>
            <div class="exercice-sandbox">
                <?php
                function intersect2Arrays(array $arr1, array $arr2): array {
                    $arrayC = array_intersect($arr1, $arr2);
                    return $arrayC;
                }
                var_dumb(intersect2Arrays($arrayA, $arrayB));
                ?>
            </div>
        </section>
                    
        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre 2 tableaux et retourne un tableau des valeurs du premier tableau qui ne sont pas dans le second</p>
            <div class="exercice-sandbox">
                <?php
                function diffBetween2Arrays(array $arr1, array $arr2): array {
                    $arrayD = array_diff($arr1, $arr2);
                    return $arrayD;
                }
                var_dumb(diffBetween2Arrays($arrayA, $arrayB));
                ?>
            </div>
        </section>
        
        
        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Réécrire la fonction précédente pour lui ajouter un paramètre booléen facultatif. Si celui-ci est à true, le tableau retourné sera sans doublons</p>
            <div class="exercice-sandbox">
                <?php
                    function diffBetween2ArraysIfTrue(array $arr1, array $arr2, bool $double = false): array {
                        $arrayD = array_diff($arr1, $arr2);
                        if($double === true) {
                            return cleanArrayFromDuplicate($arrayD);
                        }
                        return $arrayD;
                    }
                    var_dumb(diffBetween2ArraysIfTrue($arrayA, $arrayB, true));
                ?>
            </div>
        </section>

            
        <!-- QUESTION 9 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Déclarer une fonction qui prend en paramètre un tableau et un entier et retourne les n premiers éléments du tableau.</p>
            <div class="exercice-sandbox">
                <?php
                    function getNLineOfArray(array $arr, int $n): array {
                        foreach($arr as $ind => $val) {
                            $arr1 = [];
                            if(count($arr) < $n) {
                               array_push($arr1, $val); 
                            }
                        }
                        return $arr1;
                    }
                    var_dumb($array, 3);
                ?>
            </div>
        </section>
    </div>
<div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>