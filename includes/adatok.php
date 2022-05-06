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
<br/>
<?php
include "getfelhasznalo.php";
$felhasznalo = [];
if(isset($mymap)){
    $felhasznalo = $mymap;
}


$i = 0;

echo"
<h5>Az adatbázisban szereplő felhasználók:</h5>
";

foreach($felhasznalo as $row){
    echo"
        <div class='felhasznalok'>
            <h5>{$felhasznalo[$i]["FELHASZNALONEV"]}</h5>
            <?php if({$felhasznalo[$i]["IS_ADMIN"]} == 1) : ?>
                <h5> admin</h5>
            <?php else : ?>
                <h5> felhasználó</h5>
            <?php endif; ?>
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


