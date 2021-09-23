<?php

function connexionDataBase()
{
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $db_name = 'blog';

    try {
        $db = new PDO("mysql:host=" . $hostname . ";port=3307;dbname=" . $db_name . ";charset=utf8", $username, $password);
    } catch (Exception $e) {
        die('ERROR:' . $e->getMessage());
    }
    return $db;
}


// Renvoie la liste des articles du blog
function getPosts()
{
    $dbb = connexionDataBase();
    $req = 'SELECT id_Posts, titre, chapo, contenu,image_post, DATE_FORMAT(date_post, \'%d/%m/%Y à %Hh%imin%ss\') AS date_post FROM posts ORDER BY date_post DESC LIMIT 0, 5';
    $posts = $dbb->query($req);

    return $posts;
}


// Affiche les informations sur un article
function getPost($id)
{
    $dbb = connexionDataBase();
    $req = 'SELECT id_Posts, titre, chapo, contenu,image_post, FROM posts WHERE id_Posts = ?';
    $requete = $dbb->prepare($req);
    $requete->execute(array($id));
    $article = $requete->fetch();
    return $article;
}


function getComments($id)
{
    $dbb = connexionDataBase();
    $comments = $dbb->prepare('SELECT * FROM commentaires WHERE id_Posts = ? ORDER BY id_commentaires DESC');
    $comments->execute(array($id));

    return $comments;
}


function addUser($pseudo, $nom, $prenom, $mail, $password){
    $dbb = connexionDataBase();
    $req = 'INSERT INTO user(pseudo, nom, prenom, mail, mot_de_passe) VALUES(?,?,?,?,?)';
    $add = $dbb->prepare($req);
    $addUser = $add->execute(array($pseudo, $nom, $prenom, $mail, $password));

    return $addUser;
}


function getMailExist($mail){
    $dbb = connexionDataBase();
    $req = "SELECT * FROM user WHERE mail = '$mail'";
    $result = $dbb->query($req);

    $data = $result->fetch(PDO::FETCH_ASSOC);
    return $data;
}



/*
function getID(){
    $dbb = connexionDataBase();
    $requete = $dbb->prepare('SELECT * FROM posts WHERE id_Posts=?');
    $requete->execute(array($_GET['action']));
    $id = $requete->fetch();

    return $id;
}
*/