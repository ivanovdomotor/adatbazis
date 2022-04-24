<?php
//Szükség van egy sql insert lekérésre ($sql_text)

if(isset($sql_text)){

    $conn = oci_connect('ivanov', 'ivanov', 'localhost/XE');
    if(!$conn){
        $e = oci_error();
        trigger_error(htmlentities($e['message'], ENT_QUOTES), E_USER_ERROR);
    }

    $stid = oci_parse($conn, $sql_text);
    $r = oci_execute($stid);

    oci_free_statement($stid);
    oci_close($conn);

    unset($sql_text);
}

?>
