<?php
/*
if (!empty($_POST)) {

    $titre        =  $_POST['titre'];
    $chapo        =  $_POST['chapo'];
    $contenu      =  $_POST['contenu'];
    $date         =  $_POST['date_post'];
    $auteur       =  $_POST['id_User'];
    $image        =  $_FILES['image_post']['name'];
    $imagePath    =  '../img/imag' . basename($image);
    $extensions   = pathinfo($imagePath, PATHINFO_EXTENSION);


    if (!empty($image)) {
        if (file_exists($imagePath)) {
            $imageError = "Le fichier existe déjà";
        }
        if ($_FILES["image_post"]["size"] > 600000) {
            $sizeError = "Le fichier ne doit pas dépasser 600000";
        }
    }

    $req = $db->prepare("INSERT INTO posts (titre, chapo, contenu, image_post, date_post, id_User)
                            VALUES(?,?,?,?,?,?)");
    $req->execute(array($titre, $chapo, $contenu, $image, $date, $auteur));
    header("Location: ./dashboard.php");

}
*/
?>

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
        <div class="row justify-content-center">
            <div class="col-sm-8 col-md-6">
                <div class="addPost">
                    <h1 class="text-center py-3">Créer un Article</h1>
                    <form action="acceuil.php?action=controllerListe/addOneArticle" method="post" enctype="multipart/form-data">
                        <div class="row">
                            <div class="form-group mb-4">
                                <label for="titre">Titre de l'article :</label>
                                <input type="text" class=" form-control" name="titre" id="titre"  />
                            </div>
                            <div class="form-group mb-4">
                                <label for="chapo">Chapo de l'article :</label>
                                <input type="text" class=" form-control" name="chapo" id="chapo"/>
                            </div>

                            <div class="form-group mb-4">
                                <label for="contenu">Contenu de l'article :</label>
                                <textarea id="contenu" class=" form-control" name="contenu" style="height: 100px"></textarea>
                            </div>

                            <div class="form-group mb-4">
                                <label for="image_post" class="form-label">Charger une image :</label>
                                <input type="file" class="form-control" id="image_post" name="image_post" />
                            </div>

                            <div class="form-group mb-4">
                                <label for="date_post">Date :</label>
                                <input type="datetime-local" class=" form-control" name="date_post" id="date_post" />
                            </div>

                            <div class="form-group mb-4">
                                <label for="id_User"></label>
                                <select class="form-control" name="id_User" id="id_User">
                                    <option> Auteur Article : </option>
                                    <?php
                                    $db = Database::connect();
                                    $req = $db->query("SELECT * FROM user WHERE type = 'admin'")->fetchAll();
                                    foreach ($req as $row) { ?>
                                        <option value="<?= $row['id_User'] ?>"> <?= $row['pseudo'] ?> </option>
                                    <?php }
                                    ?>
                                </select>
                            </div>

                            <div class="form-group mb-4">
                                <br /><br />
                                <button type="submit" class="btn btn-outline-secondary" name="submit">Créer l'article</button>
                                <a class="btn btn-outline-primary" href="dashboard.php">Retour</a>
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