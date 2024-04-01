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


                            <div class="row login-window-small col-12 d-block d-md-none " >
                                <p>Bejelentkezve mint: <span>Maláj József</span></p>
                                <div class="form-items">
                                    <form action="login">
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

                            <a class="nav-item nav-link" href="/">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                                    <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                                </svg>
                                <p>Kezdőlap</p>
                            </a>


                            <a class="nav-item nav-link" href="/about">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-info-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14m0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0"/>
                                </svg>
                                <p>Rólunk</p>
                            </a>

                            <a class="nav-item nav-link" href="/gallery">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-image" viewBox="0 0 16 16">
                                    <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0"/>
                                    <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1z"/>
                                </svg>
                                <p>Galéria</p>
                            </a>

                            <a class="nav-item nav-link" href="/contact">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16">
                                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1zm13 2.383-4.708 2.825L15 11.105zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741M1 11.105l4.708-2.897L1 5.383z"/>
                                </svg>
                                <p>Kapcsolat</p>
                            </a>

                            <a class="nav-item nav-link" href="/messages">
                                <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" fill="currentColor" class="bi bi-chat-heart" viewBox="0 0 16 16">
                                    <path fill-rule="evenodd" d="M2.965 12.695a1 1 0 0 0-.287-.801C1.618 10.83 1 9.468 1 8c0-3.192 3.004-6 7-6s7 2.808 7 6-3.004 6-7 6a8 8 0 0 1-2.088-.272 1 1 0 0 0-.711.074c-.387.196-1.24.57-2.634.893a11 11 0 0 0 .398-2m-.8 3.108.02-.004c1.83-.363 2.948-.842 3.468-1.105A9 9 0 0 0 8 15c4.418 0 8-3.134 8-7s-3.582-7-8-7-8 3.134-8 7c0 1.76.743 3.37 1.97 4.6a10.4 10.4 0 0 1-.524 2.318l-.003.011a11 11 0 0 1-.244.637c-.079.186.074.394.273.362a22 22 0 0 0 .693-.125M8 5.993c1.664-1.711 5.825 1.283 0 5.132-5.825-3.85-1.664-6.843 0-5.132"/>
                                </svg>
                                <p>Üzenőfal</p>
                            </a>


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
                    <p>Bejelentkezve mint: <span>Maláj József</span></p>
                    <div class="form-items">
                        <form action="login">
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

                <div class="row info-area">
                <?php
                        include "raw-data.php";

                        if($sideBarData){
                            foreach ($sideBarData as $sideBarElement) {

                                echo'<div class="row">';
                                echo'<div class="row col-md-5">'. $sideBarElement["left"] .'</div>';
                                echo'<div class="row col-md-7">'. $sideBarElement["right"] .'</div>';
                                echo'</div>';
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