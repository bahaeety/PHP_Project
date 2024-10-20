<?php
require("../partials/ConnDB.php");
session_start(
             [
               'cookie_lifetime' => 86400,
               'cookie_secure' => true,  
               'cookie_httponly' => true,
             ] 
             );
$crsf_token = bin2hex(random_bytes(32));
$_SESSION['csrf_token'] = $crsf_token;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $token = $_POST['csrf_token'];
    if(!isset($token) || $token !== $_SESSION['csrf_token']  ){
        die("Invalid CSRF token");
    }
    $prenom = strip_tags(htmlspecialchars(trim($_POST["prenom"])));
    $nom = strip_tags(htmlspecialchars(trim($_POST["nom"])));
    $email_unsanitized = strip_tags(htmlspecialchars(trim($_POST["email"])));
    $num_unsanitized = strip_tags(htmlspecialchars(trim($_POST["Numero_de_télé"])));
    $adress = strip_tags(htmlspecialchars(trim($_POST["adresse"])));
    $entree_mot_de_passe = strip_tags(htmlspecialchars(trim($_POST["entrer_mot_de_passe"])));
    $confirmer_mot_de_passe = strip_tags(htmlspecialchars(trim($_POST["confirmer_mot_de_passe"])));
    $mot_de_passe = strip_tags(htmlspecialchars(trim(password_hash($entree_mot_de_passe, PASSWORD_DEFAULT))));

    $sanitized_email = filter_var($email,FILTER_SANITIZE_EMAIL);
    $sanitized_num = filter_var($num,FILTER_SANITIZE_NUMBER_INT);

    if(filter_var($sanitized_email, FILTER_DEFAULT)){
        $email = $sanitized_email;
    }
    if(filter_var($num,FILTER_DEFAULT)){
        $num = $sanitized_num;
    }
    
// Vérification si l'email existe deja
    $sql_check_email = "SELECT COUNT(*) AS count FROM user WHERE email = ?";
    $stmt = mysqli_prepare($conn, $sql_check_email);
    mysqli_stmt_bind_param($stmt, "s", $email);
    mysqli_stmt_execute($stmt);
    mysqli_stmt_bind_result($stmt, $count);
    mysqli_stmt_fetch($stmt);
    mysqli_stmt_close($stmt);

    if ($count > 0) {
       $_SESSION['xerreur_email'] = "Il y a déjà un compte avec cet email.";
       header("Location:../views/LogIn.php");
       exit();
       
    }

// Insérer l'utilisateur s'il n'existe pas deja dans la base de donees
    $sql_insert_user = "INSERT INTO user (nom, prenom, email, numere_cellulaire, Adresse, password) VALUES (?, ?, ?, ?, ?, ?)";
    $stmt = mysqli_prepare($conn, $sql_insert_user);
    mysqli_stmt_bind_param($stmt, "sssiss", $nom, $prenom, $email, $num, $adress, $mot_de_passe);
    if(mysqli_stmt_execute($stmt)){
      header('LOCATION:../views/logIn.php');
    }
    
      
        
 }
  
    error_log("une erreur est survenue: " + mysqli_error($conn),0);

    mysqli_stmt_close($stmt);
    mysqli_close($conn);


?>
