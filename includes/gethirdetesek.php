<?php

include "oci_conn_start.php";

$sql_text = "SELECT
    HIRDETES.ID AS ID, 
    HIRDETES.MEGNEVEZES,
    HIRDETES.MUNKAFELADATLEIRAS,
    CEG.NEV,
    CEG.FENYKEP_UT AS CEGKEP,
    ALLASHIRDETO.TITULUS,
    ALLASHIRDETO.VEZETEKNEV,
    ALLASHIRDETO.KERESZTNEV,
    ALLASHIRDETO.TELEFONSZAM,
    ALLASHIRDETO.EMAIL,
    ALLASHIRDETO.FENYKEP_UT AS ALLASHIRDETOKEP
    FROM HIRDETES 
    LEFT JOIN CEG ON HIRDETES.CEGID = CEG.ID
    LEFT JOIN ALLASHIRDETO ON HIRDETES.ALLASHIRDETOID = ALLASHIRDETO.ID
    WHERE HIRDETES.STATUS = 1";
include 'oci_select.php';


include "oci_conn_stop.php";
?>