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
<body class="background-gray">
<?php include 'header.php'; ?>


<div class="container is-flex mt-3 login">
    <form class="container " method="post" action="login.php">
        <h1>Accès à votre compte personnel</h1>
        <div class="field w-70 ">
            <label for="username" class="label mt-2">Nom d’utilisateur </label>
            <div class="control mg-2">
                <input id="username" class="input" type="text">
            </div>
        </div>
        <div class="field w-70">
            <label for="password" class="label">Mot de passe</label>
            <div class="control">
                <input id="password" class="input" type="password">
                <label class="checkbox mt-1">
                    <input type="checkbox">
                    Mémoriser mes renseignements
                </label>
            </div>
            <a class="button mt-1">Ouvrir une session<i class="fas fa-lock"></i></a>
        </div>
    </form>

    <div class="container  presentation-logo">
        <img src="images/logo.png" alt="">

    </div>
</div>


</body>
</html>

