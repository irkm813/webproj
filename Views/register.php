<?php
include "raw-data.php";
if (isset($_GET["error"])) {?>
<div class="alert alert-<?=$registrationErrors[$_GET["error"]]["style"]?>" role="alert">
    <?=$registrationErrors[$_GET["error"]]["text"]?>
</div>
<?php } ?>

<div class="news-article">
    <h2>Regisztáció</h2>
    <form name="register-form" action="register" method="post" onsubmit="return validateRegisterForm()">
        <div class="form-row">
        <div class="form-group col-md-12" id="username_container">
                <input class="form-control" type="string" name="username" placeholder="Felhasználónév" >
            </div>
            <div class="form-group col-md-12" id="first_name_container">
                <input class="form-control" type="string" name="first_name" placeholder="Családneve" >
            </div>
            <div class="form-group col-md-12" id="last_name_container">
                <input class="form-control" type="string" name="last_name" placeholder="Utóneve" >
            </div>

            <div class="form-group col-md-12 " id="password_container">
                <input class="form-control" type="password" name="password" placeholder="Jelszó" >
            </div>
            <div class="form-group col-md-12" id="password_confirmation_container">
                <input class="form-control" type="password" name="password_confirmation" placeholder="Jelszó újra" required>
            </div>
            <div class="form-button md-6">
                <button id="submit" type="submit" class="btn btn-primary">Küldés</button>
            </div>
        </div>
    </form>
</div>