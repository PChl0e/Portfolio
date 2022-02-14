<?php
    include('menu.php');
?>

<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Accueil</title>
    <link rel="stylesheet" href="../css/contact.css">
</head>
<body>
    <!--alert début-->
    <div class="alert-success">
        <span>Message bien envoyé ! Merci</span>
    </div>

    <div class="alert-error">
        <span>Message pas envoyé ! Réessaye</span>
    </div>
    <!--alert fin-->
    <div class="contact-section">
        <div class="contact-info">
            <div><ion-icon name="location"></ion-icon>12 rue Dom Edmond Martene, 21000 DIJON</div>
            <div><ion-icon name="call"></ion-icon>06.80.81.56.20</div>
            <div><ion-icon name="mail"></ion-icon>chloepi89@gmail.com</div>
            <div><ion-icon name="logo-linkedin"></ion-icon><a href="">Linkedin</a> </div>
        </div>
        <div class="contact-form">
            <h2>Contactez moi</h2>
            <form class="contact" action="" method="post">
                <input type="text" name="name" class="text-box" placeholder="Votre nom" required>
                <input type="email" name="email" class="text-box" placeholder="Votre email" required>
                <textarea name="message" rows="5" placeholder="Votre message..." required></textarea>
                <input type="submit" name="submit" class="send-btn" value="Envoyer">
            </form>
        </div>
    </div>
   
    <script src="https://unpkg.com/ionicons@4.5.10-0/dist/ionicons.js"></script>

</body>
</html>