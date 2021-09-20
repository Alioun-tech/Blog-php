<?php
require_once './models/model.php';

function getAllArticle()
{
    $posts = getPosts();

    require './views/viewAcceuilBlog.php';
}

function getOneArticle()
{
    if (isset($_GET['action'])) {
        $id = ($_GET['action']);
        if (isset($id)) {
            $article = getPost($id);
            $comments= getComments($id);

            $nb_comments = $comments->rowCount();
            require_once './views/viewArticle.php';
        }
    }
}