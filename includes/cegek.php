<?php
session_start();
?>

<html>
<head>
    <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
</head>

<body>
<?php include 'navbar.php';

if( !isset($_SESSION["isAllashirdeto"]) || $_SESSION["isAllashirdeto"] != 1){
    echo"Cégek hozzáadása csak álláshirdetők számára lehetséges!";
}

if( isset($_SESSION["isAllashirdeto"]) && $_SESSION["isAllashirdeto"] == 1){

    include "oci_conn_start.php";
    $sql_text="SELECT ID, NEV FROM CEG";
    include 'oci_select.php';
    include "oci_conn_stop.php";




    echo"
        </br>
        <div class='container'>
        <div class='row'>
        <div class='col-3'></div>
        <div class='col-6'>
        <h2>Új álláshirdetés létrehozása</h2>
        <form id='uj_allashirdetes' action='uj_hirdetes.php' method='post'>
            <select class='form-select' name='ceg'>
            <option selected>Válassz céget!</option>
      ";

    if(isset($mymap)){
        foreach($mymap as $row){
            echo "
            <option value='{$row['ID']}'>{$row['NEV']}</option>
            ";
        }
    }

    /*<option value=''>One</option>
      <option value=''>Two</option>
      <option value=''>Three</option>*/
//  munkarend, o jutatatasok, jelentkezsihatarido,
        echo"
            </select>
            
            <div class='input-group'>
                <span class='input-group-text'>Megnevezés</span>
                <textarea class='form-control' name='megnevezes' type='text' id='megnevezes' ></textarea>
            </div>
            <div class='input-group'>
                <span class='input-group-text'>Munkavégzés helye</span>
                <textarea class='form-control' name='munkavegzeshelye' type='text' id='munkavegzeshelye' ></textarea>
            </div>
            <div class='form-check form-switch'>
              <input class='form-check-input' type='checkbox' role='switch' id='switch' name='ido' checked>
              <label class='form-check-label' for='switch'>Határozatlan időre</label>
            </div>
            <div class='input-group'>
                <span class='input-group-text'>Munkarend fajtája</span>
                <textarea class='form-control' name='munkarend type='text' id='munkarend' ></textarea>
            </div>
            <div class='input-group'>
                <span class='input-group-text'>Munkafeladat leírás</span>
                <textarea class='form-control' name='munkafeladatleiras' type='text' id='munkafeladatleiras' ></textarea>
            </div>
            <div class='input-group'>
                <span class='input-group-text'>Kötelező elvárások</span>
                <textarea class='form-control' name='kotelvaras' type='text' id='kotelvaras' ></textarea>
            </div>
            <div class='input-group'>
                <span class='input-group-text'>Opcionális elvárások</span>
                <textarea class='form-control' name='opcelvaras' type='text' id='opcelvaras' ></textarea>
            </div>
            <div class='input-group'>
                <span class='input-group-text'>Juttatások</span>
                <textarea class='form-control' name='juttatasok' type='text' id='juttatasok' ></textarea>
            </div>
            <div>
                <label for='jelentkezesi'>Jelentkezési határidő:</label>
                <input class='form-control' type='date' id='jelentkezesi' name='jelentkezesi'>
            </div>
            <input type='submit' class='btn btn-primary' value='Létrehozás'>
            
        </form>";

    if(isset($_POST["tul_nagy_kep"])){
        echo "
            <div class='alert alert-danger' role='alert'>
            A feltölteni kívánt kép túl nagy!
            </div>
            ";
    }

    if(isset($_POST["nem_jo_format"])){
        echo "
            <div class='alert alert-danger' role='alert'>
            A feltölteni kívánt kép nem JPG, PNG, vagy JPEG formátumú!
            </div>
            ";
    }
        
        echo "<h2>Új cég létrehozása</h2>
        <form id='uj_ceg' action='uj_ceg.php' method='post' enctype='multipart/form-data'>
         <div class='input-group'>
                <span class='input-group-text'>Cég neve:</span>
                <textarea class='form-control' name='nev' type='text' id='nev' ></textarea>
          </div>
          
        
        
        </form>
        
        
        
        
        </div>
        <div class='col-3'></div>
        </div>
        </div>
    ";
}
?>

</body>
</html>