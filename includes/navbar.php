<?php
session_start();
?>

<nav class="navbar navbar-expand navbar-light" style="background-color: #e3f2fd;">
    <div class="container-fluid">
        <span class="navbar-brand mb-0 h1">
            <img src="../icons/briefcase-fill.svg" >
        </span>
        <span class="navbar-brand mb-0 h1">Álláskereső</span>
        <div class="collapse navbar-collapse" id="navbarNav">

            <ul class="navbar-nav">
                <li class="nav-item">
                    <a id="main" class="nav-link active alert-primary" href="main.php">Hirdetések</a>
                </li>
                <li class="nav-item">
                    <a id="cegek" class="nav-link" href="cegek.php">Cégek</a>
                </li>
                <li class="nav-item">
                    <a id="adatok" class="nav-link" href="adatok.php">Adatok</a>
                </li>
                <li class="nav-item">
                    <a id="statisztika" class="nav-link" href="statisztika.php">Statisztika</a>
                </li>
            </ul>

        </div>
    </div>
</nav>

<script>
    function resetPages(){
        document.getElementById("main").setAttribute("class","nav-link");
        document.getElementById("cegek").setAttribute("class","nav-link");
        document.getElementById("adatok").setAttribute("class","nav-link");
        document.getElementById("statisztika").setAttribute("class","nav-link");
    }

    function whatPageIsIt(){
        resetPages();
        let words = window.location.href.split("/");
        let word = words[words.length-1].split(".")[0];
        document.getElementById(word).setAttribute("class","nav-link active alert-primary");
    }

    whatPageIsIt();

</script>