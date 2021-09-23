<!DOCTYPE html>
<html lang="en">
<!---HEAD--->
<?php
include './inc/head.inc.php';
?>
<!---FIN HEAD--->

<body>
  <div class="container">
    <!---HEADER--->
    <?php
    include './inc/header.inc.php';
    ?>
    <!---FIN HEADER--->

    <div class="container p-5">
      <div class="row justify-content-center">
        <div class="col-sm-8 col-md-6">
          <h1 class="text-center login-title">Se Connecter</h1>
          <div class="account-wall">
            <img class="profile-img" src="../img/logo/user.png" alt="">
            <form class="form-signin" method="POST" action="controller/connected">
              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" required />
              </div>

              <!-- Email input -->
              <div class="form-outline mb-4">
                <input type="email" name="mail" class="form-control" placeholder="Email" required />
              </div>

              <!-- Password input -->
              <div class="form-outline mb-4">
                <input type="password" name="password" class="form-control" placeholder="Mot de passe" required />
              </div>

              <!-- 2 column grid layout for inline styling -->
              <div class="row mb-4">
                <div class="col d-flex justify-content-center">
                  <!-- Checkbox -->
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="form1Example3" checked />
                    <label class="form-check-label" for="form1Example3"> Se souvenir </label>
                  </div>
                </div>

                <div class="col">
                  <!-- Simple link -->
                  <a href="#!">Mot de passe oublié?</a>
                </div>
              </div>

              <!-- Submit button -->
              <div class="d-grid gap-2">
                <button type="submit" class="btn btn-primary btn-block" name="connexion">S'identifier</button>
              </div>

              <div class="text-center pt-5">
                <p>Pas encore membre? <a href="controller/addOneUser">Créer un compte</a></p>

              </div>
            </form>
          </div>
        </div>
      </div>
    </div>

    <!---JS--->
    <?php
    include './inc/javascript.inc.php';
    ?>
    <!---FIN JS--->
  </div>

  <!---FOOTER--->
  <?php
  include './inc/footer.inc.php';
  ?>
  <!---FIN FOOTER--->
</body>

</html>