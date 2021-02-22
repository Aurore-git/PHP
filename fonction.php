<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Fonctions php</title>
</head>
<body>
<h1>Tp php</h1>
<h2>Les fonctions</h2>

<!--Exercice 1-->
<h3>Exercice 1</h3>
    <p>Faire une fonction qui retourne true. </p>

    <?php
    function ex1() : bool {
    return true;
    }
    ?>


<!--Exercice 2-->
<h3>Exercice 2</h3>
    <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine </p>

    <?php
    function ex2(string $str) : string {
    return $str;
    }
    ?>


<!--Exercice 3-->
<h3>Exercice 3</h3>
    <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines.</p>

    <?php
    function ex3(string $str1, string $str2) : string {
        return $str1 . $str2;
    }
    ?>

<!--Exercice 4-->
<h3>Exercice 4</h3>
    <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
    => Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    => Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    => Les deux nombres sont identiques si les deux nombres sont égaux</p>

    <?php
    function ex4(int $a, int $b) : string {
        if ($a < $b) {
            return "$a plus petit que $b";
        }
        if ($a > $b) {
            return "$a plus grand que $b";
        }
        return "$a égal à $b";
    }
    
    function ex4bis(int $a, int $b): string
    {
        if ($a === $b) return "$a égal à $b";
        return ($a < $b) ? "$a plus petit que $b" : "$a plus grand que $b";
    }
    
    var_dump(ex4(12, 23));
    var_dump(ex4bis(12, 23));
    var_dump(ex4(23, 12));
    var_dump(ex4bis(23, 12));
    var_dump(ex4(12, 12));
    var_dump(ex4bis(12, 12));

    ?>

<!--Exercice 5-->
<h3>Exercice 5</h3>
    <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres. </p>

    <?php
        function ex5(int $int1, string $str1): string
    {
        return $int1 . $str1;
    }
    ?>

<!--Exercice 6-->
<h3>Exercice 6</h3>
    <p>Faire une fonction qui prend trois paramètres : nom, prenom et age.
    Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prenom + ", tu as " + age + "ans".</p>

    <?php
    function ex6( string $nom,
    string $prenom,
    string $age) : string
    {
    return "Bonjour $nom $prenom, tu as $age ans.";
    }
    ?>

<!--Exercice 7-->
<h3>Exercice 7</h3>
    <p>Faire une fonction qui prend deux paramètres : age et genre.
    Le paramètre genre peut prendre comme valeur Homme ou Femme.
    La fonction doit renvoyer en fonction des paramètres (gérer tous les cas) :
    => Vous êtes un homme et vous êtes majeur
    => Vous êtes un homme et vous êtes mineur
    => Vous êtes une femme et vous êtes majeur
    => Vous êtes une femme et vous êtes mineur</p>

    <?php
    function ex7(int $age, string $sexe) : string {
    $ageString = "vous êtes majeur";
    if ($age <= 18) {
        $ageString = "vous êtes mineur";
    }

    $sexeString = "homme";
    $accord = "";
    if ($sexe === "f") {
        $sexeString = "femme";
        $accord = "e";
    }

    return("Vous êtes un" . $accord . " " . $sexeString . " et " . $ageString . $accord);

    }
    ?>

<!--Exercice 8-->
<h3>Exercice 8</h3>
    <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
    Tous les paramètres doivent avoir une valeur par défaut.</p>

    <?php
    function ex8(int $a = 12,int $b = 13, int $c = 14) : int {
        return $a + $b + $c;
    }
    ?>

    
    
</body>
</html>