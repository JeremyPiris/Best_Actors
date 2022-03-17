<?php 
$title = "Les génies du cinéma";
?>
<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $title ?? 'Les génies du cinéma' ?></title>
    <link rel="stylesheet" href="styles/styles.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="script/script.js" async></script>
    <link rel="preconnect" href="https://fonts.gstatic.com"> 
    <link href="https://fonts.googleapis.com/css2?family=Open+Sans&display=swap" rel="stylesheet">
</head>

<body class="body-index">


    <h1 class="index-title">Les génies du cinéma</h1>

    <div class="index-container">
        <div class="slider-container">
            <div class="slide">
                    <a href="#">
                    <img class="index-img" src="images/benoit_poelvoorde/benoit_poelvoorde.webp" alt="">
                    </a>
                    <h2>Benoit</h2>
                </div>
            <div class="slide">
                <a href="#">
                <img class="index-img" src="images/didier_bourdon/didier_bourdon.jpg" alt="">
                </a>
                <h2>Didier</h2>
            </div>
            <div class="slide">
                <a href="#">
                <img class="index-img" src="images/edgar_wright/edgar_wright.jpg" alt="">
                </a>
                <h2>Edgar</h2>
            </div>
            <div class="slide">
                <a href="#">
                <img class="index-img" src="images/edouard_baer/edouard_baer.jpg" alt="">
                </a>
                <h2>Edouard</h2>
            </div>
            <div class="slide">
                <a href="#">
                <img class="index-img" src="images/eric_judor/eric_judor.jpg" alt="">
                </a>
                <h2>Eric</h2>
            </div>
            <div class="slide">
                <a href="#">
                <img class="index-img" src="images/francois_rollin/francois_rollin.jpg" alt="">
                </a>
                <h2>François</h2>
            </div>
            <div class="slide">
                <a href="#">
                <img class="index-img" src="images/maud_wyler/maud_wyler.jpg" alt="">
                </a>
                <h2>Maud</h2>
            </div>
            <div class="slide">
                <a href="#">
                <img class="index-img" src="images/sara_forestier/sara_forestier.jpg" alt="">
                </a>
                <h2>Sara</h2>
            </div>
            <div class="slide">
                <a href="#">
                <img class="index-img" src="images/simon_pegg/simon_pegg.jpg" alt="">
                </a>
                <h2>Simon</h2>
            </div>
            <div class="slide">
                <a href="#">
                <img class="index-img" src="images/youssef_hajdi/Youssef-Hajdi-networth.jpg" alt="">
                </a>
                <h2>Youssef</h2>
            </div>
        </div>
    </div>




    <script src="script/script.js"></script>
    
</body>
</html>