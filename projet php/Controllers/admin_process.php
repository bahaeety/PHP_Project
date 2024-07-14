<?php
require("../partials/ConnDB.php");
session_start();
extract($_POST);
if($USER === "admin@gmail.com" && $PWD === "admin"){
    $_SESSION["authentification"] = "admin";
    header("Location: ../views/Dashbord/Dashbord.php");
    exit();
}