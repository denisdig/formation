<?php

try
{
$bdd = new PDO("mysql:host=localhost;dbname=mld;charset=utf8","root","");
}
catch(Exception $e)
{
die("Erreur: ".$e->getMessage());
}

$req=$bdd->prepare("insert into connexion (identifiant, mdp) values (?,?)");
$req->execute(array($_POST["identifiant"], $_POST["mdp"]));
   header("location:inscription.php");

?>