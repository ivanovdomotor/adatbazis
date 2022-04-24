<?php
session_start();
$_SESSION["page"] = "reg.php";


?>

<link href="../css/login.css" rel="stylesheet" >
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
        <form method = "post" action="regisztracio.php" enctype="multipart/form-data">
            <fieldset>
                <label for="felhasznalo">Felhasználónév:</label>
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Felhasználónév" required>
                <br/>
                <label for="password">Jelszó:</label>
                <input type="password" id="password1" class="fadeIn third" name="password" placeholder="*********" oninput="checkpasswords(this)" required>
                <br/>
                <label for="password2">Jelszó ismét:</label>
                <input type="password" id="password2" class="fadeIn third" name="password2" placeholder="*********" required>
                <br/>
                <label for="titulus">Titulus:</label>
                <input required type="text" id="titulus" name="nev" maxlength="50" tabindex="1" placeholder="Dr.">
                <br/>
                <label for="vezetéknév">Vezetéknév:</label>
                <input required type="text" id="vezeteknev" name="nev" maxlength="50" tabindex="1" placeholder="Kovács">
                <br/>
                <label for="keresztnév">Keresztnév név:</label>
                <input required type="text" id="keresztnev" name="nev" maxlength="50" tabindex="1" placeholder="János">
                <br/>
                <label for="kep">Profilkép: </label>
                <br/>
                <input type="file" id="kep" name="kep" accept="image/*" tabindex="7"/>
                <br/>
                <label for="telszam">Telefonszám:</label>
                <input required type="tel" id="telszam" name="telszam" maxlength="11" placeholder="06701234567" tabindex="5" >
                <br/>
                <label required for="email">E-mail cím:</label>
                <input required type="email" id="email" name="email" tabindex="6" placeholder="valami@valami.hu" />
                <br/>
            </fieldset>

            <br/>

            <input type="reset" name="reset-btn" value="Adatok törlése" tabindex="9"/>
            <input type="submit" id="submit1" name="submit-btn" value="Regisztráció" tabindex="10"/>
            </form>
        </div>
        <!--//álláskereső:-->
        <div id="form-a" hidden>
        <form method = "post" action="regisztracio.php" enctype="multipart/form-data">
            <fieldset>
                <label for="felhasznalo">Felhasználónév:</label>
                <input type="text" id="login" class="fadeIn second" name="login" placeholder="Felhasználónév" required>
                <br/>
                <label for="password">Jelszó:</label>
                <input type="password" id="password3" class="fadeIn third" name="password" placeholder="*********" oninput="checkpasswords(this)" required >
                <br/>
                <label for="password2">Jelszó ismét:</label>
                <input type="password" id="password4" class="fadeIn third" name="password2" placeholder="*********" required>
                <br/>
                <label for="titulus">Titulus:</label>
                <input required type="text" id="titulus" name="nev" maxlength="50" tabindex="1" placeholder="Dr.">
                <br/>
                <label for="vezetéknév">Vezetéknév:</label>
                <input required type="text" id="vezeteknev" name="nev" maxlength="50" tabindex="1" placeholder="Kovács">
                <br/>
                <label for="keresztnév">Keresztnév név:</label>
                <input required type="text" id="keresztnev" name="nev" maxlength="50" tabindex="1" placeholder="János">
                <br/>
                <label for="kep">Profilkép: </label>
                <br/>
                <input type="file" id="kep" name="kep" accept="image/*" tabindex="7"/>
                <br/>
                <label for="birthday">Születési idő:</label>
                <input type="date" id="birthday" name="birthday">
                <br/>
                <label for="lakcim">Lakcím:</label>
                <input required type="text" id="lakcim" name="lakcim" maxlength="50" tabindex="1" placeholder="Település, Utca neve, házszám">
                <br/>
                <label for="tarthely">Tartózkodási hely</label>
                <input required type="text" id="tarthely" name="tarthely" maxlength="50" tabindex="1" placeholder="sxaxas">
                <br/>
                <label for="telszam">Telefonszám:</label>
                <input required type="tel" id="telszam" name="telszam" maxlength="11" placeholder="06701234567" tabindex="5" >
                <br/>
                <label required for="email">E-mail cím:</label>
                <input required type="email" id="email" name="email" tabindex="6" placeholder="valami@valami.hu" />
                <br/>
            </fieldset>

            <br/>

            <input type="reset" name="reset-btn" value="Adatok törlése" tabindex="9"/>
            <input type="submit" id="submit2" name="submit-btn" value="Regisztráció" tabindex="10"/>
        </form>
        </div>
    </div>
</div>

<!-- JS script a radio buttonokre-->
<script type="text/javascript">

    function show(x){
        if(x==0){
            document.getElementById("form-a").hidden = true;
            document.getElementById("form-b").hidden = false;
        }else{
            document.getElementById("form-a").hidden = false;
            document.getElementById("form-b").hidden = true;
        }
    }

    function checkpasswords(element){
        if(element.id === "password1" && document.getElementById("form-b").hidden === false){
            if(element.value !== document.getElementById("password2").value){
                document.getElementById("submit1").disabled = true;
                element.setAttribute("class", "fadeIn third bg-danger");
            }else{
                document.getElementById("submit1").disabled = false;
                element.setAttribute("class", "fadeIn third");
            }
        }else{
            if(element.value !== document.getElementById("password4").value){
                document.getElementById("submit2").disabled = true;
                element.setAttribute("class", "fadeIn third bg-danger");
            }else{
                document.getElementById("submit2").disabled = false;
                element.setAttribute("class", "fadeIn third");
            }
        }

    }

</script>