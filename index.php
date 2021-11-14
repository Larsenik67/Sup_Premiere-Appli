<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="style.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Ajouter un produit</title>
</head>
    <body>
        <div class ="my-5">
            <div class="formulaire">
                <h1 class="my-2">Ajouter un produit<hr></h1>
                <form action ="traitement.php" method="post">
                    <p>
                        <label class="my-1">
                            Nom du produit :
                            <input type="text" name="name">
                        </label>
                    </p>
                    <p>
                        <label class="my-1">
                            Prix du produit :
                            <input type="number" name="price">
                        </label class="my-1">
                    </p>
                    <p>
                        <label class="my-1">
                            Quantité désirée :
                            <input type="number" name="qtt" value="1">
                        </label>
                    </p>
                    <input class="my-1 submit" type="submit" name="submit" value="Ajouter le produit">
                </form>
                <form action="recap.php" method="post">
                    <input class="my-1 submit" type="submit" name="submit" value="Aller au récapitulatif">
                </form>
            </div>
        </div>
    </body>
</html>