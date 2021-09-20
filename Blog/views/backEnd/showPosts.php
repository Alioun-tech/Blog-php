<!DOCTYPE html>
<html lang="en">
<!---HEAD--->
<?php
include '../admin/inc/head.admin.inc.php';
?>
<!---FIN HEAD--->

<body>
    <!-- Navbar -->
    <?php
    include '../admin/inc/menu.admin.inc.php';
    ?>
    <!-- Navbar -->

    <div class="container py-5">
        <div>
            <div class="row justify-content-center">
                <div class="col-sm-8 col-md-6">
                    <h1>Article </h1>
                    <br>
                    <form action="" method="post">
                        <div class="form-group mb-3">
                            <label for="">Titre :</label><?php echo ' ' . $posts['titre']; ?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Chapo :</label><?php echo ' ' . $posts['chapo']; ?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Contenu :</label><br><?php echo ' ' . $posts['contenu']; ?>
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Date :</label><?php echo ' ' . $posts['date_posts']; ?>
                        </div>
                    </form>
                    <div>
                        <a class="btn btn-outline-primary" href="dashboard.php">Retour</a>
                    </div>
                </div>
                <div class="col-sm-3 col-md-6 image_post">
                    <img src=" <?php echo '../img/imag/' . $posts['image_post']; ?>" alt="">
                </div>
            </div>
        </div>
    </div>
    <!---FOOTER--->
    <?php
    include '../inc/footer.inc.php';
    ?>
    <!---FIN FOOTER--->

    <!---JS--->
    <?php
    include '../inc/javascript.inc.php';
    ?>
    <!---FIN JS--->
</body>

</html>