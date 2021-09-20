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
    <div class="jumbotron">
      <h1 class="display-4">Hello, world!</h1>
      <p class="lead">
        This is a simple hero unit, a simple jumbotron-style component for
        calling extra attention to featured content or information.
      </p>
      <hr class="my-4" />
      <p>
        It uses utility classes for typography and spacing to space content
        out within the larger container.
      </p>
      <p class="lead">
        <a class="btn btn-primary btn-lg" href="portfolio.php" role="button">Learn more</a>
      </p>
    </div>

    <div class="row">
      <?php
      if (isset($message)) echo $message;
      while ($post = $posts->fetch()) {  ?>

        <div class="card mb-3 py-2 m-2" style="max-width: 540px;">
          <div class="row g-0">
            <div class="col-md-5">
                <img src=" <?= './img/imag/' . $post['image_post']; ?>" class="image_index" alt="">
            </div>
            <div class="col-md-7">
              <div class="card-body">
                <h5 class="card-title"><?= $post['titre'] ?></h5>
                <h6 class="card-text"><?= $post['chapo'] ?></h6>
                <p class="card-text"><?=substr($post['contenu'],0, 200). "..."  ?></p>
                <p class="card-text"><small class="text-muted"> le <?= $post['date_post'] ?></small></p>
                <!-- <p class="card-text"><small class="text-muted"><?= $post['id_User'] ?></small></p> -->
              </div>
                <div class="float-end">
                    <a href="controller/getOneArticle/<?= $post['id_Posts'] ?>" class="btn btn-success">Lire l'article</a>
                </div>
            </div>
          </div>
        </div>
      <?php }
      ?>
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