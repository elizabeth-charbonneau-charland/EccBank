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

<form  method="post" action="inscription.php" class="form-inscription">
<div class="field ">
    <h1>Devenir Client est simple et rapide.</h1> <h2>Nous avons besoin  de tous les renseignements ci-dessous.</h2>
    <label class="label ">Adresse Courriel</label>
    <div class="control">
        <input class="input" type="email">
    </div>
</div>

<div class="field">
    <label for="username" class="label mt-2">Nom d’utilisateur </label>
    <div class="control mg-2">
        <input id="username" class="input" type="text">
    </div>
</div>

    <div class="field ">
        <label for="password" class="label">Mot de passe</label>
        <div class="control">
            <input id="password" class="input" type="password">

            <button class="button">Suivant</button>
</form>





</body>
</html>

