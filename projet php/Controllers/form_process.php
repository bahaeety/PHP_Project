<?php
require("../partials/ConnDB.php");
session_start();
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $prenom = $_POST["prenom"];
    $nom = $_POST["nom"];
    $email = $_POST["email"];
    $num = $_POST["Numero_de_télé"];
    $adress = $_POST["adresse"];
    $entree_mot_de_passe = $_POST["entrer_mot_de_passe"];
    $confirmer_mot_de_passe = $_POST["confirmer_mot_de_passe"];
    $mot_de_passe = password_hash($entree_mot_de_passe, PASSWORD_DEFAULT);

// Vérification si l'email existe deja
    // $sql_check_email = "SELECT COUNT(*) AS count FROM user WHERE email = ?";
    // $stmt = mysqli_prepare($conn, $sql_check_email);
    // mysqli_stmt_bind_param($stmt, "s", $email);
    // mysqli_stmt_execute($stmt);
    // mysqli_stmt_bind_result($stmt, $count);
    // mysqli_stmt_fetch($stmt);
    // mysqli_stmt_close($stmt);

    // if ($count > 0) {
    //    $_SESSION['xerreur_email'] = "Il y a déjà un compte avec cet email.";
    //    header("Location:../views/LogIn.php");
    //    exit();
       
    // }

// Insérer l'utilisateur s'il n'existe pas deja dans la base de donees
    $sql_insert_user = "INSERT INTO user (nom, prenom, email, numere_cellulaire, Adresse, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql_insert_user);
    mysqli_stmt_bind_param($stmt, "sssiss", $nom, $prenom, $email, $num, $adress, $mot_de_passe);
    mysqli_stmt_execute($stmt);
    
    // recuperer id de le user qui vien de s'inscrir
     $user_id = mysqli_insert_id($conn);
    $_SESSION['ID_USER'] = $user_id;
     $sql_get_name = "SELECT prenom FROM user WHERE ID_user = ?";
     $prepare_sql = mysqli_prepare($conn,$sql_get_name);
     if($prepare_sql){
       mysqli_stmt_bind_param($prepare_sql,'i',$user_id);
       mysqli_stmt_execute($prepare_sql);
       mysqli_stmt_bind_result($prepare_sql,$name_user);
       if (mysqli_stmt_fetch($prepare_sql)) {  
        $_SESSION['name_user'] = $name_user;
        header("Location:../views/acceuil.php");
        exit();
    }    
 }
  

    mysqli_stmt_close($stmt);
    mysqli_close($conn);

}
?>
