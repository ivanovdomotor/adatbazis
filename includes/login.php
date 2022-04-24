<?php
session_start();
$_SESSION["page"] = "login.php";

?>

<link href="../css/login.css" rel="stylesheet" >
<link href="../css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<div class="wrapper fadeInDown">
  <div id="formContent">
    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <img src="../icons/door-open.svg" id="icon" alt="User Icon" />
    </div>

    <!-- Login Form -->
    <form action="_login_action.php" method="post" >
        <?php
        if(isset($_POST["hibas_jelszo"])){
            echo "
            <div class='alert alert-danger' role='alert'>
              A megadott jelszó hibás!
            </div>
            ";
        }
        ?>
    <form action="_login_action.php" method="post" >
        <?php
        if(isset($_POST["hibas_felhasznalo"])){
            echo "
            <div class='alert alert-danger' role='alert'>
            A megadott felhasználó nem létezik!
            </div>
            ";
        }
        ?>
        <input type="text" id="login" class="fadeIn second" name="login" placeholder="Felhasználónév" required>
        <input type="password" id="password" class="fadeIn third" name="password" placeholder="Jelszó" required>
        <div class="btn-group">
            <button class="btn alert-info" type="submit" class="fadeIn fourth" value="Bejelentkezés">Bejelentkezés</button>
            <button class="btn alert-success" type="button" a href="reg.php" form="register" value="Regisztráció">Regisztráció</button>
        </div>



    </form>


  </div>
</div>