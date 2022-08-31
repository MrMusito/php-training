<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/global.css">
    <link rel="stylesheet" href="css/styles.css">
    <title>Introduction PHP - Exo 3</title>
</head>
<body class="dark-template">
    <div class="container">
        <header class="header">
            <h1 class="main-ttl">Introduction PHP - Exo 3</h1>
            <nav class="main-nav">
                <ul class="main-nav-list">
                    <li><a class="main-nav-link" href="index.php">Entrainement</a></li>
                    <li><a class="main-nav-link" href="exo2.php">Donnez moi des fruits</a></li>
                    <li><a class="main-nav-link active" href="exo3.php">Donnez moi de la thune</a></li>
                    <li><a class="main-nav-link" href="exo4.php">Des fonctions et des tableaux</a></li>
                    <li><a class="main-nav-link" href="exo5.php">Netflix</a></li>
                </ul>
            </nav>
        </header>

<?php

$fruits = ["fraise", "banane","pomme", "cerise", "ananas"];

$prices = [3, 2, 2, 5, 8];

?>

        <!-- QUESTION 1 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 1</h2>
            <p class="exercice-txt">Ordonner le tableau des prix par ordre croissant et l'afficher en détail</p>
            <div class="exercice-sandbox">
                <?php
                    function var_dumb($var) {
                        echo "<pre>" , var_dump($var) , "</pre>";
                    } 

                    sort($prices); 
                    var_dumb($prices);
                    echo "<pre>" , print_r($prices) , "</pre>";
                ?>
            </div>
        </section>

        <!-- QUESTION 2 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 2</h2>
            <p class="exercice-txt">Ajouter 1 euro à chaque prix</p>
            <div class="exercice-sandbox">
                <?php
                    function add1($n) {
                        return (++$n);
                    }
                    $pricesUp = array_map("add1", ($prices));
                    echo"<pre>" , print_r($pricesUp) , "</pre>";
                    


                    // foreach($prices as $price){
                    //     $price++;
                    //     echo"<pre>" , var_dump($price) , "</pre>";
                    // }
                ?>
            </div>
        </section>

        <!-- QUESTION 3 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 3</h2>
            <p class="exercice-txt">Créer le tableau $store qui combine les tableaux des fruits et des prix afin d'obtenir un tableau associatif d'attribution des prix. Afficher le tableau obtenu</p>
            <div class="exercice-sandbox">
                <?php
                    $store = array_combine($fruits, $prices);
                    echo"<pre>" , print_r($store) , "</pre>";
                ?>
            </div>
        </section>

        <!-- QUESTION 4 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 4</h2>
            <p class="exercice-txt">Afficher dans une liste HTML le nom des fruits ayant un prix inférieur à 4 euros</p>
            <div class="exercice-sandbox">
                <ul>
                    <?php
                        foreach($store as $fruits => $prices) {
                            if($prices < 4){
                                echo "<li>$fruits</li>";
                            }
                        }
                    ?>
                </ul>
            </div>
        </section>

        <!-- QUESTION 5 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 5</h2>
            <p class="exercice-txt">Afficher dans une liste HTML le nom des fruits ayant un prix pair</p>
            <div class="exercice-sandbox">
                    <?php
                        foreach($store as $fruits => $prices) {
                            if($prices%2 === 0){
                                echo "<li>$fruits</li>";
                            }
                        }
                    ?>
            </div>
        </section>
                    
        <!-- QUESTION 6 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 6</h2>
            <p class="exercice-txt">Composer un panier de fruits ne dépassant pas 12 euros</p>
            <div class="exercice-sandbox">
                    <?php
                        $cart =0;
                        foreach($store as $fruit => $price) {
                            if($cart + $price <= 12){
                                $cart += $price;
                                echo "<li> on ajoute, $fruit , le panier est de: $cart</li>";
                            }
                        }
                    ?>
            </div>
        </section>
                    
        <!-- QUESTION 7 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 7</h2>
            <p class="exercice-txt">En reprenant le prix total du panier constitué à la question précédente, appliquez-lui une taxe de 18%. Afficher le total taxe comprise.</p>
            <div class="exercice-sandbox">
                <?php
                    $ttlTax = $cart * 1.18;
                    echo "Le prix TTC est de : $ttlTax €";
                ?>
            </div>
        </section>

        <!-- QUESTION 8 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 8</h2>
            <p class="exercice-txt">Ajouter au tableau $store le fruit "kiwi" pour un prix de 1,50 € puis afficher le tableau complet</p>
            <div class="exercice-sandbox">
                <?php
                    $store["kiwi"] = 1.5;
                    var_dumb($store);
                        
                    
                ?>
            </div>
        </section>

        <!-- QUESTION 9 -->
        <?php
        $newFruits = [
            "pêche" => 3,
            "abricot" => 2,
            "mangue" => 9
        ];
        ?>
        <section class="exercice">
            <h2 class="exercice-ttl">Question 9</h2>
            <p class="exercice-txt">Ajouter les nouveaux fruits du tableau $newFruits au tableau $store</p>
            <div class="exercice-sandbox">
                <?php
                    $store = array_merge($store, $newFruits);
                    var_dumb($store);
                ?>
            </div>
        </section>

        <!-- QUESTION 10 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 10</h2>
            <p class="exercice-txt">Afficher le nom et le prix du fruit le moins cher</p>
            <div class="exercice-sandbox">
                <?php
                    foreach($store as $fruit => $price) {
                        if(!isset($minA) || $price < $minA) {
                            $min = $price;
                            $cheapF = $fruit;
                        }
                    }
                    echo "<p>Le fruit le moins cher est : $cheapF ($min euro).</p>";
                ?>
            </div>
        </section>

        <!-- QUESTION 11 -->
        <section class="exercice">
            <h2 class="exercice-ttl">Question 10</h2>
            <p class="exercice-txt">Afficher les noms et le prix des fruits les plus chers</p>
            <div class="exercice-sandbox">
                <?php
                    foreach($store as $fruit => $price) {
                        if(!isset($maxA) || $price < $minA) {
                            $minA = $price;
                            $cheapF = $fruit;
                        }
                    }
                    echo "<p>Le fruit le plus cher est : $cheapF ($minA euro).</p>";
                ?>
            </div>
        </section>
    </div>
<div class="copyright">© Guillaume Belleuvre, 2022 - DWWM Le Havre</div>
</body>
</html>