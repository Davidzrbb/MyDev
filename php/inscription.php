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
  <?php include_once("../html/nav.html") ?>
<?php include_once("../html/footer.html") ?>
  <form class="form_connexion">
    <div id="div_connexion"class ="bg-light div_connexion">
      <h1>Inscription</h1>
    </br>
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Pseudo</label>
      <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    </div>
    <div class="mb-3">
      <label for="exampleInputPassword1" class="form-label">Mot de passe</label>
      <input type="password" class="form-control" id="exampleInputPassword1">
    </div>
  </br>
  <button type="submit" class="btn btn-secondary">Confirmer</button>
  <br>  <a href="connexion.php">Déjà inscrit ? </a>
</form>

</body>
</html>
