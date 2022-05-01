
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
    ?>

    <div class="card" style="width: 25rem;">
        <img class="card-img-top" src=".../100px180/?text=Image cap" alt="Hirdető cég képe">
        <div class="card-body">
            <h5 class="card-title">Takaritót keresünk!</h5>
            <p class="card-text">A cégünk olyan szakembert keres, aki vállalja irodáink kitakarítását a hét minden napján</p>
        </div>
        <ul class="list-group list-group-flush">
            <li class="list-group-item">Munka helyszíne: 6720 Szeged, Minta u. 78/a</li>
            <li class="list-group-item">Határozott/határozatlan idő: 1</li>
            <li class="list-group-item">Munkarend: teljes</li>
            <li class="list-group-item">Kötelező elvárások: 8 általános</li>
            <li class="list-group-item">Opcionális elvárások:releváns gyakorlat</li>
            <li class="list-group-item">Fizetés: 250000</li>
            <li class="list-group-item">Jelentkezés vége: 2022.07.01.</li>
            <li class="list-group-item">Állás státusza: 1</li>
            <li class="list-group-item">Cég neve: Kalocsai révészek Bt.</li>
            <li class="list-group-item">Hirdető neve: Minta Pista</li>
            <li class="list-group-item">Telefonszám: 06-70-123-4567</li>
            <li class="list-group-item">Email-cím: minta@minta.hu</li>

        </ul>
        <div class="card-body">
            <a href="#" class="jelentkezes">Jelentkezés elküldése</a>
        </div>
    </div>

    </body>
</html>


