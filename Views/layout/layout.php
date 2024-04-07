<?php
include "raw-data.php";
?>
<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Csábító Tea Party</title>
</head>

<body>
    <div class="container all-content">
        <div class="row top-bar">
            <div class="col-flex-12 col-md-8 menu-area">
                <div class="col-12 navbar navbar-expand-lg navbar-dark menu-bar">

                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>

                    <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                        <div class="navbar-nav">

                            <div class="row login-window-small col-12 d-block d-md-none ">
                                <p>Bejelentkezve mint: <span>Maláj József</span></p>
                                <div class="form-items">
                                    <form action="login" method="POST">
                                        <div class="col-md-12">
                                            <input class="form-control" type="email" name="e-mail" placeholder="E-mail cím" required>
                                        </div>
                                        <div class="col-md-12">
                                            <input class="form-control" type="password" name="password" placeholder="Jelszó" required>
                                        </div>
                                        <div class="form-button md-12">
                                            <button id="submit" type="submit" class="btn btn-primary">Küldés</button>
                                        </div>
                                    </form>
                                </div>
                            </div>
                            <?php
                            if ($menuItems)
                                foreach ($menuItems as $menuItem) { ?>
                                <a class="nav-item nav-link" href="<?= $menuItem['href'] ?>">
                                    <?= $menuItem['icon'] ?>
                                    <p><?= $menuItem['Name'] ?></p>
                                </a>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 d-none d-md-block logo-container">
                <a href="https://www.kutyamenhely.info/">
                    <img src="/Content/Images/logo_title3.jpg" alt="">
                </a>
            </div>
        </div>
        <div class="row content-area">
            <div class="col-12 col-md-8 news-column">
                <div class="inner-news-column container overflow-auto" id="please-scroll">
                    {{content}}
                </div>
            </div>
            <div class="col-4 d-none d-md-block side-bar">
                <div class="row login-window">
                    <?php if (isset($_SESSION["user"])) { ?>
                        <p>Bejelentkezve mint: <span><?= $_SESSION["user"]["first_name"] ?> <?= $_SESSION["user"]["last_name"] ?></span></p>
                        <form action="/logout" method="post">
                            <button id="submit" type="submit" class="btn btn-primary">Kijelentkezés</button>
                        </form>
                    <?php
                    } else {   ?>
                        <div class="form-items">
                            <h2>Bejelentkezés</h2>
                            <form action="login" method="post">
                                <div class="col-md-12">
                                    <input class="form-control" type="email" name="email" placeholder="E-mail cím" required>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="password" name="password" placeholder="Jelszó" required>
                                </div>
                                <div class="form-button md-12">
                                    <button id="submit" type="submit" class="btn btn-primary">Bejelentkezés</button>
                                </div>
                            </form>
                        </div>
                    <?php
                    }
                    ?>
                </div>

                <div class="row info-area">
                    <?php
                    if ($sideBarData) {
                        foreach ($sideBarData as $sideBarElement) { ?>
                            <div class="row">
                                <div class="row col-md-5"><?= $sideBarElement["left"] ?></div>
                                <div class="row col-md-7"><?= $sideBarElement["right"] ?></div>
                            </div>
                    <?php
                        }
                    }
                    ?>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>