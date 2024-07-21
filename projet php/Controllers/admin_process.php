<?php
require("../partials/ConnDB.php");
session_start();
extract($_POST);

if($USER === "admin@gmail.com" && $PWD === "admin"){
    $_SESSION["authentification"] = "admin";
    header("Location: ../views/Dashbord/Dashbord.php");
    exit();
}
$sql = "SELECT ID_USER, email,nom, password FROM User WHERE email = ?";
$stmt = mysqli_prepare($conn, $sql);

if ($stmt) {
    mysqli_stmt_bind_param($stmt, "s", $USER);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $row = mysqli_fetch_assoc($result);

    if ($row && password_verify($PWD, $row["password"])) {
        $_SESSION["authentification"] = "user";
        $_SESSION["name_user"] = $row["nom"];
        $_SESSION['ID_USER'] = $row["ID_USER"];
        $user_id = $row["ID_USER"]; 

        // Récupérer le prénom de l'utilisateur
        $sql_get_name = "SELECT prenom FROM user WHERE ID_user = ?";
        $prepare_sql = mysqli_prepare($conn, $sql_get_name);
        if ($prepare_sql) {
            mysqli_stmt_bind_param($prepare_sql, 'i', $user_id);
            mysqli_stmt_execute($prepare_sql);
            mysqli_stmt_bind_result($prepare_sql, $name_user);
            if (mysqli_stmt_fetch($prepare_sql)) {
                $_SESSION['name_user'] = $name_user;
                mysqli_stmt_close($prepare_sql);
                header("Location: ../views/acceuil.php");
                exit();
            } else {
                header("Location: ../views/logIn.php");
            }
        } else {
            header("Location: ../views/logIn.php");
        }
    } else {
        header("Location: ../views/logIn.php");
        exit();
    }
    mysqli_stmt_close($stmt);
} else {
    header("Location: ../views/logIn.php");
}

mysqli_close($conn);
