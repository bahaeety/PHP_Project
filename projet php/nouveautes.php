<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>acceuil</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer ></script>
<script src="script1.js" defer></script>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <?php require( 'partials/header.php' ) ?>
<main class="container">
<h1 class="nouveaute-titre">Quoi de neuf dans la gamme HARMONY HOME</h1>
<br>
<div>
<h3 class="nouveaute-titre">Laissez-vous inspirer par la nature: </h3>
<p class="para-titre">Pourquoi laisser les fleurs et les formes organiques à l’extérieur quand vous pouvez les ramener à l’intérieur ?<br> Il suffit de quelques clics pour que l’ambiance estivale reste fluide.</p>
</div>
<?php
$tab = [
    ['img' => './images-nouveautes/helmer-drawer-unit-on-casters-yellow__1277402_pe931097_s5.avif', 'titre' => 'produit1' , 'description' => 'description1'],
    ['img' => './images-nouveautes/murreva-pre-cut-fabric-multicolor__1276284_pe930898_s5.jpg', 'titre' => 'produit2' , 'description' => 'description2']
    
    ];
foreach($tab as $item ) {  ?>
<div class="card d-inline-block" style="width: 18rem;">
  <img src=<?php echo $item['img'] ?>  class="card-img-top" alt="...">
  <div class="card-body">
    <h5 class="card-title"><?php echo $item['titre'] ?></h5>
    <p class="card-text"><?php echo $item['description'] ?></p>
    <a href="#" class="btn btn-primary">acheter</a>
  </div>
</div>
<?php } ?>

</main>    
</body>
</html>