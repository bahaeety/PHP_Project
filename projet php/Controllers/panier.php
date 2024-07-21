<?php
session_start();
         require('../partials/ConnDB.php') ;
    extract($_GET);
    extract($_POST);
    if(isset($_SESSION['ID_USER'])&&isset($ID_produit)){
        $id_user = $_SESSION['ID_USER'];
        $fetch_added_product = "SELECT * FROM panier WHERE ID_produit = ? AND ID_user = ?";
        $row = mysqli_prepare($conn,$fetch_added_product);
        mysqli_stmt_bind_param($row,"ii",$ID_produit,$id_user);
        mysqli_stmt_execute($row);
        $result = mysqli_stmt_get_result($row);
         if(mysqli_num_rows($result) > 0){
            $add_more = "UPDATE panier SET quantity = quantity + 1 WHERE  ID_produit = ? AND ID_user = ?";
            $row = mysqli_prepare($conn,$add_more);
            mysqli_stmt_bind_param($row,"ii",$ID_produit,$id_user);
            mysqli_stmt_execute($row);
            mysqli_stmt_close($row);
            header("location: ../views/$redirect");

         }
         else{
            $add = "INSERT INTO panier (ID_produit,ID_user,quantity) VALUES (?,?,1)";
            $row = mysqli_prepare($conn,$add);
            mysqli_stmt_bind_param($row,"ii",$ID_produit,$id_user);
            mysqli_stmt_execute($row);
            mysqli_stmt_close($row);
            header("location: ../views/$redirect");

            }
    }
    else{
      header("location: ../views/LogIn.php");
    }
    mysqli_close($conn);

    ?>