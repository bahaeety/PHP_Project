<?php
    require('../partials/ConnDB.php'); 

    if(isset($_POST)){
        extract($_POST);
        $sql = " DELETE FROM Panier WHERE ID_produit =$ID_produit  AND ID_user = $ID_user";
        mysqli_query($conn, $sql);
    }   

    mysqli_close($conn);

    header("Location: ../views/shoppincard.php");
    exit();
?>
