<?php
    session_start();

    // simule une connexion réussie pour le login passé en paramètre

    $_SESSION["login"] = $_GET["login"];

    echo "Connecté en tant que ".$_GET["login"];