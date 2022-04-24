<?php
session_start();
if(!isset($_POST["login"]) || !isset($_POST["password"])){
    header("Location: {$_SESSION["page"]} ");
    exit();
}
$sql_text = "SELECT JELSZO FROM FELHASZNALO WHERE FELHASZNALONEV = '{$_POST["login"]}'";

include 'oci_select.php';
if(isset($mymap[0])){
    if($mymap[0]["JELSZO"] == $_POST["password"]){

        echo "sikeres bejelentkezés!";

    }else {

        echo "
<form action='login.php' method='post' id='hibas_jelszo'>
<input name='hibas_jelszo' value='1'>

</form>";

    }
}else{
    echo "
<form action='login.php' method='post' id='hibas_felhasznalo'>
<input name='hibas_felhasznalo' value='1'>

</form>";
}

$_SESSION["page"] = "_login_action.php"
?>

<script>
    document.getElementById('hibas_jelszo').submit();
</script>
<script>
    document.getElementById('hibas_felhasznalo').submit();
</script>
