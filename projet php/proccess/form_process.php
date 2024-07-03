<?php 
require("../partials/ConnDB.php");
if($_SERVER["REQUEST_METHOD"] == "POST"){
$prenom = $_POST["prenom"];
$nom = $_POST["nom"];
$email = $_POST["email"];
$num = $_POST["Numero_de_télé"];
$entree_mot_de_passe = $_POST["entrer_mot_de_passe"];
$confirmer_mot_de_passe = $_POST["confirmer_mot_de_passe"];
$mot_de_passe = password_hash($entree_mot_de_passe, PASSWORD_DEFAULT);


}





?>