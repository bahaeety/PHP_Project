<?php
    require('../partials/ConnDB.php'); 

    if(isset($_POST)){

        extract($_POST);
        $sql = "UPDATE Panier SET quantity = quantity + 1 WHERE ID_produit = $ID_produit AND ID_user = $ID_user";
        mysqli_query($conn, $sql);
    }   

    error_log("une erreur est survenue: " + mysqli_error($conn),0);

    mysqli_close($conn);

    header("Location: ../views/shoppincard.php");
    exit();
?>
