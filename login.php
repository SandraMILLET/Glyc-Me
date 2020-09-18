<?php
ini_set('display_errors', 'On');
error_reporting(-1);


$pseudo = htmlspecialchars($_POST["pseudo"]);
$password = password_hash($_POST["password"], PASSWORD_BCRYPT);
$user = 'root';
$pass = '';

try {
    $bdd = new PDO('mysql:host=localhost;dbname=glycme', $user, $pass);
        // set the PDO error mode to exception
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
            {
                echo "Connection failed: " . $e->getMessage();
            };

//validation connexion

//  Récupération de l'utilisateur et de son pass hashé
$req = $bdd->prepare('SELECT id, password FROM utilisateurs WHERE pseudo = :pseudo');
$req->execute(array(
    'pseudo' => $pseudo));
$resultat = $req->fetch();

// Comparaison du pass envoyé via le formulaire avec la base
$isPasswordCorrect = password_verify($_POST['password'], $resultat['password']);

if (!$resultat)
{
    echo 'Mauvais identifiant ou mot de passe !';
}
else
{
    if ($isPasswordCorrect) {
        session_start();
        $_SESSION['id'] = $resultat['id'];
        $_SESSION['pseudo'] = $pseudo;
        echo 'Vous êtes connecté !';
        header ('location:choice.php');
    }
    else {
        echo 'Mauvais identifiant ou mot de passe !';
    }
}
?>