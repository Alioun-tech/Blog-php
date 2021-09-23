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

        <div class="container">
            <div class="form-register">

                <form method="post" action="controller/addOneUser">
                    <h2 class="text-center pb-5">Inscription</h2>
                    <p>Bienvenue sur mon site, pour en voir plus inscrivez-vous. Sinon <a href="login.php">connectez-vous</a>.</p>

                    <!-- Pseudo input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="pseudo" class="form-control" placeholder="Pseudo" aria-label="Pseudo" required />
                    </div>

                    <!-- Name input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="nom" class="form-control" placeholder="Nom" required />
                    </div>

                    <!-- Username input -->
                    <div class="form-outline mb-4">
                        <input type="text" name="prenom" class="form-control" placeholder="Prénom" required />
                    </div>

                    <!-- Email input -->
                    <div class="form-outline mb-4">
                        <input type="email" name="mail" class="form-control" placeholder="Email" required />
                    </div>

                    <!-- Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password" class="form-control" placeholder="Mot de passe" required />
                    </div>

                    <!-- Repeat Password input -->
                    <div class="form-outline mb-4">
                        <input type="password" name="password_confirm" class="form-control" placeholder="Confirmer Mot de passe" required />
                    </div>

                    <!-- Checkbox -->
                    <div class="form-check d-flex justify-content-center mb-4">
                        <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked aria-describedby="registerCheckHelpText" />
                        <label class="form-check-label" for="registerCheck">
                            J'ai lu et j'accepte les conditions
                        </label>
                    </div>

                    <!-- Submit button -->
                    <button type="submit" name="register" class="btn btn-primary btn-block mb-3">Valider</button>
                </form>
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