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
    </div>

    <div class="container_fluid">
        <!---MENU--->
        <?php
        include './inc/menu.inc.php';
        ?>
        <!---FIN MENU--->
    </div>
    <div class="container">
        <div class="container bg-light">
            <div class="article py-4 ">
                <div class="row">
                    <div class="row g-0">
                        <div class="col-md-12">
                            <img src=" <?= '../img/imag' .$article['image_post']; ?>" class="img-thumbnail image_article" alt="">
                        </div>
                        <div class="col-md-12">
                            <div>
                                <h1 class="text-center py-2"><?= $article['titre'] ?></h1>
                                <?php
                                var_dump($article);
                                ?>
                            </div>
                            <hr>
                            <div>
                                <h6 class="text-center"><?= $article['chapo'] ?></h6>
                            </div>
                            <hr>
                            <div>
                                <p class="contenu_article"><?= $article['contenu'] ?></p>
                            </div>

                            <div>
                                <p><small class="text-muted"><?= $article['date_post'] ?></small></p>
                            </div>

                            <div>
                        
                                <h4><?= $nb_comments; var_dump($nb_comments);?> Commentaires</h4>
                            </div>
                            <hr>
                            <div class="py-4 bg-gradient">
                                <?php
                                while ($commentaires = $comments->fetch()) { ?>
                                    <div class="form-group mb-3">
                                        <label class="comment-content"> <?= $commentaires['id_User'] ?> </label>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="comment-content"> <?= $commentaires['contenu'] ?> </label>
                                    </div>
                                    <div class="form-group mb-3">
                                        <label class="comment-content"> <?= $commentaires['date_com'] ?> </label>
                                    </div>
                                <?php }
                                ?>
                            </div>

                            <form action="" method="post">
                                <div class="py-2">
                                    <input type="text" class=" form-control" name="pseudo" placeholder="Votre pseudo" /><br />
                                    <label for="comment" class="py-2">Commentaires :</label>
                                    <textarea id="comment" class=" form-control" name="comment" style="height: 100px"></textarea>
                                </div>
                                <div class="float-end py-1">
                                    <button class="btn btn-success" name="submit_commentaire">Envoyer</button>
                                </div>
                            </form>

                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!---FOOTER--->
    <?php
    include './inc/footer.inc.php';
    ?>
    <!---FIN FOOTER--->

    <!---JS--->
    <?php
    include './inc/javascript.inc.php';
    ?>
    <!---FIN JS--->
</body>

</html>