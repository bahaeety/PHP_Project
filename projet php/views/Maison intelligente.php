<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maison intelligente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer ></script>
<script src="../script1.js" defer></script>
    <link rel="stylesheet" href="../test.css">
</head>
<body>
    <?php require( '../partials/header.php' ) ?>
<main class="container">
<h1 class="nouveaute-titre">Quoi de neuf dans la gamme HARMONY HOME</h1>
<br>
<div>
<h3 class="nouveaute-titre">Laissez-vous inspirer par la nature: </h3>
<p class="para-titre">Pourquoi laisser les fleurs et les formes organiques à l’extérieur quand vous pouvez les ramener à l’intérieur ?<br> Il suffit de quelques clics pour que l’ambiance estivale reste fluide.</p>
</div>
<?php require( '../partials/ConnDB.php' ) ?>
<?php
    $sql = "SELECT nom,PRIX,Sourceimg,Descrition FROM Produits where typeProduit ='Maisonintelligente' ";
    $result = mysqli_query($conn, $sql);
    if (mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_assoc($result)) { ?>
    <div class="card d-inline-block m-5" style="width: 18rem;">
    <img src="<?=$row["Sourceimg"] ?>"  class="card-img-top" alt="...">
    <div class="card-body">
        <h5 class="card-title"><?= $row["nom"] ?></h5>
        <h5 class="card-title text-warning"><?= $row["PRIX"].' $' ?></h5>
        <p class="card-text"><?= $row['Descrition'] ?></p>
        <a href="#"><img class="iconPanier" src="../images/panierIcon.png" alt="acheter"></a>
    </div> 
    </div>
<?php }} ?>
<?php
    mysqli_close($conn);
?>

</main>    
</body>
</html>