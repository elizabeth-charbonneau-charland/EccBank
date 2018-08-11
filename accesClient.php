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
<body>
<?php include 'header.php'; ?>


<h1 class="titre-acces">Accès à votre compte personel</h1>

<div class="container ">
    <div class="field acces">
        <label class="label">Nom d’utilisateur ou carte Accès</label>
        <div class="control">
            <input class="input" type="text">
        </div>
    </div>

    <div class="field acces">
        <label class="label">Mot de passe</label>
        <div class="control">
            <input class="input" type="password">
            <label class="checkbox">
                <input type="checkbox">
                Mémoriser mes renseignements
            </label>
        </div>
        <span class="icon is-small is-left">
      <button><i class="fas fa-lock">Ouvrir une session</i></button>
    </span>
    </div>
</div>
</body>
</html>