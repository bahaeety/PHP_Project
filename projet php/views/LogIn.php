<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Sign UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="../style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer ></script>
<script src="../script1.js" defer></script>
    <link rel="stylesheet" href="test.css">
</head>
<body>
    <?php require( '../partials/header.php' ) ?>

    <div class="container col-6 my-lg-5">  
        <form action="">
        <h3 class="text-center text-dark">Log In</h3>
        <div class="input-group mb-3">
            <input type="text" class="form-control" placeholder="Gmail" aria-label="Gmail" aria-describedby="basic-addon2">
            <span class="input-group-text" id="basic-addon2">@gmail.com</span>
        </div>
        <div class=" input-group mb-3">
            <span class="input-group-text" id="basic-addon1">Password</span>
            <input type="Password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        <div class="d-flex justify-content-center mb-3">
            <button class="btn btn-outline-success">Log in</button>
        </div>
        </form>


        <form action="">
        <h3 class="text-center text-dark">Sign In</h3>
        <div class="mb-3">
        <label for="basic-url" class="form-label">Your email</label>
        <div class="input-group">
            <input type="text" class="form-control" id="basic-url" aria-describedby="basic-addon3 basic-addon4">
            <span class="input-group-text" id="basic-addon3">@gmail.com</span>
        </div>
        <div class="form-text" id="basic-addon4">You can only sign up with Gmail</div>
        </div>
        
        <div class=" input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Password</span>
        <input type="Password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        <div class=" input-group mb-3">
        <span class="input-group-text" id="basic-addon1">Confirm your Password</span>
        <input type="Password" class="form-control" placeholder="Password" aria-label="Password" aria-describedby="basic-addon1">
        </div>
        
        <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="FirstName" aria-label="Username">
        <span class="input-group-text">&&</span>
        <input type="text" class="form-control" placeholder="LastName" aria-label="Server">
        </div>
        
        <div class="input-group">
        <span class="input-group-text">Dicription</span>
        <textarea class="form-control" aria-label="With textarea"></textarea>
        </div>
        <div class="d-flex justify-content-center mt-3">
        <button class="btn btn-outline-success">Sign in</button>
        </div>
        </form>
    </div>

</body>
</html>