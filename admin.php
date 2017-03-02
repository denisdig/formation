<p>Pour mettre une nouvelle enigme</p>

<form action="ajouterformation.php" method="POST">
    <div class="form-group">
        <label for="nom">Titre</label>
        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom" required>
    </div>
    <div class="form-group">
        <label for="fonction">Fonction</label>
        <input type="text" class="form-control" id="fonction" name="fonction" placeholder="Fonction" required>
    </div>
    <div class="form-group">
        <label for="credits">Bonne reponse</label>
        <input type="number" class="form-control" id="credits" name="credits" placeholder="Credits" required>
    </div>
    <button type="submit" class="btn btn-default">Ajouter</button>
</form>
</br>