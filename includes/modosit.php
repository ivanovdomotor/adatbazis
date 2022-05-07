<?php
session_start();

include "oci_conn_start.php";

var_dump($_POST);
echo "<br><br>";
var_dump($_SESSION);
echo "<br><br>";

if($_SESSION["isAdmin"] == 1){

    $sql_text = "SELECT
    ID
    FROM FELHASZNALO
    WHERE FELHASZNALONEV = '{$_POST['FELHASZNALONEV']}'";
    include 'oci_select.php';
    $sql_text = "";
    if($_POST['isChange'] != 0){
        if(isset($mymap) && count($mymap) != 0){
            if ($mymap[0]['ID'] == $_SESSION['felhasznalo_id']){
                echo 'nincs változás!';
            }else{
                echo 'már van ilyen név!';
            }
        }else{
            $sql_text="UPDATE FELHASZNALO
            SET FELHASZNALONEV = {$_POST['FELHASZNALONEV']} 
            WHERE ID = {$_SESSION['felhasznalo_id']}";
        }
    }else{
        $sql_text="DELETE FROM FELHASZNALO WHERE ID = {$_SESSION['felhasznalo_id']}";
    }



}elseif( !isset($_SESSION["isAllashirdeto"]) || $_SESSION["isAllashirdeto"] != 1){

    if($_POST['isChange'] != 0) {
        $sql_text = "UPDATE ALLASKERESO SET";
            foreach($_POST as $key=>$value){
                if($key != 'isChange' && $key != 'RADIUS'){
                    $sql_text .= " {$key} = '{$value}',";
                }elseif($key == 'RADIUS'){
                    $sql_text .= " {$key} = {$value},";
                }
            }
            substr_replace($sql_text ,"", -1);
            $sql_text .= " WHERE ID = {$_SESSION['AllaskeresoID']}";
    }else{
        $sql_text="DELETE FROM FELHASZNALO WHERE ID = {$_SESSION['felhasznalo_id']};";
        $sql_text.=" DELETE FROM ALLASKERESO WHERE ID = {$_SESSION['AllaskeresoID']}";
    }

}else{

    if($_POST['isChange'] != 0) {
        $sql_text = "UPDATE ALLASHIRDETO SET";
        foreach($_POST as $key=>$value){
            if($key != 'isChange'){
                $sql_text .= " {$key} = '{$value}',";
            }
        }
        substr_replace($sql_text ,"", -1);
        $sql_text .= " WHERE ID = {$_SESSION['AllashirdetoID']}";
    }else{
        $sql_text="DELETE FROM FELHASZNALO WHERE ID = {$_SESSION['felhasznalo_id']};";
        $sql_text.=" DELETE FROM ALLASHIRDETO WHERE ID = {$_SESSION['AllashirdetoID']}";
    }
}
echo $sql_text;
?>