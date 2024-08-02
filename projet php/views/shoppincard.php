<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Shopping Card</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="../script1.js" defer></script>
</head>

<body>
    <?php

use App\PayPalPayment;

 session_start();
    $total = 0;
    require('../partials/header.php') ;
     require('../partials/ConnDB.php') ;?>
    <main class="container">
        <h1 class="text-dark display-0 text-center mt-2">Shopping Card</h1>


        <div class="container mt-5">
            <h2 class="mb-4 mb-5">Shopping Cart</h2>
            <table class="table table-bordered mb-5">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Nom du produit</th>
                        <th>Quantité</th>
                        <th colspan="2">Prix</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    if (isset($_SESSION['ID_USER'])) {
                        $user = $_SESSION['ID_USER'];
                        $sql = "SELECT Produits.nom, Produits.PRIX, Produits.Sourceimg, Panier.quantity,Panier.ID_produit
                    FROM Panier 
                    JOIN Produits ON Produits.ID_produit = Panier.ID_produit 
                    WHERE Panier.ID_user = ?";
                        $stmt = mysqli_prepare($conn, $sql);
                        if ($stmt) {
                            mysqli_stmt_bind_param($stmt, "i", $user);
                            mysqli_stmt_execute($stmt);
                            $result = mysqli_stmt_get_result($stmt);

                            if (mysqli_num_rows($result) > 0) {
                                while ($row = mysqli_fetch_assoc($result)) {
                    ?>
                                    <tr>
                                        <td><img src="<?= $row["Sourceimg"] ?>" style="width: 100px; height: 100px" alt="Product Image"></td>
                                        <td><?= $row["nom"] ?></td>
                                        <td>
                                            <div class="input-group">
                                                <div class="input-group-prepend">
                                                    <form method="post" action="../Controllers/retrancheQuantity.php" style="display:inline;">
                                                        <input type="hidden" name="ID_produit" value="<?= $row['ID_produit'] ?>">
                                                        <input type="hidden" name="ID_user" value="<?= $user ?>">
                                                        <button class="btn btn-outline-secondary" type="submit">-</button>
                                                    </form>
                                                </div>
                                                <input type="text" class="form-control text-center" value="<?= $row["quantity"] ?>" readonly>
                                                <div class="input-group-append">
                                                    <form method="post" action="../Controllers/ajoutQuantuty.php" style="display:inline;">
                                                        <input type="hidden" name="ID_produit" value="<?= $row['ID_produit'] ?>">
                                                        <input type="hidden" name="ID_user" value="<?= $user ?>">
                                                        <button class="btn btn-outline-secondary" type="submit">+</button>
                                                    </form>
                                                </div>
                                            </div>
                                        </td>
                                        <td><?= $row["PRIX"] ?></td>
                                        <td>
                                            <form method="post" action="../Controllers/SupprimerQunatity.php" style="display:inline;">
                                                <input type="hidden" name="ID_produit" value="<?= $row['ID_produit'] ?>">
                                                <input type="hidden" name="ID_user" value="<?= $user ?>">
                                                <button class="btn btn-danger" type="submit">Supprimer</button>
                                            </form>
                                        </td>
                                    </tr>
                    <?php $total += $row["quantity"] * $row["PRIX"];
                                }
                            }
                        }
                    } ?>
                </tbody>
                <tfoot>
                    <tr>
                        <td class="table-info" colspan="3">Total</td>
                        <td class="d-flex justify-content-between"><form action="<?= $_SERVER["PHP_SELF"]?>" method="post" class="g-3" ><input id="input_promo" class="form-control" name="code_promo" type="text" ></form>
                            <button id="cancel_promo_code" class="btn btn-close"></button></td>
                        <td colspan="2">
                            <script defer>
                            
                            document.getElementById('cancel_promo_code').addEventListener('click', function() {
        $.ajax({
            type: 'POST',
            url: '<?= htmlspecialchars($_SERVER["PHP_SELF"]); ?>',
            data: { reset_promo: true },
            success: function() {
                location.reload();
            }
        });
    });
                                </script>
                        <?php
                        extract($_POST);
                        if ($_SERVER["REQUEST_METHOD"] == "POST") {
                            if (isset($_POST['reset_promo'])) {
                                unset($_SESSION['promo_reduction']);
                                echo "<script>location.reload();</script>";
                            } else if (isset($_POST['code_promo'])) {
                                $code_promo = mysqli_real_escape_string($conn, $_POST['code_promo']);
                                $sql = "SELECT * FROM promo_codes WHERE code = '$code_promo'";
                                $result = mysqli_query($conn, $sql);
                                if ($result && mysqli_num_rows($result) > 0) {
                                    $row = mysqli_fetch_assoc($result);
                                    $_SESSION['promo_reduction'] = $row["pourcentage"];
                                    echo "<script>document.getElementById('input_promo').disabled = true;</script>";
                                }
                            }
                        }
            
                        if (isset($_SESSION['promo_reduction'])) {
                            $total = $total - ($total * $_SESSION['promo_reduction']) / 100;
                            echo "<script>document.getElementById('input_promo').disabled = true;</script>";
                        }
                        echo $total;
                        ?> $</td>
                    </tr>
                </tfoot>
            </table>
        </div>
        
       <?php
       
        
       if($total > 0){
       require('../Controllers/payment.php');
       $total = 100; 
       $payment = new App\PayPalPayment();
       echo $payment->ui($total);
       }
       ?>
        <?php
        mysqli_close($conn);
        ?>
    </main>
    <?php require('../partials/footer.php') ?>
</body>

</html>