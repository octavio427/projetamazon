
<!-- M3 "Thomas Morelle" -->

<?php
    include 'product.php';

    session_start();
    $total= 0;
    $_SESSION ["panier"] = array (0,1,2,3,4);

    $panier = $_SESSION ["panier"];
    
$nmbrarticle=count($produits);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Panier.css">
    <title>Document</title>
</head>
<body>

<?php for ($i=0;$i<$nmbrarticle;$i=$i+1){ ?>
        
<?php } ?>


    <!--menu principale-->
<nav class="menu">

<div class="sousmenu">
    <a href="#">
        <img class="logo1" src="amazon.png" alt="logo amazon"/></a>

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
        <img class="loupe" src="loupe.png" alt="loupe recherche">
        
        </button>
                        
        </a>
    </div>
</div>
    </section>



<div class="lien4">
<a class="p" href="#" style="text-decoration: none;"><p class="textes">Retours et commandes</p></a>
</div>

<div>
<a href="#" style="text-decoration: none;">
<img class="panier" src="panier.png" alt="panier">

<p class="panier1" >Panier</p>

</a>
</div>

</nav>

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

</div>


</div>
</header>

<section>

    <div class="Panier">
        <div class= "pan">
            <h3>Votre panier</h3>

        </div>
            <a href="#">Désélectionner tous les éléments</a>

            <?php 
            
            foreach ($_SESSION ['panier'] as $articleId) {
                
                $article = $produits[$articleId];
                $subtotal = $article ['price'];
                $total = $total + $subtotal; 

            ?>

                <div class= "article">
                    <tr>
                    <td><?= $article ['name'];?><td>
                    <br>
                    <td>Prix:<?=$subtotal ;?>€</td>
                    </tr>

                </div>
        
        <?php } 

            echo 'Total : ' .$total. 'Euros';
       
        ?>

    </section>



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
</div>
 
</body>
</html>


