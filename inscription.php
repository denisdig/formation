<?php
include "header.php";
?>

<!DOCTYPE html>
<head> 

<meta name="description" content="Page d'inscription Maison des ligues"/>
<title>Page d'inscription</title>
</head>

<body>
<center>Veuillez completer les champs pour vous inscrire:</center>

<div class="container">
    <div class="row">
        <div class="col-md-2">

        </div>

        <div class="col-md-8">

           <form action="inscription2.php">
            <form class="form-inline">
                <div class="form-group">
                    <label for="pseudo">Pseudo : </label>
                    <input type="text" class="form-control" id="pseudo" name="pseudo" placeholder="pseudo" required>
                </div>
                <div class="form-group">
                    <label for="mdp">mot de passe : </label>
                    <input type="email" class="form-control" id="mdp" name="mdp" placeholder="Mot de passe" required>
                </div>
                <button type="submit" class="btn btn-default">Send invitation</button>
            </form>
           </form>

        <div class="col-md-2">

        </div>

    </div>
</div>

</body>
</html>