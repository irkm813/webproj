<?php
include "raw-data.php";
if (isset($_GET["error"])) {?>
<div class="alert alert-<?=$registrationErrors[$_GET["error"]]["style"]?>" role="alert">
    <?=$registrationErrors[$_GET["error"]]["text"]?>
</div>
<?php } ?>

<div class="news-article">
    <h2>Regisztáció</h2>
    <form action="register" method="post">
        <div class="form-row">
        <div class="form-group col-md-12">
                <input class="form-control" type="string" name="username" placeholder="Felhasználónév" required>
            </div>
            <div class="form-group col-md-12">
                <input class="form-control" type="string" name="first_name" placeholder="Családneve" required>
            </div>
            <div class="form-group col-md-12">
                <input class="form-control" type="string" name="last_name" placeholder="Utóneve" required>
            </div>

            <div class="form-group col-md-12">
                <input class="form-control" type="password" name="password" placeholder="Jelszó" required>
            </div>
            <div class="form-group col-md-12">
                <input class="form-control" type="password" name="password_confirmation" placeholder="Jelszó újra" required>
            </div>
            <div class="form-button md-6">
                <button id="submit" type="submit" class="btn btn-primary">Küldés</button>
            </div>
        </div>
    </form>
</div>