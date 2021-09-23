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
            <h4>
                <?php if ($success) { ?>
                    <div class='sucess'>
                        <h4> <?= $success; ?>
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