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
        header("Location: ../views/acceuil.php");
    } else {
        header("Location: ../views/logIn.php");
    }
}
else{
    header("Location: ../views/logIn.php");
}
