<?php
$allaskeresok_szama = "N.A.";

include "oci_conn_start.php";

$sql_text = "SELECT COUNT(*) FROM FELHASZNALO WHERE ALLASKERESO_ID = 1";
include 'oci_select.php';
if (isset($mymap[0])) {
    $allaskeresok_szama = $mymap[0]["COUNT(*)"];
}

echo $allaskeresok_szama;
?>