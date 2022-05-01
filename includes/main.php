
<html>
    <head>
        <link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    </head>

    <body>
    <?php include 'navbar.php'; ?>

    <?php
    //id, megnevezes, munkavegzeshelye, ido, munkarend, munkafeladatleiras, kotelvaras, opcelvaras, juttatasok, jelentkezesihatarido, status, cegnev,
    // allashirdetonev, allashirdetotelszam, allashirdetoemail
    $pelda = [
            [1, "Takaritót keresünk!", "6720 Szeged, Minta u. 78/a", 1, "teljes",
                "A cégünk olyan szakembert keres, aki vállalja irodáink kitakarítását a hét minden napján",
                "8 általános","releváns gyakorlat",250000, "2022.07.01.",1, "Kalocsai révészek Bt.", "Minta Pista", "06-70-123-4567","minta@minta.hu"],
        [2, "Programozó fejlődő céghez", "5440 Kunszentmárton, Egyutca 2.", 0, "remote",
            "Fiatalos csapatba keresünk senior, legalább 10 év gyakorlattal rendelkező fullstack programozókat",
            "Typescript, Angular, Postgres, Bootstrap",550000, "2022.09.11",1, "Kisstílű Kft.", "Rakomány Ervin", "06-20-432-2345", "aszfalt@szotyolade.com"]
    ];
    echo "
    <div class='container'>
    ";
    $i = 0;
    foreach($pelda as $row){
        if($i % 3 == 0){
            echo"
        <div class='row'>
        ";
        }

        echo'
        <div class="col">
        <div class="card">
          <div class="card-body">
            <h5 class="card-title">KÁRTYA</h5>
            <p class="card-text">CONTENT</p>
            <a href="#" class="btn btn-primary">JELENTKEZÉS</a>
            </div>
        </div>
      </div>
        ';



        if($i % 3 == 0){
            echo"
        </div>
        ";
        }
        $i++;
    }
    echo "
    </div>
    ";

    ?>




    </body>
</html>


