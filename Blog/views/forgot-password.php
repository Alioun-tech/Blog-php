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

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row justify-content-center">                          
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-2">Mot de passe oublié?</h1>
                                        <p class="mb-4">Entrez simplement votre adresse e-mail ci-dessous
                                            et nous vous enverrons un lien pour réinitialiser votre mot de passe !</p>
                                    </div>
                                    <form class="user">
                                        <div class="form-group">
                                            <input type="email" class="form-control form-control-user"
                                                id="exampleInputEmail" aria-describedby="emailHelp"
                                                placeholder="Adresse Mail....">
                                        </div>
                                        <hr>
                                        <a href="login.html" class="btn btn-primary btn-user btn-block">
                                            envoyer le lien
                                        </a>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
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