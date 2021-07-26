<!DOCTYPE html>
<html lang="fr" dir="ltr">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="../css/style.css" rel="stylesheet">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Connexion</title>
</head>
<body>
  <?php include_once("nav.php") ?>
<?php include_once("../html/footer.html") ?>
  <form class="form_connexion" action="inscription_process.php" method="post">
    <div id="div_connexion"class ="bg-light div_connexion">
      <h1>Inscription</h1>
    </br>
    <div class="mb-3">
      <label for="pseudo" class="form-label">Pseudo</label>
      <input type="text" class="form-control" id="pseudo">
    </div>
    <div class="mb-3">
      <label for="password" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="password">
    </div>
  </br>
  <button type="submit" class="btn btn-secondary">Confirmer</button>
  <br>  <a href="connexion.php">Déjà inscrit ? </a>
</form>

</body>
</html>
