<?php 
//insertion condition if not session alors redirect vers form connexion
session_start ();

//$json = file_get_contents("js/aliments.json");
//var_dump(json_decode($json));
?>
<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
        integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">

    <title>Repas</title>
</head>

<body>
    <div class="container-fluid index">
    <div class="row justify-content-center titre">
        <h2>Composition des repas</h2>
        </div>

        <div class="row">
            <div class="col-sm-12 col-md-5  choice">
                <form id="aliments" action="insert.php" method="POST">
                    <div class="row justify-content-center save">
                        <h3>Sauvegarde de la séléction</h3>
                    </div>
                    <div class="row justify-content-center save">
                        <input class="btn btn-primary" type="submit" name="Submit" value="Envoyer">
                    </div>
                </form>
            </div>
            <div class="col-sm-6 col-md-3 bareme">
            <h4>Vous avez choisi : </h4>
                <div id="btnResult">
                    <button class="btn btn-success" onclick="total()">Résultat</button>
                </div>
                
                <div id="result">
                    <!--insertion resultat-->
                </div>
            </div>
            <div class="col-sm-6 col-md-3 resultat">
            <div id="calculIG" class="bareme">
                    <h4>TOTAL de l'IG </h4>
                </div>
                <div id="btnResult">
                    <button class="btn btn-primary" onclick="somme()">Calcul</button>
                </div>
                

                <div id="Total">

                </div>
            </div>
        </div>



        <div class="bareme">
            <a class="btn btn-warning" href="bareme.html">Barème</a>
        </div>

    </div>

    <script src="js/script.js"></script>
</body>

</html>