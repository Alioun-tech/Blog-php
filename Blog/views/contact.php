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

        <!---MENU--->
        <?php
        include './inc/menu.inc.php';
        ?>
        <!---FIN MENU--->

        <div class="container p-5">
            <div class="row p-5">
                <div class="col-lg-10 col-lg-offset-2 ml-auto">
                    <form id="contact-form" method="post" action="" role="form">
                        <div class="messages"></div>
                        <h2 class="pb-5 text-center">Nous Contacter</h2>
                        <div class="controls">
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_name">Prénom *</label>
                                        <input id="form_name" type="text" name="name" class="form-control" placeholder="Prénom" required="required" data-error="Le prénom est requis.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_lastname">Nom *</label>
                                        <input id="form_lastname" type="text" name="surname" class="form-control" placeholder="Nom" required="required" data-error="Le nom est requis.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-6">
                                    <div class="form-group">
                                        <label for="form_email">Email *</label>
                                        <input id="form_email" type="email" name="email" class="form-control" placeholder="@gmail.com" required="required" data-error="Un e-mail valide est requis.">
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <div class="row mb-3">
                                <div class="col-md-12">
                                    <div class="form-group">
                                        <label for="form_message">Message *</label>
                                        <textarea id="form_message" name="message" class="form-control" placeholder="Votre message" rows="4" required data-error="S'il vous plaît, laissez-nous un message."></textarea>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>
                            </div>
                            <button class="btn btn-success float-right" type="submit">Valider</button>
                        </div>
                    </form>
                </div>
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