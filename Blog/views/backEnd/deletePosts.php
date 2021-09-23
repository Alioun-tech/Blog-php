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
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6">
                <div class="deletePost">
                    <h1 class="text-center py-3">Supprimer l'article</h1>
                    <form action="controllerListe/deletePosts/<?= $deleteData['id_Posts'] ?>" method="post">
                        <input type="hidden" name="id_Posts" value="<?=$deleteData['id_Posts']?>">
                        <div class="row">
                            <div class="form-group mb-4 alert-warning">
                                <p>Etes-vous sûr de bien vouloir supprimer cet article?</p>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Titre :</label><?php echo ' ' . $deleteData['titre']; ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Chapo :</label><?php echo ' ' . $deleteData['chapo']; ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Contenu :</label><br><?php echo ' ' . $deleteData['contenu']; ?>
                            </div>
                            <div class="form-group mb-3">
                                <label for="">Date :</label><?php echo ' ' . $deleteData['date_posts']; ?>
                            </div>
                            <div class="col-sm-3 col-md-6 image_post">
                                <img src=" <?php echo '../img/imag/' . $deleteData['image_post']; ?>" alt="">
                            </div>
                            <div class="form-group mb-4">
                                <br />
                                <button type="submit" class="btn btn-outline-warning" name="delete">Oui</button>
                                <a class="btn btn-outline-info" href="dashboard.php">Non</a>
                            </div>
                        </div>
                    </form>
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