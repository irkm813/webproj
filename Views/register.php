<br>
<form action="register" method="post">
    <div class="col-md-12">
        <input class="form-control" type="email" name="email" placeholder="E-mail cím" required>
    </div>
    <div class="col-md-12">
        <input class="form-control" type="string" name="first_name" placeholder="Családneve" required>
    </div>
    <div class="col-md-12">
        <input class="form-control" type="string" name="last_name" placeholder="Utóneve" required>
    </div>

    <div class="col-md-12">
        <input class="form-control" type="password" name="password" placeholder="Jelszó" required>
    </div>
    <div class="col-md-12">
        <input class="form-control" type="password" name="password_confirmation" placeholder="Jelszó újra" required>
    </div>
    <div class="form-button md-6">
        <button id="submit" type="submit" class="btn btn-primary">Küldés</button>
    </div>
</form>