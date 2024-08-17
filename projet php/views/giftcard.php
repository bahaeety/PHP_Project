<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gift cards</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer></script>
    <script src="../script1.js" defer></script>
</head>

<body class="bg-white">
    <?php session_start(); ?>
    <?php require('../partials/ConnDB.php') ?>
    <?php require('../partials/header.php') ?>
    <main class="container">
        <h1 class="text-center mt-3 text-dark display-2">Check your Gift Card balance</h1>
        <p class="text-center fs-3">
            Gift Cards can be in any denomination you want. <br>
            We can also add a personalized message to the gift card envelope. Simply checkmark the "Personalize?" option after you have added the card to your cart and we will take care of the rest. <br> <br>
            Gift Cards can be redeemed in-store and online, and never expire.
        </p>
        <div class="row row-cols-3">
            <div class="card bg-dark text-white m-5" style="width: 18rem;">
                <img src="../images/gift card 1.jpg" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Physical Gift Card</h5>
                    <p class="card-text">Type in your Gift Card number (found on the back of the card, right below the barcode) and hit go</p>
                    <br>
                    <span class="d-flex align-content-center justify-content-lg-evenly">
                    <button class=" btn-promo1 btn btn-outline-warning">Code Promo:</button>
                    <p  class=" promo-code1 ms-1 pt-3"></p>
                    
                    </span>
                </div>
            </div>
            <div class="card bg-danger text-white m-5" style="width: 18rem;">
                <img src="../images/gift card 2 .jpg" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Physical Gift Card</h5>
                    <p class="card-text">Type in your Gift Card number (found on the back of the card, right below the barcode) and hit go</p>
                    <span class="d-flex align-content-center justify-content-lg-evenly">
                    <button class=" btn-promo2 btn btn-outline-dark">Code Promo:</button>
                    <p  class=" promo-code2 ms-1 pt-3"></p>
                    </span>
                </div>
            </div>
            <div class="card bg-warning text-white m-5" style="width: 18rem;">
                <img src="../images/gifts card 3.jpg" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Physical Gift Card</h5>
                    <p class="card-text">Type in your Gift Card number (found on the back of the card, right below the barcode) and hit go</p>
                    <span class="d-flex align-content-center justify-content-lg-evenly">
                    <button class=" btn-promo3 btn btn-outline-danger">Code Promo:</button>
                    <p  class=" promo-code3 ms-1 pt-3"></p>
                    </span>
                </div>
            </div>
            <div class="card bg-success text-white m-5" style="width: 18rem;">
                <img src="../images/gifts card 4.jpg" class="card-img-top" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">Physical Gift Card</h5>
                    <p class="card-text">Type in your Gift Card number (found on the back of the card, right below the barcode) and hit go</p>
                    <span class="d-flex align-content-center justify-content-lg-evenly">
                    <button class=" btn-promo4 btn btn-outline-info">Code Promo:</button>
                    <p  class=" promo-code4 ms-1 pt-3"></p>
                    </span>
                </div>
            </div>
        </div>
    </main>
    <?php require('../partials/footer.php') ?>
    <script defer>
    <?php 
    $sql = "SELECT * FROM promo_codes";
    $result = mysqli_query($conn, $sql);

    if ( mysqli_num_rows($result) > 0) {
        $i = 1;
        while ($row = mysqli_fetch_assoc($result)) {
            $code = $row['code'];
            echo "
            document.querySelector('.btn-promo$i').addEventListener('click', function() {
                document.querySelector('.promo-code$i').textContent = '$code';
                this.disabled = true;
            });";
            $i++;
        }
    }
    ?>
    </script>
</body>

</html>