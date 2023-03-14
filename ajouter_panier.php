<?php
    if (!isset($_GET["article"]) || !isset($_GET["prix"])) 
    {
        die("erreur...");
    }

    session_start();

    if (!isset($_SESSION["panier"]))
    {
        $_SESSION["panier"]=[];
    }


    // préparation de la nouvelle ligne à ajouter au panier
    $lignePanier=[];
    $lignePanier["article"] =  $_GET["article"];
    $lignePanier["prix"] = $_GET["prix"];

    // ajout de la nouvelle ligne
    $panier = $_SESSION["panier"];  
    $panier[]=$lignePanier;         
    $_SESSION["panier"] = $panier;  

    echo "ok";

