<?php
require('../../partials/ConnDB.php');

if (isset($_POST)) {
    extract($_POST);
    $sql = "UPDATE Produits SET nom = '$nom', typeProduit = '$typeProduit', PRIX = $prix, Descrition = '$description' WHERE ID_produit = $id_produit";
    
    if (mysqli_query($conn, $sql)) {
        echo "Produit mis à jour avec succès";
    } else {
        echo "Erreur lors de la mise à jour du produit : " . mysqli_error($conn);
    }

    mysqli_close($conn);
}

header("Location: Dashbord.php");
exit();
?>
