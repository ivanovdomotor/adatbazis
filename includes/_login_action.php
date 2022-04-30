<?php
session_start();
include 'oci_conn_start.php';


if(!isset($_POST["login"]) || !isset($_POST["password"])){
    header("Location: {$_SESSION["page"]} ");
    exit();
}
$sql_text = "SELECT JELSZO FROM FELHASZNALO WHERE FELHASZNALONEV = '{$_POST["login"]}'";

include 'oci_select.php';
if(isset($mymap[0])){
    if($mymap[0]["JELSZO"] == $_POST["password"]){

        echo "
<form action='main.php' method='post' id='sikeres_bejelentkezes' hidden>
<input name='login' value='{$_POST["login"]}'>

</form>";

    }else {

        echo "
<form action='login.php' method='post' id='hibas_jelszo' hidden>
<input name='hibas_jelszo' value='1'>

</form>";

    }
}else{
    echo "
<form action='login.php' method='post' id='hibas_felhasznalo' hidden>
<input name='hibas_felhasznalo' value='1'>

</form>";
}

$_SESSION["page"] = "_login_action.php"
?>

<script>
    if(document.getElementById('hibas_jelszo') !== null){
        document.getElementById('hibas_jelszo').submit();
    };

    if(document.getElementById('hibas_felhasznalo') !== null){
        document.getElementById('hibas_felhasznalo').submit();
    };

    if(document.getElementById('sikeres_bejelentkezes') !== null){
        document.getElementById('sikeres_bejelentkezes').submit();
    };

</script>

<?php
include 'oci_conn_stop.php';
?>
