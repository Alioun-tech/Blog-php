<!DOCTYPE html>
<html lang="en">
<!---HEAD--->
<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title><?= $title ?></title>
    <link rel="stylesheet" href="../css/style.css">
    <link
        href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
        rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
        crossorigin="anonymous"
    />
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/@fortawesome/fontawesome-free@5.15.3/css/fontawesome.min.css"
        integrity="sha384-wESLQ85D6gbsF459vf1CiZ2+rr+CsxRY0RpiF1tLlQpDnAgg6rwdsUF1+Ics2bni"
        crossorigin="anonymous"
    />
</head>
<!---FIN HEAD--->
<body>
<div class="container">
    <!---HEADER--->
   <header class="blog-header">
        <div class="row flex-nowrap justify-content-between align-items-center">
            <div class="col-4">
                <a href="viewAcceuilBlog.php">Blog.</a>
            </div>
            <div class="col-4 text-center">
                <img src="../img/logo/Sans%20titre.svg" class="img-fluid logoimg" alt="" />
            </div>
            <div class="col-4 d-flex justify-content-end align-items-center">
                <form class="d-flex">
                    <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" />
                    <span class="input-group-text border-0" id="search-addon">
          <i class="fas fa-search"></i>
        </span>
                </form>
                <a type="button" class="btn btn-sm btn-outline-secondary" href="login.php">
                    Login
                </a>
            </div>
        </div>
    </header>
    <!---FIN HEADER--->

    <!---MENU--->
    <div>
        <nav class="navbar navbar-expand-lg navbar-light bg-light">
            <div class="container-fluid">
                <button
                        class="navbar-toggler"
                        type="button"
                        data-bs-toggle="collapse"
                        data-bs-target="#navbarNavAltMarkup"
                        aria-controls="navbarNavAltMarkup"
                        aria-expanded="false"
                        aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-center" id="navbarNavAltMarkup">
                    <div class="navbar-nav">
                        <a class="nav-link" href="viewAcceuilBlog.php">Acceuil</a>
                        <a class="nav-link" href="portfolio.php">Portfolio</a>
                        <a class="nav-link" href="contact.php">Contact</a>
                    </div>
                </div>
            </div>
        </nav>
    </div>
    <!---FIN MENU--->

    <?= $content ?>
</div>

<!---FOOTER--->
<footer class="sticky-footer text-center text-white" style="background-color: #f1f1f1">
    <!-- Grid container -->
    <div class="container pt-4">
        <!-- Section: Social media -->
        <section class="mb-4">
            <!-- Facebook -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-facebook-f"></i
                ></a>

            <!-- Twitter -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-twitter"></i
                ></a>

            <!-- Google -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-google"></i
                ></a>

            <!-- Instagram -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-instagram"></i
                ></a>

            <!-- Linkedin -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-linkedin"></i
                ></a>
            <!-- Github -->
            <a
                class="btn btn-link btn-floating btn-lg text-dark m-1"
                href="#"
                role="button"
                data-mdb-ripple-color="dark"
            ><i class="fab fa-github"></i
                ></a>
        </section>
        <!-- Section: Social media -->
    </div>
    <!-- Grid container -->

    <!-- Copyright -->
    <div
        class="text-center text-dark p-3"
        style="background-color: rgba(0, 0, 0, 0.2)"
    >
        © 2020 Copyright: Alioune DIEDHIOU
    </div>
    <!-- Copyright -->
</footer>
<!---FIN FOOTER--->

<!---JS--->
<script
    src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"
></script>

<script
    src="https://kit.fontawesome.com/2b565a0b1d.js"
    crossorigin="anonymous"
></script>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<!---FIN JS--->
</body>

</html>