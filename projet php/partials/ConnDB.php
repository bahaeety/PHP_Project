<?php
$servername = "localhost";
$username = "PhpProject";
$password = "PhpProject";
$dbname = "db_produit";

// Créer une connexion
$conn = mysqli_connect($servername, $username, $password, $dbname);
if (!$conn) {
    die("Échec de la connexion : " . mysqli_connect_error());
}
?>
