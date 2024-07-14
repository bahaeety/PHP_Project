<?php
require('../../partials/ConnDB.php');

$ID_produit = $_POST['ID_produit'];

// Récupérer les informations du produit à modifier
$sql = "SELECT * FROM Produits WHERE ID_produit = $ID_produit";
$result = mysqli_query($conn, $sql);

if ($result && mysqli_num_rows($result) > 0) {
    $produit = mysqli_fetch_assoc($result);
} else {
    echo "Produit non trouvé";
    exit();
}

mysqli_close($conn);
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Modifier Produit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
</head>

<body class="bg-dark text-white">
    <div class="container mt-5">
        <div class="d-flex justify-content-center">
            <h2>Modifier Produit</h2>
        </div>
        <form method="post" action="update.php">
            <input type="hidden" name="id_produit" value="<?= $produit['ID_produit'] ?>">
            <div class="form-group">
                <label for="nom">Nom</label>
                <input type="text" class="form-control" id="nom" name="nom" value="<?= $produit['nom'] ?>" required>
            </div><br>
            <div class="form-group">
                <label for="typeProduit">Type Produit</label>
                <input type="text" class="form-control" id="typeProduit" name="typeProduit" value="<?= $produit['typeProduit'] ?>" required>
            </div><br>
            <div class="form-group">
                <label for="prix">Prix</label>
                <input type="number" step="0.01" class="form-control" id="prix" name="prix" value="<?= $produit['PRIX'] ?>" required>
            </div><br>
            <div class="form-group">
                <label for="description">Description</label>
                <textarea class="form-control" id="description" name="description" required><?= $produit['Descrition'] ?></textarea>
            </div><br>
            <div class="d-flex justify-content-center">
                <button type="submit" class="btn btn-primary">Mettre à jour</button>
            </div>
        </form>
    </div>
</body>

</html>