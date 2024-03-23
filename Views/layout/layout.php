<!DOCTYPE html>
<html lang="hu">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="./style.css">
    <title>Mineband</title>
</head>

<body>
    <div class="container all-content">

        <div class="row top-bar">
            <div class="col-9 menu-area">
                <div class="row menu-bar">
                    <div class="col">
                        <a href=""><img class="img-fluid" src="./Resources/Buttons/house_icon.png" alt=""></a>
                        <p>home</p>
                    </div>
                    <div class="col">
                        <a href=""><img class="img-fluid" src="./Resources/Buttons/pictures_icon.png" alt=""></a>
                        <p>pictures</p>
                    </div>
                    <div class="col">
                        <a href=""><img class="img-fluid" src="./Resources/Buttons/videos_icon.png" alt=""></a>
                        <p>videos</p>
                    </div>
                    <div class="col">
                        <a href=""><img class="img-fluid" src="./Resources/Buttons/aboutUs_icon.png" alt=""></a>
                        <p>among us</p>
                    </div>
                </div>
            </div>
            <div class="col-3 main-logo">
                <a href=""><img class="img-fluid" src="./Resources/Logos/mb_logo.png"></a>
            </div>
        </div>
        <div class="row content-area">
            <div class="col-9 news-column">
                {{content}}
            </div>


            <div class="col-3 side-bar">
                <div class="row"><a href="">
                        <img src="Resources/Buttons/login_button.png" alt="">
                    </a></div>
                <div class="row">
                    <form action="sendEmail.php" method="post">
                        <label for="email">Enter your email:</label>
                        <input type="email" id="email" name="email">
                        <button type="submit">Send Email</button>
                    </form>
                </div>
                <div class="row">
                    <p class="rot30">Zsolti</p>
                    <p class="rot45">Erik</p>
                    <p class="rot83">Feri</p>
                </div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>