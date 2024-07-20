<?php
    require('../partials/ConnDB.php'); 

    if(isset($_POST)){

        extract($_POST);
        $sql = "UPDATE Panier SET quantity = quantity + 1 WHERE ID_produit = $ID_produit AND ID_user = $ID_user";
        mysqli_query($conn, $sql);
    }   

    mysqli_close($conn);

    header("Location: ../views/shoppincard.php");
    exit();
?>
