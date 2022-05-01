<?php

$cegek = [];

include "oci_conn_start.php";

$sql_text = "SELECT * FROM HIRDETES 
    LEFT JOIN CEG ON HIRDETES.CEGID = CEG.ID
    LEFT JOIN ALLASHIRDETO ON HIRDETES.ALLASHIRDETOID = ALLASHIRDETO.ID";
include 'oci_select.php';

if (isset($mymap)) {
    var_dump($mymap);
}


include "oci_conn_stop.php";
?>