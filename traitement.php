<?php

    session_start();

    require_once "function.php";

    if(isset($_POST['submit'])){

        $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
        $price = filter_input(INPUT_POST, "price",  FILTER_VALIDATE_FLOAT, FILTER_FLAG_ALLOW_FRACTION);
        $qtt = filter_input(INPUT_POST, "qtt", FILTER_VALIDATE_INT);

        if($name && $price && $qtt) {

            $product = [
                "name" => $name,
                "price" => $price,
                "qtt" => $qtt,
                "total" => $price*$qtt
            ];

            $_SESSION['products'][] = $product;

            $_SESSION["msg-produit"] = "Le produit a été crée";
            $_SESSION["msg-type"] = "success";
            header("location:index.php");

        } else {
            $_SESSION["msg-produit"] = "Une erreur est survenue";
            $_SESSION["msg-type"] = "danger";
            header("location:index.php");
        }

    }

    if(isset($_GET['order']) && $_GET['order'] == "remove"){
        del();
        header("location:recap.php");
    }

    if(isset($_GET['order']) && $_GET['order'] == "delall"){
        delall();
        $_SESSION["msg-produit"] = "Produit(s) supprimé";
        $_SESSION["msg-type"] = "success";
        header("location:index.php");
    }

    if(isset($_GET['order']) && $_GET['order'] == "inc"){
        inc();
        header("location:recap.php");
    }

    if(isset($_GET['order']) && $_GET['order'] == "dec"){
        dec();
        header("location:recap.php");
    }
    

?>