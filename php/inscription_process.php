<?php

require('../config/config.php');
$pseudo = trim($_POST['pseudo']);

if (!isset($pseudo) || strlen($pseudo)>10){ //isset = different de Null strlen compte le nombre de carcatere dans le pseudo
header('Location: inscription.php');
exit;
}
//verifier si le pseudo est libre
$q = "SELECT id FROM users WHERE pseudo = ? ";
$req = $pdo ->prepare($q);
$req->execute([$pseudo]);
$results = $req->fetchAll();
 if (count($results) > 0){
   header('Location: submit.php');
exit;
}
//password vide
$validpwd = $_POST['password'];
if (empty($validpwd)){
  header('Location: inscription.php');
  exit;
}
// Insertion en bdd
$pseudoValid = htmlspecialchars($pseudo);
$pwd = hash('sha256',$validpwd) ; // hash('sha256') permet de hasher le pw des users

$q='INSERT INTO users (name, password) VALUES (:val1,:val2)';
$req = $pdo->prepare($q);
$req->execute([
'val1' => $pseudoValid,
'val2' => $pwd
]);

header('Location:connexion.php');
exit;

 ?>

<?php





?>
