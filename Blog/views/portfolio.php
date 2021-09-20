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

    <div class="container">
        <div class="propos">
            <h3 class="text-center py-3">A propos</h3>
        </div>

        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Accusamus deleniti doloribus fugit laudantium odio officiis porro quis similique sit tempore, veniam voluptas!
            Accusamus dolor dolorum earum enim magnam provident, velit!Ab ad animi atque corporis deserunt dolor, dolorem error esse est eveniet fugiat id illum iste libero, quibusdam
            quidem sapiente unde ut vero voluptates. Aperiam incidunt minima nobis repudiandae sunt.Ad autem modi nam odio pariatur praesentium quos repellendus rerum sit. Aliquid
            asperiores assumenda at beatae eveniet exercitationem id, illo incidunt, labore, laboriosam mollitia odio odit quo repudiandae sed velit.Accusamus alias aliquam asperiores
            atque cupiditate delectus enim et expedita fuga illum impedit, ipsa ipsam itaque laborum magnam maxime modi nulla odit officia optio placeat quae repellat saepe ullam veritatis.
            Atque cum cumque deleniti dolor dolorum, enim et facere molestias nesciunt nisi odit quas quis sapiente sint tempore veniam veritatis. Aliquid libero modi quaerat qui sint tenetur
            veniam vero voluptates.Consequatur, quae, sint. Ab ad autem deserunt dolorum esse exercitationem fuga id labore laboriosam minus necessitatibus, non numquam odit quas quis recusandae
            sequi similique tempore temporibus unde ut velit veritatis.Aspernatur dolor dolores eaque et excepturi itaque laborum molestiae mollitia nihil officiis pariatur quae quia
            reiciendis rem repellat repudiandae, saepe totam ullam veritatis voluptatibus? Accusantium animi minus nemo officia sequi? Aliquam, cum dignissimos eaque eum ipsum necessitatibus!
    </div>

<div class="container">
    <div class="title_portfolio">
        <h3 class="text-center">MES PROJETS</h3>
    </div>
    <div class="row row-cols-1 row-cols-md-3 g-4">
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
        <div class="col">
            <div class="card">
                <img src="..." class="card-img-top" alt="...">
                <div class="card-body">
                    <h5 class="card-title">Card title</h5>
                    <p class="card-text">This is a longer card with supporting text below as a natural lead-in to additional content. This content is a little bit longer.</p>
                    <a href="#" class="btn btn-primary">Go somewhere</a>
                </div>
            </div>
        </div>
    </div>
</div>

    <div class="container">
        <div class="comp">
            <h3> Mes compétences</h3>
        </div>

        <div class="progress">
            <div class="progress-bar" role="progressbar" aria-valuenow="0" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 75%" aria-valuenow="75" aria-valuemin="0" aria-valuemax="100"></div>
        </div>
        <div class="progress">
            <div class="progress-bar" role="progressbar" style="width: 100%" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100"></div>
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