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
    function ex1(){
    return true;
    }
    ?>


<!--Exercice 2-->
<h3>Exercice 2</h3>
    <p>Faire une fonction qui prend en paramètre une chaine de caractères et qui retourne cette même chaine </p>

    <?php
    $str = "J'ai 41 ans";

    function ex2($str) {
    return $str;
    }

    echo $str;
    ?>


<!--Exercice 3-->
<h3>Exercice 3</h3>
    <p>Faire une fonction qui prend en paramètre deux chaines de caractères et qui renvoit la concaténation de ces deux chaines.</p>

    <?php
    $str1 = "J'ai 41 ans";
    $str2 = "Je suis une femme";

    function ex3( $str1,  $str2)  {
        return $str1 . $str2;
    }

    echo $str1 , $str2;
    ?>

<!--Exercice 4-->
<h3>Exercice 4</h3>
    <p>Faire une fonction qui prend en paramètre deux nombres. La fonction doit retourner :
    => Le premier nombre est plus grand si le premier nombre est plus grand que le deuxième
    => Le premier nombre est plus petit si le premier nombre est plus petit que le deuxième
    => Les deux nombres sont identiques si les deux nombres sont égaux</p>

    <?php
    function ex4( $a,  $b) {
        if ($a < $b) {
            return "$a plus petit que $b";
        }
        if ($a > $b) {
            return "$a plus grand que $b";
        }
        return "$a égal à $b";
    }
  
    ?>

<!--Exercice 5-->
<h3>Exercice 5</h3>
    <p>Faire une fonction qui prend en paramètre un nombre et une chaine de caractères et qui renvoit la concaténation de ces deux paramètres. </p>

    <?php
    $int1 = 15;
    $str1 = "Il fait beau auj";

        function ex5( $int1, $str1)
    {
        return $int1 . $str1;
    }

    echo $int1, $str1;
    ?>

<!--Exercice 6-->
<h3>Exercice 6</h3>
    <p>Faire une fonction qui prend trois paramètres : nom, prenom et age.
    Elle doit renvoyer une chaine de la forme : "Bonjour" + nom + prenom + ", tu as " + age + "ans".</p>

    <?php
    $nom = 'Malochet';
    $prenom = 'Aurore';
    $age = 41;

    function ex6 (
        $nom,
        $prenom,
        $age)

        {
        return "Bonjour $nom $prenom, tu as $age ans.";
        }

        echo "Bonjour $nom $prenom, tu as $age ans."
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
    function ex7( $age,  $genre)
    
    {
    $ageString = "vous êtes majeur";
    if ($age <= 18) {
        $ageString = "vous êtes mineur";
    }

   

    

    }
    ?>

<!--Exercice 8-->
<h3>Exercice 8</h3>
    <p>Faire une fonction qui prend en paramètre trois nombres et qui renvoit la somme de ces nombres.
    Tous les paramètres doivent avoir une valeur par défaut.</p>

    <?php
    $a = 2;
    $b = 3;
    $c = 4;

    function multecho(int $a, int $b, int $c){
        echo $a  +  $b + $c  =  '$a + $b + $c <br/>';
    }
    
    function multreturn(int $a, int $b, int $c){
        return $a + $b + $c = ' $a + $b + $c <br/>';
    }

    ?>

</body>
</html>