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
                    <tr><th>Összes felhasználó (adminok kivételével):</th><th><?php include "_osszes_felhasznalo.php";?></th></tr>
                    <tr><td>Ebből álláskereső:</td><td><?php echo "???" ?></td></tr>
                    <tr><td>Ebből álláshirdető:</td><td><?php echo "???" ?></td></tr>
                    <tr><th>Összes önéletrajz:</th><th><?php echo "???" ?></th></tr>
                    </tbody>



                </table>


            </div>
            <div class="col-1">
            </div>
        </div>
    </div>


    </body>
</html>