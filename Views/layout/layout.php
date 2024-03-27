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
            <div class="col-12 col-md-9 menu-area">
                <div class="row menu-bar">
                    <div class="col">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house" viewBox="0 0 16 16">
                            <path d="M8.707 1.5a1 1 0 0 0-1.414 0L.646 8.146a.5.5 0 0 0 .708.708L2 8.207V13.5A1.5 1.5 0 0 0 3.5 15h9a1.5 1.5 0 0 0 1.5-1.5V8.207l.646.647a.5.5 0 0 0 .708-.708L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293zM13 7.207V13.5a.5.5 0 0 1-.5.5h-9a.5.5 0 0 1-.5-.5V7.207l5-5z"/>
                        </svg>
                        <p>Home</p>
                    </div>
                    <div class="col">
                        <p>Videos</p>
                    </div>
                    <div class="col">
                        <p>Pictures</p>
                    </div>
                    <div class="col">
                        <p>Login</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="row content-area">
            <div class="col-12 col-md-9 news-column">
                {{content}}
            </div>


            <div class="col-3 d-none d-md-block side-bar">
                <div class="row">
                    <h1>valami</h1>
                </div>
                <div class="row">
                    <p>Zsolti</p>
                    <p>Erik</p>
                    <p>Feri</p>
                </div>
            </div>
        </div>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>