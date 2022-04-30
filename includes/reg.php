<?php
session_start();
$_SESSION["page"] = "reg.php";


?>

<link href="../css/reg.css" rel="stylesheet" >
<link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div class="wrapper fadeInDown">
    <div id="formContent">
        <!-- Icon -->
        <div class="fadeIn first">
            <img src="../icons/person-plus.svg" id="icon" alt="User Icon" />
        </div>

        <!-- Login Form -->
        <div class="form-check">
            <input class="form-check-input" type="radio" name="isAllaskereso" id="exampleRadios1" value="yes" onchange="show(1)" checked>
            <label class="form-check-label" for="exampleRadios1">
                Álláskereső
            </label>
        </div>
        <div class="form-check">
            <input class="form-check-input" type="radio" name="isAllaskereso" id="exampleRadios2" value="no" onchange="show(0)">
            <label class="form-check-label" for="exampleRadios2">
                Álláshirdető
            </label>
        </div>


        <!--//álláshirdető -->
        <div id="form-b" hidden>
        <form method = "post" action="_reg_action.php" enctype="multipart/form-data">
            <fieldset>
                <label for="felhasznalo">Felhasználónév:</label>
                <input type="text" id="login-b" class="fadeIn second" name="login" tabindex="1" placeholder="Felhasználónév" required>
                <br/>
                <label for="password">Jelszó:</label>
                <input type="password" id="password-b" class="fadeIn third" name="password" tabindex="2" placeholder="*********" required>
                <br/>
                <label for="password2">Jelszó ismét:</label>
                <input type="password" id="password2-b" class="fadeIn third" name="password2" tabindex="3" placeholder="*********" required>
                <br/>
                <label for="titulus">Titulus:</label>
                <input required type="text" id="titulus-b" name="nev" maxlength="50" tabindex="4" placeholder="Dr.">
                <br/>
                <label for="vezetéknév">Vezetéknév:</label>
                <input required type="text" id="vezeteknev-b" name="nev" maxlength="50" tabindex="5" placeholder="Kovács">
                <br/>
                <label for="keresztnév">Keresztnév név:</label>
                <input required type="text" id="keresztnev-b" name="nev" maxlength="50" tabindex="6" placeholder="János">
                <br/>
                <label for="kep">Profilkép: </label>
                <br/>
                <input type="file" id="kep-b" name="kep" accept="image/*" tabindex="7"/>
                <br/>
                <label for="telszam">Telefonszám:</label>
                <input required type="tel" id="telszam-b" name="telszam" maxlength="11" tabindex="8" placeholder="06701234567"  >
                <br/>
                <label required for="email">E-mail cím:</label>
                <input required type="email" id="email-b" name="email" tabindex="9" placeholder="valami@valami.hu" />
                <br/>
            </fieldset>

            <br/>


            <input type="reset" name="reset-btn" value="Adatok törlése" tabindex="10"/>
            <input type="button" id="submit1" onclick="jelszoellenorzeshirdeto(this)" name="submit-btn" value="Regisztráció" tabindex="11"/>
            </form>
        </div>
        <!--//álláskereső:-->
        <div id="form-a" hidden>
        <form method = "post" action="_reg_action.php" enctype="multipart/form-data">
            <fieldset>
                <label for="felhasznalo">Felhasználónév:</label>
                <input type="text" id="login" class="fadeIn second" name="login" tabindex="1" placeholder="Felhasználónév" required>
                <br/>
                <label for="password">Jelszó:</label>
                <input type="password" id="password" class="fadeIn third" name="password" tabindex="2" placeholder="*********" required >
                <br/>
                <label for="password2">Jelszó ismét:</label>
                <input type="password" id="password2" class="fadeIn third" name="password2" tabindex="3" placeholder="*********" required>
                <br/>
                <label for="titulus">Titulus:</label>
                <input required type="text" id="titulus" name="nev" maxlength="50" tabindex="4" placeholder="Dr.">
                <br/>
                <label for="vezetéknév">Vezetéknév:</label>
                <input required type="text" id="vezeteknev" name="nev" maxlength="50" tabindex="5" placeholder="Kovács">
                <br/>
                <label for="keresztnév">Keresztnév név:</label>
                <input required type="text" id="keresztnev" name="nev" maxlength="50" tabindex="6" placeholder="János">
                <br/>
                <label for="kep">Profilkép: </label>
                <br/>
                <input type="file" id="kep" name="kep" accept="image/*" tabindex="7"/>
                <br/>
                <label for="birthday">Születési idő:</label>
                <input type="date" id="birthday" name="birthday" tabindex="8">
                <br/>
                <label for="lakcim">Lakcím:</label>
                <input required type="text" id="lakcim" name="lakcim" maxlength="50" tabindex="9" placeholder="Település, Utca neve, házszám">
                <br/>
                <label for="tarthely">Tartózkodási hely</label>
                <input required type="text" id="tarthely" name="tarthely" maxlength="50" tabindex="10" placeholder="Település, Utca neve, házszám">
                <br/>
                <label for="telszam">Telefonszám:</label>
                <input required type="tel" id="telszam" name="telszam" maxlength="14" placeholder="06-70-123-4567" tabindex="11" pattern="[0-9]{2}-[0-9]{2}-[0-9]{3}-[0-9]{4}">
                <br/>
                <label required for="email">E-mail cím:</label>
                <input required type="email" id="email"  name="email" tabindex="12" placeholder="valami@valami.hu" />
                <br/>
            </fieldset>

            <br/>

            <input type="reset" name="reset-btn" value="Adatok törlése" tabindex="13"/>
            <input type="button" id="submit2" onclick="jelszoellenorzeskereso(this)" name="submit-btn" value="Regisztráció" tabindex="14"/>
        </form>
        </div>
    </div>
</div>


<script type="text/javascript">


    //button
    function show(x){
        if(x==0){
            document.getElementById("form-a").hidden = true;
            document.getElementById("form-b").hidden = false;
        }else{
            document.getElementById("form-a").hidden = false;
            document.getElementById("form-b").hidden = true;
        }
    }

    show(1);


    //jelszocheck allashirdeto
        function jelszoellenorzeshirdeto(jelszocheck) {
        var jelszo = document.getElementById("password-b").value
        var jelszoismetles = document.getElementById("password2-b").value
        if (jelszo !== jelszoismetles) {
        window.alert("A jelszavak nem egyeznek!")
    } else {
        window.alert("TEST: A JELSZAVAK EGYEZNEK")
            document.getElementById('form-b').submit();
        }

    }

    //jelszocheck allaskereso
    function jelszoellenorzeskereso() {
        var jelszo = document.getElementById("password").value
        var jelszoismetles = document.getElementById("password2").value
        if (jelszo !== jelszoismetles) {
            window.alert("A jelszavak nem egyeznek!")
        } else {
            window.alert("TEST: A JELSZAVAK EGYEZNEK")
            document.getElementById('form-a').submit();
        }
    }



</script>