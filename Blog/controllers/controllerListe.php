<?php
require_once './models/modelBackend.php';
function showAllArticle()
{
    $posts = getPostsAdmin();
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
if (isset($_POST)) {
    if (!empty($_POST)) {
        addPosts($_POST['titre'], $_POST['chapo'], $_POST['contenu'], $_POST['date_post'], $_POST['id_User'], $_POST['image_post']);
        $image = $_FILES['image_post']['name'];
        $imagePath = '../img/imag' . basename($image);
        $extensions = pathinfo($imagePath, PATHINFO_EXTENSION);

    

        if (!empty($image)) {
            if (file_exists($imagePath)) {
                $message = "Le fichier existe déjà";
            }
            if ($_FILES["image_post"]["size"] > 600000) {
                $message = "Le fichier ne doit pas dépasser 600000";
            }
        }
        require_once './views/backEnd/addPosts.php';
    }
}

    
}

function updateArticle($id)
{
    $updateData = getPosts($id);
    if (!$updateData) {
        $message = "Aucun n'article affiché";
    } else {
        require_once './views/backEnd/updatePosts.php';
    }
    if (isset($_POST)) {
        if (!empty($_POST['titre']) && !empty($_POST['chapo']) && !empty($_POST['contenu']) && !empty($_POST['image_post']['name'])) {
            $result = updatePosts($id);

            if (!$result) {
                $message = "Un problème est survenue lors de la mise à jour de l'article";

                header('Location: controllerListe/getAllArticle');
            } else {
                $success = "Les mise à jours ont été bien effectuées";
            }
        } else {
            $message = "Tous les champs sont requis";
        }
        require_once './views/errors.php';
    }
}

function deleteArticle($id)
{
    $deleteData = getPost($id);
    if (!$deleteData) {
        $message = "Aucun n'article supprimer";
    } else {
        require_once './views/backEnd/deletePosts.php';
    }

    if (isset($_POST['delete'])) {
        $resultDelete = deletePosts($id);
        if ($resultDelete) {
            $message = "Article non supprimé";
        }else{
            $success = "Le message a bien été suppirmer";
        }
    }
    require_once './views/errors.php';
}

function updateImage()
{
}

function deleteImage()
{
}
