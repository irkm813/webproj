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
                        <div class="col-12 navbar-nav">

                            <div class="row login-window-small col-12 d-block d-md-none ">
                                <?php if (isset($_SESSION["user"])) { ?>
                                    <p>Bejelentkezve mint: <span><?= $_SESSION["user"]["first_name"] ?> <?= $_SESSION["user"]["last_name"] ?></span></p>
                                    <form action="/logout" method="post">
                                        <button id="submit" type="submit" class="btn btn-primary">Kijelentkezés</button>
                                    </form>
                                <?php
                                } else {   ?>
                                    <div class="form-items">
                                        <form action="login" method="POST">
                                            <div class="col-md-12">
                                                <input class="form-control" type="string" name="username" placeholder="Felhasználónév" required>
                                            </div>
                                            <div class="col-md-12">
                                                <input class="form-control" type="password" name="password" placeholder="Jelszó" required>
                                            </div>
                                            <div class="form-button sx-12">
                                                <button id="submit" type="submit" class="btn btn-primary">Bejelentkezés</button>
                                            </div>
                                            <div class="form-button sx-12">
                                                <button id="submit" type="button" onclick="window.location.href='/register'" class="btn btn-primary">Regisztáció</button>
                                            </div>
                                        </form>
                                    </div>
                                <?php
                                } ?>
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
                                    <input class="form-control" type="string" name="username" placeholder="Felhasználónév" required>
                                </div>
                                <div class="col-md-12">
                                    <input class="form-control" type="password" name="password" placeholder="Jelszó" required>
                                </div>
                                <div class="form-button md-12">
                                    <button id="submit" type="submit" class="btn btn-primary">Bejelentkezés</button>
                                    <button id="submit" type="button" onclick="window.location.href='/register'" class="btn btn-primary">Regisztáció</button>
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
                <div class="row googlemap">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2753.7930396318!2d18.724118077434603!3d46.353651773653766!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4742ee169bdb3ae9%3A0xfc39fc043134fb3!2sSzeksz%C3%A1rdi%20Kutyamenhely!5e0!3m2!1shu!2shu!4v1712686132488!5m2!1shu!2shu" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>
    </div>
    <script src="./validate.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>