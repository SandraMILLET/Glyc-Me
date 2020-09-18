
<?php
ini_set('display_errors', 'On');
error_reporting(-1);

$user = 'root';
$pass = ' ';

$json = file_get_contents("js/aliments.json");
$parsed_json = json_decode($json);
$nom = $parsed_json->{'nom'};
$img =$parsed_json->{'img'};
$ig = $parsed_json->{'IG'};
echo $nom;

try {
    $bdd = new PDO('mysql:host=localhost;dbname=glycme', $user, $pass);
        // set the PDO error mode to exception
        $bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        }
        catch(PDOException $e)
            {
            echo $sql . "<br>" . $e->getMessage();
            };
        
        if(isset($_POST['case']))
    {
        foreach($_POST['case'] as $valeur)
        {
            echo $valeur."<br>";
        }
    }
        $req = $bdd ->prepare('INSERT INTO repas (nom, img, IG) VALUES(:nom, :img, : :IG)');
        $req->execute(array(
            'nom'=> $nom,
            'img'=> $img,
            'IG'=> $IG
        ));
                
        //On renvoie l'utilisateur 
    header("Location:choice.php");            

  

?>
