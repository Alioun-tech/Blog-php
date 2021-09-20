<?php
function connexionDataBase(){
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

function getPosts(){
    $dbb = connexionDataBase();
    $req = 'SELECT id_Posts, titre, chapo, contenu,image_post, DATE_FORMAT(date_post, \'%d/%m/%Y à %Hh%imin%ss\') AS date_post FROM posts ORDER BY date_post DESC LIMIT 0, 5';
    $posts = $dbb->query($req);

    return $posts;
}

function getPost($id){
    $id = getID();
    $dbb = connexionDataBase();
    $requete = $dbb->prepare('SELECT * FROM posts WHERE id_Posts=?');
    $requete->execute(array($id));
    $article = $requete->fetch();

    return $article;
}


function getComments($id){
    $id = getID();
    $dbb = connexionDataBase();
    $comments = $dbb->prepare('SELECT * FROM commentaires WHERE id_Posts = ? ORDER BY id_commentaires DESC');
    $comments->execute(array($id));


    return $comments;
}

function addPosts($titre, $chapo, $contenu, $image, $date, $auteur){
    $dbb = connexionDataBase();
    $req = $dbb->prepare("INSERT INTO posts (titre, chapo, contenu, image_post, date_post, id_User)
                            VALUES(?,?,?,?,?,?)");
    $req->execute(array($titre, $chapo, $contenu, $image, $date, $auteur));
}

function addComments(){
    $id = getID();
    $dbb = connexionDataBase();
    $com = $dbb->prepare('SELECT * FROM commentaires WHERE id_Posts = ? ORDER BY id_commentaires DESC');
    $com->execute(array($id));

    return $com;
}

function updatePosts($titre, $chapo, $contenu, $image){
    $id = $id = getID();
    $dbb = connexionDataBase();
    $req = $dbb->prepare("UPDATE  posts SET titre=?, chapo=?, contenu=?, image_post=? WHERE posts.id_Posts=?");
    $req->execute(array($titre, $chapo, $contenu, $image, $id));

    return $req;
}

function deletePosts(){
    $id = getID();
    $dbb = connexionDataBase();
    $req = $dbb->prepare("DELETE FROM posts WHERE id_Posts=?");
    $req->execute(array($id));
}

function getID(){
    $dbb = connexionDataBase();
    $requete = $dbb->prepare('SELECT * FROM posts WHERE id_Posts=?');
    $requete->execute(array($_GET['action']));
    $id = $requete->fetch();

    return $id;
}