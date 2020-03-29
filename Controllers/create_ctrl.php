<!-- enregistre les infos du formulaire dans la base -->
<?php
$pseudo = htmlspecialchar($_POST['pseudo']);
$mdp = htmlspecialchar($_POST['mdp']);
$story = htmlspecialchar($_POST['story']);

//connexion à la base de donnée
try
{
        $dbh= new PDO('mysql:host=localhost;dbname=crud;charset=utf8', 'root', 'root');

}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
        
}

//insertion dans la base de donnée
$insertion = $bdd->prepare("INSERT INTO user (pseudo, mot_de_passe, description) VALUES (?, ?, ?);");
$insertion->bindParam(1, $pseudo);
$insertion->bindParam(2, $mdp);
$insertion->bindParam(3, $story);
$insertion->execute();
?>



