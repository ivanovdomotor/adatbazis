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
if(!isset($felh)){exit();}

    echo "
</br>
<div class='container'>
<div class='row'>
<div class='col-3'></div>
<div class='col-6'>
<h1>Saját adatok módosítása</h1>
<h5>Admin</h5>
<form>";


foreach($felh as $key=>$value){
    echo"

    <div class='input-group'>
        <span class='input-group-text'>{$key}</span>
        <textarea class='form-control' name='{$key}' type='text' id='{$key}'>{$value}</textarea>
    </div>
    ";
}

    /*<label for='felhnev'>Felhasználónév</label>
    <input type='text' value='{$felh['FELHASZNALONEV']}' id='felhnev'>
    <label for='felhnev'>Jelszó</label>
    <input type='text' value='{$felh['JELSZO']}' id='felhnev'>*/
    
echo"</form>

</div>
<div class='col-3'></div>
</div>
</div>";



?>




</body>
</html>


