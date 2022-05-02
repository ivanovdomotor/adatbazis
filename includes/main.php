<?php
session_start();
?>
<html>
    <head>
        <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    </head>

    <body>
    <?php include 'navbar.php'; ?>
    <br/>
    <?php
    include "gethirdetesek.php";
    $cegek = [];
    if(isset($mymap)){
        $cegek = $mymap;
    }

    echo "
    <div class='container'>
    ";
    $i = 0;
    foreach($cegek as $row){
        if($i % 3 == 0){
            echo"
        <div class='row'>
        ";
        }

        echo"
        <div class='col'>
        <div class='card' style='width: 33%;'>
          <div class='card-body'>
            <img src='../ceglogos/{$cegek[$i]["CEGKEP"]}' class='card-img-top'>
            <h5 class='card-title'>{$cegek[$i]["MEGNEVEZES"]}</h5>
            <p class='card-text'>{$cegek[$i]["MUNKAFELADATLEIRAS"]}</p>
            <p class='card-text'>
            <img height='14' class='' src='../profilepics/{$cegek[$i]["ALLASHIRDETOKEP"]}' style='border-radius: 50%;' >
            <small class='text-muted'>{$cegek[$i]["TITULUS"]} {$cegek[$i]["VEZETEKNEV"]} {$cegek[$i]["KERESZTNEV"]}</small>
            </br>
            <small class='text-muted'>tel: {$cegek[$i]["TELEFONSZAM"]}</br> <a>email: {$cegek[$i]["EMAIL"]}</a></small>
            </p>
            
            <a href='#' class='btn btn-primary'>Jelentkezés</a>
            
            ";

        if($_SESSION["isAdmin"] == 1){
            echo "
            <a href='#' class='btn btn-warning'>Inaktiválás</a>
            ";
        }
        echo"
          </div>
        </div>
      </div>
        ";



        if($i % 3 == 2){
            echo"
        </div>
        ";
        }
        $i++;
    }
    echo "
    </div>
    ";

    ?>




    </body>
</html>


