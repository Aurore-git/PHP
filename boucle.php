<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Boucles php</title>
</head>

<body>
<h1>TP PHP</h1>
<h2>Les boucles</h2>


<h3>Exercice 1</h3>
    <p>Créer une variable et l'initialiser à 0.  
    Tant que cette variable n'atteint pas 10 : 
    => l'Afficher => incrémenter de 1 </p>


    <?php
    for ($limit = 0 ; $limit <= 10; $limit++)
    {
        echo '$limit <br />';
    }
    ?>


<h3>Exercice 2</h3> 
    <p>Créer deux variables. Initialiser la première à 0 et la deuxième avec un nombre compris en 1 et 100. Tant que la première variable n'est pas supérieur à 20 : 
    => multiplier la première variable avec la deuxième 
    => afficher le résultat 
    => incrémenter la première variable </p> 

    <?php

    $a = 0;
    $b = 9;

    while ($a <= 20) {
        echo $a * $b ;
        $a++;
    }
    ?>


<h3>Exercice 3</h3> 
    <p>Créer deux variables. Initialiser la première à 100 et la deuxième avec un nombre compris en 1 et 100.  Tant que la première variable n'est pas inférieur ou égale à 10 : 
    => soustraire la première variable avec la deuxième 
    => afficher le résultat 
    => décrémenter la première variable </p>

    <?php
    $a = 100;
    $b = 23;

    while ($a >= 10) {
        echo $a * $b ; 
        $a--;
    }
    ?>


<h3>Exercice 4</h3> 
    <p>Créer une variable et l'initialiser à 1. Tant que cette variable n'atteint pas 10 : 
    => l'afficher 
    => l'incrémenter de la moitié de sa valeur </p>

    <?php
    for($i = 1; $i <= 10; $i += $i/2 ) {
        echo $i ;
    }
    ?>


<h3>Exercice 5</h3> 
    <p>En allant de 1 à 15 avec un pas de 1, afficher le message On y arrive presque…</p>
    
    <?php
    for($i = 1; $i <= 15; $i++) {
        echo 'on y arrive presque <br />';
    }
    ?>


<h3>Exercice 6</h3>
    <p>En allant de 20 à 0 avec un pas de 1, afficher le message C'est presque bon...</p>

    <?php
    for($i = 20; $i >= 1; $i--) {
    echo 'C\'est presque bon <br />';
    }
    ?>


<h3>Exercice 7</h3>
    <p>En allant de 1 à 100 avec un pas de 15, afficher le message On tient le bon bout...</p>

    <?php
    for($i=1; $i <= 100; $i += 15) {
        echo 'On tient le bon bout <br/>';
    }
    ?>


<h3>Exercice 8</h3>
    <p>En allant de 200 à 0 avec un pas de 12, afficher le message Enfin ! ! !</p>

    <?php
    for($i=200; $i>=0; $i -= 12)  {
        echo('enfin !!!<br/>');
    }
    ?>


</body>
</html>