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
    include '.inc/menu.admin.inc.php';
    ?>
    <!-- Navbar -->
    <div class="container py-5">
        <div class="row">
            <h2 class="text-center">Liste des Articles</h2>

            <table class="table">
                <thead>
                    <tr>
                        <th>Titre</th>
                        <th>Chapo</th>
                        <th>Image</th>
                        <th>Date</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                     while ($item = $posts->fetch()) { ?>
                        <tr>
                            <td> <?= $item['titre'] ?></td>
                            <td> <?= $item['chapo'] ?></td>
                            <td> <?= $item['image_post'] ?></td>
                            <td> <?= $item['date_post'] ?></td>
                            <td>
                                <a class="btn btn-secondary" href="showPosts.php?action=<?= $item['id_Posts'] ?>">Voir</a>
                                <a class="btn btn-success" href="updatePosts.php?action=<?= $item['id_Posts'] ?>">Modifier</a>
                                <a class="btn btn-danger" href="deletePosts.php?action=<?= $item['id_Posts'] ?>">Suprimer</a>
                            </td>
                        </tr>
                    <?php }
                    ?>
                </tbody>
            </table>
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