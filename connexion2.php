<?php
include "header.php";
?>

<?php
$identifiant = $_POST['identifiant'];
$mdp = $_POST['mdp'];


//requete : test connections

$req = $bdd->prepare('SELECT * FROM connexion WHERE identifiant = :identifiant and mdp = :mdp');
$req->execute(array(
	':identifiant' => $identifiant,
	':mdp'=> $mdp
));

//si l'utilisateur existe => enregistre le resultat dans les variables $_SESSION

if($req->rowCount() > 0){
	$rechercheUser = $req->fetch(); //placer le resultat dans un tableau, on recupere via les tables
	$_SESSION['id']= $rechercheUser['id'];
	$_SESSION['identifiant']= $rechercheUser['identifiant'];
	$_SESSION['mdp']=$rechercheUser['mdp'];


	//redirection vers la page principale
	header('Location:pagep.php');



}else
	echo "<br/><br /><br/>Email ou password incorrect !";
?>



