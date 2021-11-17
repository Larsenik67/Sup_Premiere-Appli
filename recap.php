<?php
    session_start();

    require_once "function.php";
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css" rel="stylesheet">
    <link href="style.css" rel="stylesheet">
    <title>Récapitulatif des produits</title>
</head>
<body>
    <?php 
        if(!isset($_SESSION['products']) || empty($_SESSION['products'])){
            echo "<div class='my-1 produit'>Aucun produit en session...</div>";
        }
        else {
            echo "<table>",
                    "<thread>",
                        "<tr>",
                            "<th>#</th>",
                            "<th>Nom</th>",
                            "<th>Prix</th>",
                            "<th>Quantité</th>",
                            "<th>Total</th>",
                        "</tr>",
                    "</thread>",
                "<tbody>";
        $totalGeneral = 0;
        foreach($_SESSION['products'] as $index => $product){
            echo "<tr>",
                    "<td>".$index."</td>",
                    "<td>".$product['name']."</td>",
                    "<td>".number_format($product['price'], 2, ",", "&nbsp;")."&nbsp;€</td>",
                    "<td><a href='traitement.php?order=inc&index=$index'>+</a>".$product['qtt']."<a href='traitement.php?order=dec&index=$index'>-</a></td>",
                    "<td>".number_format($product['total'], 2, ",", "&nbsp;")."&nbsp;€</td>",
                    "<td><a href='traitement.php?order=remove&index=$index' class='bi bi-trash btn btn-outline' data-bs-toggle='tooltip' data-bs-placement='right' title='Supprimer'></a></td>",
                    
                "</tr>";
            $totalGeneral+= $product['total'];
        }
        echo "<tr>",
                "<td colspan=4>Total général : </td>",
                "<td><strong>".number_format($totalGeneral, 2, ",", "&nbsp;")."&nbsp;€</strong></td>",
                "</tr>", 
            "</tbody>",
                "</table>";

        }

    if(isset($_SESSION['products'])){

        echo "<div class='my-1 produit'>Il y'a ".count($_SESSION['products'])." produit(s) d'ajouté</div>";

    }

    echo "<div class='my-1 produit'><a href='traitement.php?order=delall'>Tout supprimer</a>";
    ?>
    <div id="retour" class="my-1">
        <form action="index.php" method="post">
            <input class="my-1 submit" type="submit" name="submit" value="Ajouter des produits">
        </form>
    </div>
</body>
</html>