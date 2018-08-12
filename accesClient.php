<!DOCTYPE html>
<html lang="en">
<head>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css"/>
    <script type="text/javascript" src="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <script src="js/scripts.js"></script>
    <link rel="stylesheet" href="css/styles.css">
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body class="background-gris">
<?php include 'header.php'; ?>


<div class="container is-flex mt-3">
    <form class="container " method="post" action="login.php">
        <h1 class="titre-acces">Accès à votre compte personnel</h1>
        <div class="field w-50 ">
            <label for="username" class="label mt-2">Nom d’utilisateur </label>
            <div class="control mg-2">
                <input id="username" class="input" type="text">
            </div>
        </div>
        <div class="field w-50">
            <label for="password" class="label">Mot de passe</label>
            <div class="control">
                <input id="password" class="input" type="password">
                <label class="checkbox">
                    <input type="checkbox">
                    Mémoriser mes renseignements
                </label>
            </div>
            <span class="icon is-small is-left">
      <button><i class="fas fa-lock">Ouvrir une session</i></button>
    </span>
        </div>
    </form>
    <div class="container w-80">
        <h1>Devenez Client aujourd’hui ! </h1>
        <p>Profitez de nos avantages Une équipe professionelle qui vous aide à <br> prendre des décisions avisées à
            propos de votre argent.</p>
        <a class="button">Devenir Client</a>
    </div>
</div>


</body>
</html>

