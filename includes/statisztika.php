<?php
session_start();
if($_SESSION["isAdmin"] != 1 && $_SESSION["isAllaskereso"] != 1 && $_SESSION["isAllashirdeto"] != 1){
    header("Location: login.php");
    exit;
}
?>

<html>
    <head>
        <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    </head>

    <body>
    <?php include 'navbar.php'; ?>

    <div class="container">
        <div class="row">
            <div class="col-1">
            </div>
            <div class="col-10">

                <table class="table table-light table-striped table-hover">
                    <thead>
                    <tr>
                        <th class="text-center" colspan="2">
                            Lekérdezések
                        </th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr><th>Felhasználók száma (adminok kivételével):</th><th><?php include "_osszes_felhasznalo.php";?></th></tr>
                    <tr><th>Álláskeresők száma:</th><th><?php include "_osszes_allaskereso.php";?></th></tr>
                    <tr><th>Álláshirdetők száma:</th><th><?php include "_osszes_allashirdeto.php";?></th></tr>
                    <tr><th>Önéletrajzok száma:</th><th><?php include "_osszes_oneletrajz.php";?></th></tr>
                    <tr><th>Pontos vagy bátor softskillt tartalmazó önéletrajzok:</th><th><?php include "softskillcv.php";?></th></tr>
                    <tr><th>Gyors és precíz softskillt tartalmazó önéletrajzok:</th><th><?php include "softskillcv2.php";?></th></tr>


                    </tbody>



                </table>


            </div>
            <div class="col-1">
            </div>
        </div>
    </div>



    <?php
    include "getfelhasznalo2.php";
    $felhasznalo = [];
    if(isset($mymap)){
        $felhasznalo = $mymap;
    }

    $i = 0;


    echo"
<h3>Az adatbázisban szereplő felhasználók:</h3>
";

    foreach($felhasznalo as $row){
        if ($felhasznalo[$i]["IS_ADMIN"] == 1){
            $adminstatus = "egy admin";
        } else {
            $adminstatus = "egy felhasznalo";
        }

        echo"
        <div class='felhasznalok'>
            <h5>{$felhasznalo[$i]["FELHASZNALONEV"]} $adminstatus</h5>
      </div>
        ";


        $i++;
    }
    echo "
    </div>
    ";


    ?>




    </body>
</html>