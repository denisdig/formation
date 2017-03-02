    <?php
include "header.php";
    ?>

<!DOCTYPE html>
<head>
<meta name="description" content="Page de connexion Maison des ligues"/>
<title>Page de connexion</title>
</head>
<body>
 <div class="container">
  <div class="row">
    <div class="col-md-2">

    </div>

        <div class="col-md-8">

          <form action="connexion2.php" method="POST">
            <div class="form-group">
              <label for="Pseudo">Votre pseudo :</label>
              <input type="text" class="form-control" id="identifiant" name="identifiant" placeholder="identifiant" required>
            </div>
            <div class="form-group">
              <label for="motdepasse">Votre mot de passe : </label>
              <input type="password" class="form-control" id="mdp" name="mdp" placeholder="mdp" required>
            </div>
            <center><button type="submit" class="btn btn-default">Se connecter</button></center>
          </form>

        </div>

            <div class="col-md-2">

            </div>

  </div>
 </div>


</body>
</html>