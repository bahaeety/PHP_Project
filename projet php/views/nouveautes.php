<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>nouveautes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer ></script>
<script src="../script1.js" defer></script>
</head>
<body>
    <?php require( '../partials/header.php' ) ?>
<main class="container">
<h1 class="text-dark display-0 text-center mt-2">nouveautes</h1>
        <br>
        <div>
            <h3 class="nouveaute-titre">Nos articles préférés à prix réduits</h3>
            <p >
                Nous travaillons fort tous les jours pour maintenir des prix aussi bas que possible pour vous. Pour vous aider à tirer le meilleur de votre maison, nous baissons le prix de nos articles les plus populaires. 
                Avec la qualité et le style que vous recherchez à un prix abordable, vous pourrez faire de votre maison de rêve une réalité.
            </p>
        </div>
<?php require( '../partials/ConnDB.php' ) ?>
<?php
    $sql = "SELECT nom,PRIX,Sourceimg,Descrition FROM Produits where typeProduit ='Nouveautés' ";
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
<?php require( '../partials/footer.php' ) ?>
</body>
</html>