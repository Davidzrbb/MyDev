<?php
$host ="ec2-35-168-145-180.compute-1.amazonaws.com";
$user ="lcetddjftnkmsk";
$password="bb17d1463db724bcd4f4f27b0acc06273fdf2a5d819a7487bd89739dd8c548bb";
$dbname="d8pfh3if6dtkvm";

try {
$dsn = "pgsql:host=$host;port=5432;dbname=$dbname;user=$user;password=$password";
  $pdo = new PDO($dsn);
}
catch (PDOException $e) {
echo 'nope' . $e->getMessage();
}

?>
