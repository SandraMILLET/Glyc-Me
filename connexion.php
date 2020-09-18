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

<body>
    <div class="container-fluid index">
        <div class="row justify-content-center titre">
            <h2>Connexion</h2>
        </div>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12 bg-light form-group">
            <form class="col-md-12" action="login.php" method="post">
                <div class="form-group">
                    <label>Votre pseudo</label>
                    <input class="form-control" type="text" id="pseudo" name="pseudo"
                        placeholder="Indiquez votre pseudo" required>
                </div>
                <div class="form-group">
                    <label>Votre password</label>
                    <input class="form-control" type="password" id="password" name="password"
                        placeholder="Indiquez votre password" required>
                </div>
                <button type="submit" class="btn btn-primary" href="choice.php">Envoyer</button>
            </form>
        </div>
    </div>
    <script src="js/script.js"></script>
</body>

</html>