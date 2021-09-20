<?php
require_once './models/modelBackend.php';
function getAllPosts()
{
    $posts = getPosts();
    if (!$posts) {
        $message = 'Aucun article récupérer!!';
    } else {
        $nb_posts = $posts->rowCount();
        if ($nb_posts == 0) {
            $message = "il n'y a pas d'article poster pour le moment";
            addOneArticle();
        } else {
            require_once './views/backEnd/dashboard.php';
        }
    }
    $posts->closeCursor();
}



function addOneArticle()
{
    if (!empty($_POST)) {

        addPosts($_POST['titre'], $_POST['chapo'], $_POST['contenu'], $_POST['date_post'], $_POST['id_User'], $_FILES['image_post']['name']);
        $image = $_FILES['image_post']['name'];
        $imagePath = '../img/imag' . basename($image);
        $extensions = pathinfo($imagePath, PATHINFO_EXTENSION);


        if (!empty($image)) {
            if (file_exists($imagePath)) {
                $imageError = "Le fichier existe déjà";
            }
            if ($_FILES["image_post"]["size"] > 600000) {
                $sizeError = "Le fichier ne doit pas dépasser 600000";
            }
        }
        require_once './views/backEnd/addPosts.php';
    }
}

function updateArticle()
{
    if (!empty($_POST)) {
        $data = getPosts();
        updatePosts($_POST['titre'], $_POST['chapo'], $_POST['contenu'], $_FILES['image_post']['name']);
        $image = $_FILES['image_post']['name'];
        $imagePath = '../img/imag' . basename($image);
        $extensions = pathinfo($imagePath, PATHINFO_EXTENSION);
        $fileName = $_FILES['image_post']['tmp_name'];

        if (!empty($image)) {
            if (file_exists($imagePath)) {
                $imageError = "Le fichier existe déjà";
            }
            if ($_FILES["image_post"]["size"] > 600000) {
                $sizeError = "Le fichier ne doit pas dépasser 600000";
            }

            if (move_uploaded_file($fileName, $imagePath)) {
                echo 'image uploader';
            } else {
                echo 'image not uploader';
            }
            header("Location: ./dashboard.php");
        }
        require_once './views/backEnd/updatePosts.php';
    }
}

function deleteArticle()
{
    if (!empty($_GET['action']) && !empty($_POST)) {
        $id = getID();
    }
    if (!empty($_POST)) {
        $id = $_POST['id_Posts'];
    }
    deletePosts();
    require_once './views/backEnd/deletePosts.php';
}

function updateImage()
{
}

function deleteImage()
{
}
