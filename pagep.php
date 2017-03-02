<?php
include "header.php";
?>

<!DOCTYPE html>
<head>
    <meta name="description" content="Page principale"/>
    <title>Page principal de la maison de ligues</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-1">
        </div>
            <div class="col-md-10">
    <ul class="nav nav-tabs">
    <li role="presentation" class="active"><a href="pagep.php">Les fomation</a></li>
    <li role="presentation"><a href="credits.php">Mes credits</a></li>
    <li role="presentation"><a href="mesformations.php">Mes formations</a></li>
    <li role="presentation"><a href="deconnexion.php">Deconnexion</a></li>
    </ul>
            </div>
                    <div class="col-md-1">
                    </div>
    </div>
</div>

<div class="container-fluid">
    <div class="row">
        <div class="col-md-2">

        </div>
                <div class="col-md-8">
                    <div class="blocformation">
                        <?php
                        $resultats = $bdd->query("SELECT * FROM formation");
                        while($donnees=$resultats->fetch()){
                            echo $donnees["nom"];
                            echo $donnees["fonction"];
                            echo $donnees["credits"];
                         }
                        ?>
                    </div>
                </div>
    </div>




</div>
</body>
</html>