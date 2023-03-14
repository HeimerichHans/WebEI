<?php   
    session_start();
    if (!isset($_SESSION["login"]))
    {
        header("Location: page00.php");
        exit();     
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <script src='js/jquery-3.6.4.js'></script>
    <script src='js/salade.js'></script>
    <title>Document</title>
</head>
<body class="container">
    <?php include "include/inc_nav.php";?>
    <h1> Page 01 </h1>

    <table class="table table-striped">
        <thead>
            <tr>
                <th> Article </th>
                <th> Prix </th>
                <th> Panier </th>
            </tr>
        </thead>
        <tbody>
        <?php
            $DB = new PDO("mysql:host=localhost;dbname=salade","root","");
            $resquet = "select nom,prix from salade";
            $req = $DB->prepare($resquet);
            $req->execute();
            $tabRes = $req->fetchAll();
            foreach($tabRes as $row => $link){
                echo '<tr>';
                echo    '<td>'.$link['nom'].'</td>';
                echo    '<td>'.$link['prix'].'</td>';
                echo    '<td>' ;
                echo        '<button onClick="ajoutSalade(\'' . $link["nom"] . '\',\'' . $link["prix"] . '\')" class=\'btn btn-primary\'>+</button>' ;
                echo    '</td>';
                echo '</tr>';
            }           
        ?>
        </tbody>
    </table>
    <div id="unMessage"></div>
</body>
</html>
