<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <title>Tableaux php</title>
</head>
<body>
<h1>Tp php</h1>
<h2>Les tableaux</h2>
  
<!--Exercice 1-->
<h3>Exercice 1</h3>
    <p>Créer un tableau $mois et l'initialiser avec le nom des douze mois de l'année.</p>

    <?php
    $mois = array  ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 
    'septembre', 'Octobre','novembre', 'Décembre');

    print_r($mois) ;
    ?>

<!--Exercice 2-->
<h3>Exercice 2</h3>
    <p>Avec le tableau de l'exercice 1, afficher la valeur de la troisième ligne de ce tableau.</p>

    <?php
    echo $mois[2];
    ?>

<!--Exercice 3-->
<h3>Exercice 3</h3>
    <p>Avec le tableau de l'exercice , afficher la valeur de l'index 5.</p>

    <?php
    echo $mois[5];
    ?>

<!--Exercice 4-->
<h3>Exercice 4</h3>
    <p>Avec le tableau de l'exercice 1, modifier le mois d'août pour lui ajouter l'accent manquant.</p>
		
		<?php
		
			$replacement = array(7 => 'août');

			$basket = array_replace($mois, $replacement);
			print_r($basket);
		
		?>


<!--Exercice 5-->
<h3>Exercice 5</h3>
    <p>Créer un tableau associatif avec comme index le numéro des départements
    des Hauts de France et en valeur leur nom</p>

    <?php

    $hdf = ['Aisne' => 02, 'Nord' => 59, 'Oise' => 60, 'Pas-de-calais'  => 62 , 'Somme' => 80];

    $hdf[02] = 'Aisne';
    $hdf[59] = 'Nord';
    $hdf[60] = 'Oise';
    $hdf[62] = 'Pas-de-calais';
    $hdf[80] = 'Somme';

    ?>

<!--Exercice 6-->
<h3>Exercice 6 </h3>
    <p>Avec le tableau de l'exercice 5, afficher la valeur de l'index 59.</p>

    <?php
   echo $hdf[59];
    ?>


<!--Exercice 7-->
<h3>Exercice 7 </h3>
    <p>Avec le tableau de l'exercice 5, ajouter la ligne correspondant au département de la ville de Reims.</p>

    <?php
    $hdf[51] = 'Marne';
    ?>


<!--Exercice 8-->
<h3>Exercice 8 </h3>
    <p>Avec le tableau de l'exercice 1 et une boucle, afficher toutes les valeurs de ce tableau</p>

    <?php
     $mois = array  ('Janvier', 'Février', 'Mars', 'Avril', 'Mai', 'Juin', 'Juillet', 'Aout', 
     'septembre', 'Octobre','novembre', 'Décembre');
 
        Foreach($mois As $ValeurIndice => $ElementTableau)
        {
            echo "$ElementTableau <br/>";
        }
    ?>

<!--Exercice 9-->
<h3>Exercice 9 </h3>
    <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau.</p>
    
    <?php

     $hdf = [ 02 =>'Aisne' , 59 =>'Nord' , 60 =>'Oise'  , 62 => 'Pas-de-calais'  , 80 =>'Somme'  ];

   
    foreach($hdf as $departement)
        { 
            echo "$departement <br/>"; 
        } 
    ?>
    
<!--Exercice 10-->
<h3>Exercice 10 </h3>
    <p>Avec le tableau de l'exercice 5, afficher toutes les valeurs de ce tableau ainsi que les clés associées.
    Cela pourra être, par exemple, de la forme :
    "Le département" + nom_departement + "a le numéro" + num_departement</p>

    <?php

    foreach ($hdf as $key =>$departement ){
				echo "Le département " . $departement.  "  a le numéro " .$key.  "</br>" ;
			}
    ?>

</body>
</html>
