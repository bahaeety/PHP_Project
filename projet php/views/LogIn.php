<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In / Sign UP</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" defer ></script>
    <link rel="stylesheet" href="../form.css">
    <script src="../form.js" defer></script>
    </head>
<body>
<div class="container container-form">
    <span class="span-header">
    <a class="retour" href="acceuil.php">Retour</a>
      <header id="form-header">Sign-up</header>
     
      </span>
        <form id="form-signup" action="../Controllers/form_process.php" method="post" >
        <div class="field name-field">
            <div class="name">
                <div class="input-field">
                    <input name="prenom" type="text" placeholder="Enter your first-name" class="input_name">
                    <p class="error name-error">
                    <i class='bx bx-error-circle error-icon'></i>
                    <span class="error-text">Please enter a valid text</span>
                </p>
                </div>
                <div class="input-field">
                    <input name="nom" type="text" placeholder="Enter your last-name" class="input_name">
                    <p class="error name-error">
                    <i class='bx bx-error-circle error-icon'></i>
                    <span class="error-text">Please enter a valid text</span>
                </p>
                </div>
            </div>
            </div>
            <div class="field email-field">
                <div class="input-field">
                    <input name="email" type="email" placeholder="Enter your email" class="email">
                </div>
                <p class="error email-error">
                    <i class='bx bx-error-circle error-icon'></i>
                    <span class="error-text">Please enter a valid email</span>
                </p>
            </div>
            <div class="field create-password">
                <div class="input-field">
                    <input name="entrer_mot_de_passe" type="password" placeholder="Create Password" class="password">
                    <i class='bx bx-hide show-hide'></i>
                </div>
                <p class="error password-error">
                    <i class='bx bx-error-circle error-icon'></i>
                    <span class="error-text">Please enter at least 8 character with number, symbol, small and capital letter.</span>
                </p>
            </div>
            <div class="field confirm-password">
                <div class="input-field">
                    <input name="confirmer_mot_de_passe" type="password" placeholder="Confirm Password" class="cPassword">
                    <i class='bx bx-hide show-hide'></i>
                </div>
                <p class="error cPassword-error">
                    <i class='bx bx-error-circle error-icon'></i>
                    <span class="error-text">Password don't match</span>
                </p>
            </div>
            <div class="field address-field">
                <div class="input-field">
                  <input name="adresse" type="text" placeholder="Enter your address" class="address">
                </div> 
                <p class="error address-error">
                  <i class='bx bx-error-circle error-icon'></i>
                  <span class="error-text">Please enter a valid address</span>
                </p>
              </div>
              <div class="field phone-field">
                <div class="input-field">
                  <input name="Numero_de_télé" type="text" placeholder="Enter your phone number" class="phone">
                </div>
                <p class="error phone-error">
                  <i class='bx bx-error-circle error-icon'></i>
                  <span class="error-text">Please enter a valid phone number</span>
                </p>
              </div>
            <div class="input-field button">
                <input type="submit" value="Submit Now">
            </div>
        </form>
        <form id="login-form" action="../Controllers/admin_process.php"   style="display: none;">
            <div class="field email-field">
                <div class="input-field">
                    <input type="email" placeholder="Enter your email" class="email" name="USER">
                </div>
                <p class="error email-error">
                    <i class='bx bx-error-circle error-icon'></i>
                    <span class="error-text">Please enter a valid email</span>
                </p>
            </div>
            <div class="field create-password">
                <div class="input-field">
                    <input type="password" placeholder="Enter Password" class="password" name="PWD">
                    <i class='bx bx-hide show-hide'></i>
                </div>
                <p class="error password-error">
                    <i class='bx bx-error-circle error-icon'></i>
                    <span class="error-text">Please enter your password</span>
                </p>
            </div>
            <div class="input-field button">
                <input type="submit" value="Login Now">
            </div>
        </form>
        <div class="switch">
            <span id="switch-to-login">Already have an account? Log in</span>
            <span id="switch-to-signup" style="display: none;">Don't have an account? Sign up</span>
        </div>
   
</div>


      </div>
    </div>
  </div>


</body>
</html>