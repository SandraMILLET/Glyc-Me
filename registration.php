<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <title>Formulaire de connexion</title>
</head>
<div class="container-fluid index">
<div class="titre">
<h2>Formulaire d'inscription</h2>
</div>
    <div class="card-body">
        <form class="col-md-12" action="database.php" method="post">
            <label>Votre nom</label>
            <input class="form-control" type="text" id="nom" name="nom" placeholder="Indiquez votre nom" required>
            <label>Votre pseudo</label>
            <input class="form-control" type="text" id="pseudo" name="pseudo" placeholder="Indiquez votre pseudo"
                required>
            <label>Votre email</label>
            <input class="form-control" type="email" id="email" name="email" placeholder="Indiquez votre email"
                required>
            <label>Votre password</label>
            <input class="form-control" type="password" id="password" name="password"
                placeholder="Indiquez votre password" required>
            <button type="submit" class="btn btn-primary" name="submitconnexion">Envoyer</button>
        </form>
    </div>
    <div class="">
        <p class="bout_href">Si déjà inscrit : connectez-vous ci-dessous</p>
        <a href="connexion.php" class="btn btn-info" role="button">Se connecter</a>
        </div>

        </div>
        </body>

</html>