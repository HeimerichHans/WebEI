<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <title>Document</title>
</head>
<body class="container">
    <?php include "include/inc_nav.php";?>

    <h1> Panier </h1>
    <table class="table table-striped">
        <thead>
            <tr>
                <th> Article </th>
                <th> Prix </th>
                <th> Quantité </th>
                <th> Prix Total </th>
            </tr>
        </thead>
        <tbody>
        <?php
            var_dump($_SESSION);
            if(isset($_SESSION["panier"])){
                $panier = $_SESSION["panier"];
                $quantity=1;
                foreach($panier as $row){
                    $tab[] = array_count_values($row);
                }
                var_dump($tab);
                foreach($panier as $row => $article){
                    echo '<tr>';
                    echo    '<td>'.$article['article'].'</td>';
                    echo    '<td>'.$article['prix'].'</td>';
                    echo    '<td>'.$quantity.'</td>';
                    echo    '<td>'.$quantity*$article['prix'].'</td>';
                    echo '</tr>';
                } 
            }
        ?>
      </tbody>
    </table>
    <a href="vider_panier.php"><button class='btn btn-danger'> Vider </button></a>
</body>
</html>