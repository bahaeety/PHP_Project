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

    <div class="form">
    <ul class="tab-group">
      <li class="tab active"><a href="#signup">Sign Up</a></li>
      <li class="tab"><a href="#login">Log In</a></li>
    </ul>
    
    <div class="tab-content">
      <div id="signup">   
        <h1>Sign Up for Free</h1>
        
        <form action="../Controllers/form_process.php" method="post" class="needs-validation" novalidate>
        
          <div class="top-row">
            <div class="field-wrap">
              <label class="label_trans_def" for="validationCustom01">
                Prenom
              </label>
              <input type="text" class="form-control" id="validationCustom01" name="prenom" required autocomplete="off">
              <div class="valid-feedback">
                Parfait!
              </div>
              <div class="invalid-feedback">
                Entrez un prénom valide
              </div>
            </div>
        
            <div class="field-wrap">
              <label class="label_trans" for="validationCustom02">
                Nom
              </label>
              <input type="text" class="form-control" id="validationCustom02" name="nom" required autocomplete="off">
              <div class="valid-feedback">
                Parfait!
              </div>
              <div class="invalid-feedback">
                Entrez un nom valide
              </div>
            </div>
          </div>
  
          <div class="field-wrap">
            <label class="label_trans" for="validationCustom03">
              Email 
            </label>
            <input type="email" class="form-control" id="validationCustom03" name="email" required autocomplete="off">
            <div class="valid-feedback">
              Parfait!
            </div>
            <div class="invalid-feedback">
              Entrez un email valide
            </div>
          </div>
          
          <div class="field-wrap">
            <label class="label_trans" for="validationCustom04">
              Numero de telephone
            </label>
            <input type="text" class="form-control" id="validationCustom04" name="Numero_de_télé" required autocomplete="off">
            <div class="valid-feedback">
              Parfait!
            </div>
            <div class="invalid-feedback">
              Entrez un numéro de téléphone valide
            </div>
          </div>
  
          <div class="field-wrap">
            <label class="label_trans"for="validationCustom05">
              Adresse
            </label>
            <input type="text" class="form-control" id="validationCustom05" name="adresse" required autocomplete="off">
            <div class="valid-feedback">
              Parfait!
            </div>
            <div class="invalid-feedback">
              Entrez une adresse valide
            </div>
          </div>
  
          <div class="field-wrap">
            <label class="label_trans" for="validationCustom06">
              Nouveau mot de passe
            </label>
            <input type="password" class="form-control entrer_mot_de_passe" id="validationCustom06" name="entrer_mot_de_passe" required autocomplete="off">
            <div class="invalid-feedback">
              Entrez un mot de passe valide
            </div>
          </div>
  
          <div class="field-wrap">
            <label class="label_trans" for="validationCustom07">
              Confirmez votre mot de passe
            </label>
            <input  type="password" class="form-control confirmez_mot_de_passe" id="validationCustom07" name="confirmer_mot_de_passe" required autocomplete="off">
            <div class="invalid-feedback">
              Entrez un mot de passe valide
            </div>
            <div class="confirmation" style="display:none; color:red;">
              Les mots de passe ne sont pas conformes
            </div>
          </div>
          
          <div class="field-wrap">
            <div class="form-check">
              <input class="form-check-input" type="checkbox" value="" id="invalidCheck" required>
              <label class="label_trans" class="form-check-label" for="invalidCheck">
                Agree to terms and conditions
              </label>
              <div class="invalid-feedback">
                You must agree before submitting.
              </div>
            </div>
          </div>
          
          <button type="submit" class="button button-block"/>Sign Up</button>
        </form>
      </div>
      
      <div id="login">   
        <h1>Welcome Back!</h1>
        
        <form action="../Controllers/admin_process.php" method="post">
          <div class="field-wrap">
            <label for="loginEmail">
              Email Address<span class="req">*</span>
            </label>
            <input type="email" id="loginEmail" name="USER" required autocomplete="off"/>
          </div>
          
          <div class="field-wrap">
            <label for="loginPassword">
              Password<span class="req">*</span>
            </label>
            <input type="password" id="loginPassword" name="PWD" required autocomplete="off"/>
          </div>
          
          <p class="forgot"><a href="#">Forgot Password?</a></p>
          
          <button type="submit" class="button button-block"/>Log In</button>
        </form>

        <div id="emailErrorToast" class="toast align-items-center" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
        <strong class="me-auto">Message d'erreur</strong>
        <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
        <?php
        if (isset($_SESSION['erreur_email'])) {
            echo $_SESSION['erreur_email'];
            unset($_SESSION['erreur_email']); 
        }
        ?>
    </div>
</div>


      </div>
    </div>
  </div>
  

</body>
</html>