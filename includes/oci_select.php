<?php
//Szükség van egy $sql_textre, ami tartalmazza a select lekérdezést (pl. 'SELECT * FROM TEST')
//A lekérdezés után a kód a választ eltárolja az $mymapba

$mymap = [];
if(isset($sql_text)){

    $conn = oci_connect('ivanov', 'ivanov', 'localhost/XE');
    if(!$conn){
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }

    $stid = oci_parse($conn, $sql_text);
    $r = oci_execute($stid);

    $i = 0;
    while ($row = oci_fetch_array($stid, OCI_ASSOC+OCI_RETURN_NULLS)){
        $mymap[$i++] = $row;
    }

    oci_free_statement($stid);
    oci_close($conn);

    unset($sql_text);
}

?>