
<!-- M1 "Octavio Franco -->

<?php
session_start();

include ("indexbdd.php");

/*$choix = $_GET["choix"]??0;

$produits = array();

/*foreach ($produits){

}*/


?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>index</title>
    <link rel="stylesheet" href="index.css">

</head>
<body>
    

<!--menu principale-->
<nav class="menu">

    <div class="sousmenu">
        <a href="#">
            <img class="logo1" src="http://localhost/runtrack2/projetamazon/photos/logo-amazon-removebg.png" alt="logo amazon"/>
        </a>
        <div class="lien3">
            <a class="emplacement" href="#" style="text-decoration: none;">
                <p class="textes">Mettre a jour l'emplacement</p>
            </a>
            
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
                        <img class="loupe" src="http://localhost/runtrack2/projetamazon/photos/loupe.png" alt="loupe recherche">          
                    </a>
                </div>
            </div>
        </section>



        <div class="lien4">
            <a class="p" href="#" style="text-decoration: none;">
                <p class="textes">Retours et commandes</p>
            </a>
        </div>

        <!--bouton panier-->
        <div>
            <a href="#" style="text-decoration: none;">
                <img class="panier" src="http://localhost/runtrack2/projetamazon/photos/panier-shopping-blanc-removebg.png" alt="panier">
                <p class="panier1" >Panier</p>

            </a>
        </div>
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
</section>

<header class="header">

    <div class="fondheader">

        <div class= "presentation">
            <!-- H1 -->
            <h1 class= "h1">Amazon informatique</h1>
            <p class= "texte"><strong>Le monde informatique d'Amazon fait pour vous...</strong></p>
        </div>

        <?php for($i = 0; $i < 5; $i ++) { ?>
            <div class="whitebloc"> <!--block1 blanc articles -->

                <!--image article-->
                <img class= "image" src="<?php echo $produits[$i]["image"]; ?>" alt="article pc" style="width: 400px;height: 400px;">
                
                <div class="colone">
                    <!-- nom produit -->
                    <h3>  <?php echo $produits[$i]["name"]; ?></h3>
                        <p class= "petitoverview"><?php echo $produits[$i]["petitoverview"]; ?>  
                        </p>
                            <!-- Prix produit -->
                            <p class="price">Prix  <?php echo $produits[$i]["price"]; ?>
                            </p>
                                <!--bouton "vos produits" article-->
                                <a href="indexaffichage.php" style="text-decoration: none;">
                                    <button class= "boutonarticle1" type="bouton">Voir le produit</button>
                                </a>
                </div>
            </div>
        <?php } ?>

    </div>
</header>






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