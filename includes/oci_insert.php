<?php
//Szükség van egy sql insert lekérésre ($sql_text)
//Előtte mindig meg kell hívni az oci_conn_start.php-t, ami megnyitja a kapcsolatot
//Ha már nem hívjuk meg a php lekérdezésben többször, akkor hívjuk meg az oci_conn_stop.php-t, ami lezárja a kapcsolatot

if(isset($sql_text) && isset($conn)){

    $stid = oci_parse($conn, $sql_text);
    $r = oci_execute($stid);

    oci_free_statement($stid);

    unset($sql_text);
}

?>
