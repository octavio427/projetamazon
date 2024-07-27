
<!-- M2 "Laurent Rosello"  -->

<!-- creer un bouton acheter -->


<?php
session_start();

include ("indexbdd.php");

$id= $_GET ["choix"] ??0;

$produits= array ();
for ( $i = 0 ; count ($produits); $i++) 
// $i=$i+1
{
echo $produits[$i]["id"]; 
if ($produits [$i] ["id"]==$choix);{
$produits = $produits[$i];

}
}

print_r($produits);

// echo $produits[0] ["name"]; 


?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="indexaffchage.css" rel="stylesheet">
</head>

<body>
    
    <!--menu principale-->
<nav class="menu">

<div class="sousmenu">
    <a href="#">
        <img class="logo1" src="http://localhost/Projet Amazon/logo-amazon-removebg.png" alt="logo amazon"/></a>

    <div class="lien3">
        <a class="emplacement" href="#" style="text-decoration: none;"><p class="textes">Mettre a jour l'emplacement</p></a>
        
</div>

    <!--boutons recherche-->
    <section>
    <div class="container">
    <button class="category-button">Nos Catégorie</button>

    <div class="search-container">

        <!--champ recherche-->
        <input type="text" class="champ-recherche" placeholder="Rechercher...">

        <!--loupe-->
        <a href="#">
            <img class="loupe" src="http://localhost/Projet Amazon/loupe.png" alt="loupe recherche">
            
            </button>
                        
        </a>
        </div>
    </div>
    </section>

<div class="lien4">
    <a class="p" href="#" style="text-decoration: none;"><p class="textes">Retours et commandes</p></a>
</div>

<!--bouton panier-->
<div>
    <a href="#" style="text-decoration: none;">
    <img class="panier" src="http://localhost/Projet Amazon\panier-shopping-blanc-removebg.png" alt="panier">

    <p class="panier1" >Panier</p>

    </a>
</div>

</nav>

<!--menu -->   
<section>
<div class="menunav">

    <div class="nav">
        <a href="#" style="text-decoration: none;">
            <p class="textes">Toutes</p>
        </a>
    </div>
        <div class="nav">
            <a href="#" style="text-decoration: none;">
                <p class="textes">Meilleures ventes</p>
            </a>
        </div>
            <div class="nav">
                <a href="#" style="text-decoration: none;">
                    <p class="textes">Amazon Basics</p>
                </a>
            </div>
                <div class="nav">
                    <a href="#" style="text-decoration: none;">
                        <p class="textes">Ventes Flash</p>
                    </a>
                </div>
                    <div class="nav">
                        <a href="#" style="text-decoration: none;">
                            <p class="textes">Dernières Nouveautés</p>
                        </a>
                    </div>
                        <div class="nav">
                            <a href="#" style="text-decoration: none;">
                                <p class="textes">Idées cadeaux</p>
                            </a>
                        </div>
                            <div class="nav">
                                <a href="#" style="text-decoration: none;">
                                    <p class="textes">Vendre sur Amazon</p>
                                </a>
                            </div>
</div>
</section>

<header class= "headers">
<section>
 <div>
    <h1><div class="aurore"> <?php echo $produits[0]["name"] ?> </div><h1>
    
    <div class="petitoverview"> <?php echo $produits[0]["petitoverview"] ?>
    </div>
         <div class="photo1"> <?php echo $produits[0]["overview"] ?>
    
        <img class="photo1" src="http://localhost/Projet Amazon/Photo Article1/PC1-1.png" alt="photo1"/></a>
        </div>

   
    <div class="photo1-2m">
    <a href="#">
        <img class="photo1-2m" src="http://localhost/Projet Amazon/Photo Article1/PC1-2.png" alt="photo1-2m"/></a>

        

    <div class="photo1-3m">
    <a href="#">
        <img class="photo1-3m" src="http://localhost/Projet Amazon/Photo Article1/PC1-2.png" alt="photo1-3m"/></a>
    </div>
</div>
    <div class="lien3">
        
        <a href="Panier.php?subject="<?php echo $id ?>><button> <?php echo "Voir le panier"."<br/>";?> </button></a>
    </div>
</section>
</header>

<!-- <a href="Panier.php?subject="<?php echo $id ?>><button> <?php echo "Voir le panier"."<br/>";?> </button></a> -->


<footer>
    <div class="footer">
        <p class="textes">© 2024 Amazon</p>

        <a href="#" style="text-decoration: none;"><p class="textes">Inc.·Confidentialité</p></a>
        <a href="#" style="text-decoration: none;"><p class="textes">Conditions générales</p></a>
        <a href="#" style="text-decoration: none;"><p class="textes">Plan du site</p></a>
        <a href="#" style="text-decoration: none;"><p class="textes">Fonctionnement du site</p></a>
        <a href="#" style="text-decoration: none;"><p class="textes">Infos sur l'entreprise</p></a>
        </p>
    </div>
</footer>

</body>
</html>
<!-- <a href="Panier.php?subject=<?php echo $id ?>"><button> <?php echo "Voir le panier"."<br/>";?> </button></a> -->