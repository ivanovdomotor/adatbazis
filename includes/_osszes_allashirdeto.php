<?php
$allashirdetok_szama = "N.A.";

include "oci_conn_start.php";

$sql_text = "SELECT COUNT(*) FROM FELHASZNALO WHERE ALLASHIRDETO_ID = 1";
include 'oci_select.php';
if (isset($mymap[0])) {
    $allashirdetok_szama = $mymap[0]["COUNT(*)"];
}

echo $allashirdetok_szama;
?>