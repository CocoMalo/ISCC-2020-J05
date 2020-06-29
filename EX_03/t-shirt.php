<!DOCTYPE html> 
<html>
    <head>
    </head>

    <body>

        <?php
        $nom_produit = "T-shirt simple";
        $couleur = "Blanc";
        $prix = 10.50;
        $disponible = true;
        $disponible = false ;
        $quantité = "10";
    
    echo $nom_produit;
    echo $couleur;
    echo $prix ;
    echo $disponible;
    echo $quantité;
        ?>

        <h3> Le nom du produit est <?php echo $nom_produit; ?>.
            Il reste <?php echo $disponible;?> produits en stock.
            Le produit <?php echo $nom_produit; ?> est de couleur <?php echo $couleur; ?>.
        </h3> 

        <h4> Acheter 3 produits couterait <?php echo 3* $prix; ?>.
        Acheter la totalité des produits disponibles couterait <?php echo $quantité* $prix; ?>
        Si trois produits sont vendus, il restera alors <?php echo $quantité -3?> 
    
    <p> 
        <?php
            if ($disponible == true)
            {echo "le produit $nom_produit est disponible en ligne."; }
            else
            {echo "le produit $nom_produit n'est malheuresement plus disponible."; } 
            ?> 
    </p> 

    <p> 
        <?php
            if ($quantité ==0)
            {echo "Il ne reste plus de produit en magasin."; }
            elseif ($quantité==1)
            {echo "Il ne reste plus qu'un produit en magasin."; }
            elseif ($quantité<5)
            {echo "Il ne reste plus que $quantité produits en magasin."; }
            else
            {echo "Il reste $quantité produits en magasin."; }
            ?>
    </p>

    </body> 

</html> 