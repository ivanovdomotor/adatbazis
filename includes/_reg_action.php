<?php
session_start();

if(!isset($_POST["login"]) ||
    !isset($_POST["password"]) ||
    !isset($_POST["password2"])
    ){
    echo "
            <form action='reg.php' method='post' id='hiba' hidden>
            <input name='hiba' value='1'>
            
            </form>";
}else{

    include 'oci_conn_start.php';

    $sql_text = "SELECT ID FROM FELHASZNALO ORDER BY ID DESC";
    include 'oci_select.php';
    if (isset($mymap[0])) {
        $felhasznalo_id = intval($mymap[0]["ID"]) + 1;
    }else{
        $felhasznalo_id = 1;
    }
    $sql_text = "SELECT ID FROM FELHASZNALO WHERE FELHASZNALONEV = '{$_POST["login"]}'";
    include 'oci_select.php';
    if (isset($mymap[0])) {

        echo "
            <form action='reg.php' method='post' id='letezo_felhasznalo' hidden>
            <input name='letezo_felhasznalo' value='1'>
            
            </form>";

    }else{


        $target_dir = "../profilepics/";
        $fenykep_ut = $felhasznalo_id . "_pfpic_" . $_POST["login"];
        $target_file = $target_dir . $fenykep_ut;
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo(basename($_FILES["kep"]["name"]),PATHINFO_EXTENSION));

        if ($_FILES["kep"]["size"] > 500000) {
            echo "
            <form action='reg.php' method='post' id='tul_nagy_kep' hidden>
            <input name='tul_nagy_kep' value='1'>
            
            </form>";
            $uploadOk = 0;
        }

        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg") {
            echo "
            <form action='reg.php' method='post' id='nem_jo_format' hidden>
            <input name='nem_jo_format' value='1'>
            
            </form>";
            $uploadOk = 0;
        }

        if ($uploadOk == 1) {

            move_uploaded_file($_FILES["kep"]["tmp_name"], $target_file);
            if($_POST["isAllaskereso"] == 'yes'){

                $sql_text="SELECT ID FROM ALLASKERESO ORDER BY ID DESC";
                include 'oci_select.php';
                if(isset($mymap[0])){
                    $allaskereso_id = intval($mymap[0]["ID"])+1;
                }else{
                    $allaskereso_id = 1;
                }
                $allashirdeto_id = null;



            }else{

                $sql_text="SELECT ID FROM ALLASHIRDETO ORDER BY ID DESC";
                include 'oci_select.php';
                if(isset($mymap[0])){
                    $allashirdeto_id = intval($mymap[0]["ID"])+1;
                }else{
                    $allashirdeto_id = 1;
                }

                $allaskereso_id = null;

            }

            $sql_text = "INSERT INTO FELHASZNALO(
                        ID, 
                        FELHASZNALONEV, 
                        JELSZO, STATUS, 
                        IS_ADMIN, 
                        ALLASKERESO_ID, 
                        ALLASHIRDETO_ID)
                VALUES(
                       {$felhasznalo_id},
                       '{$_POST["login"]}',
                       '{$_POST["password"]}',
                       1,
                       0,
                       {$allaskereso_id},
                       {$allashirdeto_id})";

            if(isset($conn)){

                $stid = oci_parse($conn, $sql_text);

                oci_execute($stid);

                oci_free_statement($stid);
                unset($sql_text);
            }

            if($_POST["isAllaskereso"] == 'yes'){

                $sql_text="SELECT ID FROM ONELETRAJZ ORDER BY ID DESC";
                include 'oci_select.php';
                if(isset($mymap[0])){
                    $oneletrajz_id = intval($mymap[0]["ID"])+1;
                }else{
                    $oneletrajz_id = 1;
                }

                $sql_text = "INSERT INTO ALLASKERESO(
                        ID, 
                        TITULUS, 
                        VEZETEKNEV, 
                        KERESZTNEV, 
                        FENYKEP_UT, 
                        SZULIDO, 
                        LAKCIM, 
                        TARTHELY, 
                        RADIUS, 
                        ONELETRAJZ_ID, 
                        ROVID_LEIRAS,
                        EGYEB_INFO,
                        TELEFONSZAM,
                        EMAIL)
    VALUES(
           {$allaskereso_id}, 
           '{$_POST["titulus"]}',
           '{$_POST["vezeteknev"]}',
           '{$_POST["keresztnev"]}',
           '{$fenykep_ut}',
           {$_POST["szulido"]},
           '{$_POST["lakcim"]}',
           '{$_POST["tarthely"]}',
           50,
           {$oneletrajz_id}, 
           '',
           '{$_POST["telszam"]}',
           '{$_POST["email"]}')";

                if(isset($conn)){

                    $stid = oci_parse($conn, $sql_text);

                    oci_execute($stid);

                    oci_free_statement($stid);
                    unset($sql_text);
                }
            }else{

                $sql_text = "INSERT INTO ALLASKERESO(
                        ID, 
                        TITULUS, 
                        VEZETEKNEV, 
                        KERESZTNEV, 
                        FENYKEP_UT, 
                        TELEFONSZAM,
                        EMAIL)
    VALUES(
           {$allaskereso_id}, 
           '{$_POST["titulus"]}',
           '{$_POST["vezeteknev"]}',
           '{$_POST["keresztnev"]}',
           '{$fenykep_ut}',
           '{$_POST["telszam"]}',
           '{$_POST["email"]}')";

                if(isset($conn)){

                    $stid = oci_parse($conn, $sql_text);

                    oci_execute($stid);

                    oci_free_statement($stid);
                    unset($sql_text);
                }
            }
        }
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
include 'oci_conn_stop.php';
?>
<script>

    function mysubmit(string){
        if(document.getElementById(string) !== null){
            document.getElementById(string).submit();
        }
    }

    mysubmit('hiba');
    mysubmit('letezo_felhasznalo');
    mysubmit('tul_nagy_kep');
    mysubmit('nem_jo_format');

</script>

