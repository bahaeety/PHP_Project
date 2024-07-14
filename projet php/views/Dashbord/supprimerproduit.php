<?php
    require('../../partials/ConnDB.php'); 

    if(isset($_POST)){

        extract($_POST);
        $sql = "DELETE FROM produits WHERE ID_produit = $ID_produit";
        
        if (mysqli_query($conn, $sql)) {
            echo "Produit supprimé avec succès";
        } else {
            echo "Erreur lors de la suppression du produit : " . mysqli_error($conn);
        }
    }   

    mysqli_close($conn);

    header("Location: Dashbord.php");
    exit();
?>
