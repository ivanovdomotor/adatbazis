<?php
session_start();

if(!isset($_POST["login"]) ||
    !isset($_POST["password"]) ||
    !isset($_POST["password2"])
    ){
    echo "NEM JÓ";
}

include 'oci_conn_start.php';


$sql_text = "SELECT ID FROM FELHASZNALO ORDER BY ID DESC";
include 'oci_select.php';
if (isset($mymap[0])) {
    $felhasznalo_id = intval($mymap[0]["ID"]) + 1;
}

if(true){ //$_POST["isAllaskereso"] == yes

    $sql_text="SELECT ID FROM ALLASKERESO ORDER BY ID DESC";
    include 'oci_select.php';
    if(isset($mymap[0])){
        $allaskereso_id = intval($mymap[0]["ID"])+1;
    }else{
        $allaskereso_id = 1;
    }

    $sql_text = "INSERT INTO FELHASZNALO(ID, FELHASZNALONEV, JELSZO, STATUS, IS_ADMIN, ALLASKERESO_ID, ALLASHIRDETO_ID)
    VALUES {$felhasznalo_id}, {$_POST["login"]}, {$_POST["password"]}, 1, 0, {$allaskereso_id}, null";

    if(isset($conn)){

        $stid = oci_parse($conn, $sql_text);

        oci_execute($stid);

        oci_free_statement($stid);
        unset($sql_text);
    }

}else{

    $sql_text="SELECT ID FROM ALLASHIRDETO ORDER BY ID DESC";
    include 'oci_select.php';
    if(isset($mymap[0])){
        $allaskereso_id = intval($mymap[0]["ID"])+1;
    }else{
        $allaskereso_id = 1;
    }

}


/*

    $sql_text = "INSERT INTO FELHASZNALO(ID,FELHASZNALONEV, JELSZO, ALLASKERESO_ID)
    VALUES '{$felhasznalo_id}' '{$_POST['login']}', '{$_POST['password']}', '{$allaskereso_id}'";
    include 'oci_insert.php';

    $sql_text="SELECT ID FROM ONELETRAJZ ORDER BY ID DESC";
    include 'oci_select.php';
    if(isset($mymap[0])){
        $oneletrajz_id = intval($mymap[0]["ID"])+1;
    }

    $sql_text = "INSERT INTO ALLASKERESO(ID,TITULUS, VEZETEKNEV, KERESZTNEV,FENYKEP_UT,SZULIDO,LAKCIM,TARTHELY,REDIUS,ONELETRAJZ_ID,ROVID_LEIRAS, TELEFONSZAM, EMAIL)
    VALUES '{$allaskereso_id}' '{$_POST['titulus']}', '{$_POST['vezeteknev']}', '{$_POST['keresztnev']}',, '{$_POST['fenykep_ut']}',
     '{$_POST['szulido']}', '{$_POST['lakcim']}', '{$_POST['tarthely']}', '{$_POST['radius']}', '{$oneletrajz_id}', '{$_POST['rovid_leiras']}',
        '{$_POST['telefonszam']}', '{$_POST['email']}'";
    include 'oci_insert.php';
*/
?>
