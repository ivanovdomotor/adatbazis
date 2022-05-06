<?php
session_start();
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

                <table class="table table-warning table-striped table-hover">
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


                    </tbody>



                </table>


            </div>
            <div class="col-1">
            </div>
        </div>
    </div>


    </body>
</html>