<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Variables php</title>
</head>
<body>

    <h1>Tp php</h1>
    <h2>Les variables</h2>

<div>
    <h3>Exercice 1</h3>
        <p>Créer une variable : «nom» et l'initialiser avec la valeur de votre choix.  
    Afficher son contenu. </p>

    <?php
    $nom = Aurore;
    ?>
</div>
<div>
    <h3>Exercice 2</h3>
        <p>Créer trois variables : «nom» , «prenom» et «age» et les initialiser avec les 
    valeurs de votre choix.  Attention age est de type entier. Afficher leur contenu.</p> 

    <?php
    $nom = Malochet;
    echo $nom ;
    echo "<br/>";

    $prenom = Aurore;
    echo $prenom;
    echo "<br/>";

    $age = 41;
    echo $age;
    ?>
</div>
<div>
    <h3>Exercice 3</h3>
        <p>Créer une variable «km» . L'initialiser à 1. Afficher son contenu. Changer sa valeur par 3. 
    Affcher son contenu. Changer sa valeur par 125. Afficher son contenu.</p>
    
    <?php
    $km = 1;
    echo "variable à 1 = $km" ;
    echo "<br/>";

    $km = 3 ;
    echo "variable à 3 = $km <br/>";
    

    $km = 125;
    echo "variable à 125 = $km";
    ?>

</div>
<div>
    <h3>Exercice 4</h3>
        <p>Créer une variable de type string, une variable de type int, une variable de type  float, une variable 
    de type booléan et les initialiser avec une valeur de votre choix. Les afficher. </p>
    
    <?php
    $string = "on est le 19 février 2021";
    echo $string;
    echo "</br>";

    $int = 2021;
    echo $int;
    echo "</br>";

    $float = 3.14;
    echo $float;
    echo "</br>";

    $je_suis_un_homme = false;
    echo "je suis une femme $je_suis_un_homme";
    echo "</br>";
    ?>
</div>
<div>
    <h3>Exercice 5</h3>
        <p>Créer une variable de type int. L'initialiser avec rien. Afficher sa valeur. 
    Donner une valeur à cette variable et l'afficher. </p>

    <?php
    $annee = NULL;
    echo $annee;
    echo "</br>";
    
    $annee = 2021;
    echo $annee;
    ?>
</div>
<div>
<h3>Exercice 6</h3>
        <p>Créer une variable «nom» et l'initialiser avec la valeur de votre choix. 
    Afficher : "Bonjour" + nom + ", comment vas tu ?".</p>

    <?php
    $nom = Aurore;
    echo "Bonjour $nom comment vas tu ?";
    ?>
<div>
<div>
<h3>Exercice 7</h3>
        <p>Créer trois variables «nom» , «prenom» et «age» et les initialiser avec 
    les valeurs de votre choix. Attention age est de type entier. 
    Afficher : "Bonjour" + nom + prenom + ",tu as" + age + "ans". </p>
    
    <?php
    $nom = Malochet;
    $prenom =  Aurore;
    $age = 41;
    echo "Bonjour, $nom $prenom, tu as $age ans.";
    ?>
</div>
<div>
<h3>Exercice 8</h3>
        <p>Créer 3 variables. 
    Dans la première mettre l'addition qui donne le résultat 7. 
    Dans la deuxième mettre la multiplication qui donne le résultat 100. 
    Dans la troisième mettre la division qui donne le résultat 5. 
    Afficher le contenu des variables.
    </p>

    <?php
    $add = 3+4;
    echo $add;
    $multi = 20*5;
    echo $multi;
    $divi = 10/2;
    echo $divi;
    ?>
</div>

</body>
</html>