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

    <!---CONTENU--->
    <div class="container">

      <?php if ($message) { ?>
        <div class='danger'>
          <h4> <?=$message;?>
        </div>
      <?php } ?>
      </h4>
    </div>

    <!---FIN CONTENU--->

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