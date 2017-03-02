<?php
include "bdd.php";

if(isset($_POST['nom'], $_POST['fonction'], $_POST['credits'])){
    $req = $bdd->prepare("insert into formation (nom, fonction, credits) values (?, ?, ?)");
    $req->execute(array($_POST['nom'], $_POST['fonction'], $_POST['credits']));}

    header("location:admin.php");
    ?>