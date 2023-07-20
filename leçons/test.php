<!-- Variables -->
<div style="margin-bottom: 50px">
    <?php 
     $monAge = 22;
     $monNom = "Alexis";
     $monType = "Homme";

     echo 'Bonjour je m\'appelle ' . $monNom . ' j\'ai ' . $monAge .' ans, je suis un ' . $monType;
    ?>    
</div>

<!-- Structure Conditionnelle -->
<div style="margin-bottom: 50px"> 
    <?php
    $isEnabled = true; 
    $isAuthor = false;
    $isAdmin = true;

    if (($isEnabled && $isAuthor) || $isAdmin) {
        echo "Acces à la recette ✅";
    }
    else{
        echo "Accès refusé ❌ ";
    }
    ?>
</div>

<!-- Switch -->
<div style="margin-bottom: 50px">
    <?php 
    $noteRecette = 0;

    switch($noteRecette) 
    {
        case 0:
            echo "Pas bouffable !!! Je suis tout mort";
        break;

        case 1:
            echo "Presque mort tellement c'est dégeulasse";
        break;

        case 2:
            echo "Pas fou !";
        break;

        case 3:
            echo "Ca peu s'avaler";
        break;

        case 4:
            echo "J'ai fait plaisir à Momone";
        break;

        case 5: 
            echo "SUGOYYYYY";
        break;    

        default:
        echo "Désolé, je n'ai pas de note à afficher pour cette recette";
    }

    ?>
</div>

<!--- Tableaux---->
<?php 
    $alexis = ["alexis", "alexis@gmail.com", 33, "mdp01800"];
    $jordan = ["jordan", "jordan@gmail.com", 40, "djodjo601"];
    $chelsy = ["chelsy", "chelsy@gmail.com", 60, "chel01234"];

    $users = [$alexis, $jordan, $chelsy];
?>

<!--- BOUCLES---->
<div style="margin-bottom: 50px">
    <p> Boucles while: Affichages des infos utilisateurs<p>
<?php

    $lines = 3; // Nombre d'utilisateurs dans le tableaux //
    $counter = 0;

    while($counter < $lines) {
        echo $users[$counter][0]. ' ' . $users[$counter][1] . ' ' . $users[$counter][2]. ' ans ' .'<br>' ;
        $counter++;
    }
?>
</div>

<div style="margin-bottom: 50px">
    <p> Boucles For: Affichages infos utilisateurs<p> 
    <?php
        for($lines = 0; $lines <= 2; $lines++) {
            echo $users[$lines][1]. ' ' . $users[$lines][0]. '<br>';
        }
    ?>
</div>

<!--- Tableaux Numérotés et Associatif--->
<div style="margin-bottom: 50px">
    <p>tableaux numérotés: <p>
        <?php 
            $recipes = ["Aligot", "Rougaille", "Flan", "Escalope milanaise"];
            echo $recipes[1];
        ?>
</div>    
<div style="margin-bottom: 50px">
        <p>Boucles ForEach tableaux numérotés<p>
            <?php
            foreach($recipes as $value) {
                echo $value;
            }
            ?>
</div>           
<div style="margin-bottom: 50px ">
        <p>Tableaux associatifs<p>
        <?php
            $recipes = [
                [
                    'title' => 'Aligot',
                    'recipe' => 'Etape 1: du bon fromage Luisier, Etape 2: pommes de terres, Etape 3: ...',
                    'author' => 'Zaz',
                    'enabled' => true, 
                ],
                [
                    'title' => 'Camembert au four',
                    'recipe' => '',
                    'author' => 'Alex',
                    'enabled' => false,
                ],
                [
                    'title' => 'Dorade',
                    'recipe' => '',
                    'author' => 'Elias',
                    'enabled' => true,
                ]
             ];
               
        ?>
</div>

<div style="margin-bottom: 50px; color: red">
        <p>Boucles ForEach tableaux associatifs<p>
            <?php
            foreach($recipes as $recipe) {
                echo $recipe['title'] . ' contribué(e) par : ' . $recipe['author']. PHP_EOL ;
            }
            ?>   
</div>

<div style="margin-bottom: 50px">
        <p>Recuperation de la valeur et de la clés en meme temps:<p>
            <?php 
            $recipes = [
                'title' => 'Glace Vanille',
                'recipe' => '',
                'author' => 'Daniel',
                'enabled' => true,
            ];
            echo '<pre>';
            print_r ($recipes);
            echo '</pre>';
            
            foreach($recipes as $property => $propertyValue) {
                  echo '[' . $property . '] vaut ' . $propertyValue . PHP_EOL;
            }
                  
             ?>
</div>

<p>Aujourdhui <?php date_default_timezone_set("Europe/Paris"); echo "Nous somme le  " . date('d/m/Y H:i:s'); ?>.</p>