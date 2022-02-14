<?php
    include('menu.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="../css/portfolio.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
</head>
<body>
    <h1>Projets</h1>
    <div class="list">
        <div class="items">
            <!--Projet 1-->
            <div class="item">
                <h1>Stud'Intership</h1>
                <div class="container">
                    <div class="slider">
                        <img class="active img-diapo1" src="../img/site/stConnexion.png" >
                        <img src="../img/site/stContact.png" class="img-diapo1">
                    </div>
                    <div class="cont-btn">
                        <div class="btn-nav left1">←</div>
                        <div class="btn-nav right1">→</div>
                    </div>
                </div>
                <div class="text">
                    <br>
                    <p>Site web permettant de faciliter la recherche de stage ou de stagiaire suivant le statut. Projet réalisé en équipe et lors de mon premier semestre de DUT informatique.</p>
                    <br>
                    <h5>Technologies : </h5>
                    <div class="logo">
                        <p class="icons"><i class="fa-brands fa-html5 fa-2x"></i></p>
                        <p class="icons"><i class="fa-brands fa-css3-alt fa-2x"></i></p>
                        <p class="icons"><i class="fa-brands fa-php fa-2x"></i></p>
                    </div>
                </div>
            </div>
            <!--Projet 2-->
            <div class="item">
                <h1>Domaine Philippon Frères</h1>
                <div class="container">
                    <div class="slider">
                        
                        <img src="../img/site/abContact.png" class="active img-diapo2" >
                        <img src="../img/site/agAccueil.png" class="img-diapo2">
                    </div>
                    <div class="cont-btn">
                        <div class="btn-nav left2">←</div>
                        <div class="btn-nav right2">→</div>
                    </div>
                </div>
                <div class="text">
                    <br>
                    <p>Site web pour un domaine viticole permettant de présenter les produits et de les réserver. Projet réalisé seule.</p>
                    <br>
                    <h5>Technologies : </h5>
                    <div class="logo">
                        <i class="fa-brands fa-html5 fa-2x"></i>
                        <i class="fa-brands fa-css3-alt fa-2x"></i>
                        <i class="fa-brands fa-js-square fa-2x"></i>
                        <i class="fa-brands fa-php fa-2x"></i>
                    </div>
                </div>
            </div>
            <!--Projet 3-->
            <div class="item">
                <h1>AGRRR'OBRANCHES</h1>
                <div class="container">
                    <div class="slider">
                        <img class="active img-diapo3" src="../img/site/stConnexion.png" >
                        <img src="../img/site/stContact.png" class="img-diapo3">
                        <img src="../img/site/abContact.png" class="img-diapo3" >
                        <img src="../img/site/agAccueil.png" class="img-diapo3">
                    </div>
                    <div class="cont-btn">
                        <div class="btn-nav left3">←</div>
                        <div class="btn-nav right3">→</div>
                    </div>
                </div>
                <div class="text">
                    <br>
                    <p>Site vitrine pour une activité d'acrobranches fictive dans l'univers des dinosaures. Projet réalisé en équipe et dans le cadre d'un projet de gestion de systèmes d'informations.</p>
                    <br>
                    <h5>Technologies :</h5> 
                    <div class="logo">
                        <i class="fa-brands fa-html5 fa-2x"></i>
                        <i class="fa-brands fa-css3-alt fa-2x"></i>
                    </div>
                </div>
            </div>
            <!--Projet 4-->
            <div class="item">
                <h1>Portfolio</h1>
                <div class="container">
                    <div class="slider">
                        <img class="active img-diapo4" src="../img/site/stConnexion.png" >
                        <img src="../img/site/stContact.png" class="img-diapo4">
                        <img src="../img/site/abContact.png" class="img-diapo4" >
                        <img src="../img/site/agAccueil.png" class="img-diapo4">
                    </div>
                    <div class="cont-btn">
                        <div class="btn-nav left4">←</div>
                        <div class="btn-nav right4">→</div>
                    </div>
                </div>
                <div class="text">
                    <br>
                    <p>Site sur lequel vous vous trouvez. Projet réalisé seul.</p>
                    <br>
                    <h5>Technologies :</h5> 
                    <div class="logo">
                        <i class="fa-brands fa-html5 fa-2x"></i>
                        <i class="fa-brands fa-css3-alt fa-2x"></i>
                        <i class="fa-brands fa-js-square fa-2x"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!--Javascript-->
    <script src="../js/slider1.js"></script>
    <script src="../js/slider2.js"></script>
    <script src="../js/slider3.js"></script>
    <script src="../js/slider4.js"></script>
</body>
</html>