<?php
    require('../../partials/ConnDB.php'); 

    if(isset($_POST)){

        extract($_POST);
        $sql0 = "DELETE FROM Panier WHERE ID_user = $ID_user";
        mysqli_query($conn, $sql0);
        $sql = "DELETE FROM user WHERE ID_user = $ID_user";
        
        if (mysqli_query($conn, $sql)) {
            echo "user supprimé avec succès";
        } else {
            echo "Erreur lors de la suppression du user : " . mysqli_error($conn);
        }
    }   

    mysqli_close($conn);

    header("Location: Dashbord.php");
    exit();
?>
