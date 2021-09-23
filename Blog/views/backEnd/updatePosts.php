<!DOCTYPE html>
<html lang="en">
<!---HEAD--->
<?php
include './inc/head.admin.inc.php';
?>
<!---FIN HEAD--->

<body>
    <!-- Navbar -->
    <?php
    include './inc/menu.admin.inc.php';
    ?>
    <!-- Navbar -->
    <div class="container py-5">
        <div>
            <div class="row justify-content-center">
                <div class="pb-5">
                <h1 class="text-center">Modifier l'article </h1>
                </div>
                <form action="" method="post" enctype="multipart/form-data">
                    <div class="row">
                        <input type="hidden" value="<?php echo' ' . $_GET['action'];?>">
                <div class="col-sm-8 col-md-6">
                    <br>
                        <div class="form-group mb-3">
                            <label for="">Titre :</label>
                            <input type="text" name="titre" id="titre" class="form-control" value="<?php echo ' ' . $updateData['titre']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Chapo :</label>
                            <input type="text" name="chapo" id="chapo" class="form-control" value="<?php echo ' ' . $updateData['chapo']; ?>">
                        </div>
                        <div class="form-group mb-3">
                            <label for="">Contenu :</label>
                            <textarea id="contenu" class=" form-control" name="contenu" style="height: 100px"><?php echo ' ' . $updateData['contenu']; ?></textarea>
                        </div>


                    <div>
                        <a class="btn btn-outline-primary" href="dashboard.php">Retour</a>
                        <button type="submit" class="btn btn-outline-secondary" name="submit">Modifier</button>
                    </div>
                </div>
                <div class="col-sm-4 col-md-6">
                    <img src=" <?php echo '../img/imag/' . $updateData['image_post']; ?>" class="image_update" alt="">
                    <div class="col-sm-3 col-md-6 py-2">
                        <label for="image_post" class="form-label">Modifier image :</label>
                        <input type="file" class="form-control" id="image_post" name="image_post" value="<?php echo ' ' . $updateData['image_post']; ?>" />
                    </div>
                </div>
                    </div>
                </form>
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