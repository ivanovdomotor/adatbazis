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

echo "
<h3>Te .... felhasználó vagy. Az adataid: </h3>
<br>

";


echo"
<h3>Az adatbázisban szereplő egyéb felhasználók:</h3>
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


