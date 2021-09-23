<?php
function connexionDataBases(){
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

function getPostsAdmin(){
    $dbb = connexionDataBases();
    $req = 'SELECT id_Posts, titre, chapo, contenu,image_post, DATE_FORMAT(date_post, \'%d/%m/%Y à %Hh%imin%ss\') AS date_post FROM posts ORDER BY date_post DESC LIMIT 0, 5';
    $posts = $dbb->query($req);

    return $posts;
}

function getPostAdmin($id){
    $id = getID();
    $dbb = connexionDataBases();
    $requete = $dbb->prepare('SELECT * FROM posts WHERE id_Posts=?');
    $requete->execute(array($id));
    $article = $requete->fetch();

    return $article;
}


function getCommentsAdmin($id){
    $id = getID();
    $dbb = connexionDataBases();
    $comments = $dbb->prepare('SELECT * FROM commentaires WHERE id_Posts = ? ORDER BY id_commentaires DESC');
    $comments->execute(array($id));


    return $comments;
}

function addPosts($titre, $chapo, $contenu, $image, $date, $auteur){
    $dbb = connexionDataBases();
    $req = $dbb->prepare("INSERT INTO posts (titre, chapo, contenu, image_post, date_post, id_User)
                            VALUES(?,?,?,?,?,?)");
    $req->execute(array($titre, $chapo, $contenu, $image, $date, $auteur));
    $resultAdd = $req;

    return $resultAdd;
}

function addComments(){
    $id = getID();
    $dbb = connexionDataBases();
    $com = $dbb->prepare('SELECT * FROM commentaires WHERE id_Posts = ? ORDER BY id_commentaires DESC');
    $com->execute(array($id));

    return $com;
}

function updatePosts($id){
    $id = getID();
    $dbb = connexionDataBases();
    $req = $dbb->prepare("UPDATE  posts SET titre=:titre, chapo=:chapo, contenu=:contenu, image_post=:image_post WHERE posts.id_Posts=?");
    $req->bindValue(':titre', $_POST['titre']);
    $req->bindValue(':chapo', $_POST['chapo']);
    $req->bindValue(':contenu', $_POST['contenu']);
    $req->bindValue(':image_post', $_POST['image_post']['name']);
    $req->bindValue(':id_Posts', $id);

    $resultUpdate = $req->execute();
    return $resultUpdate;
}

function deletePosts($id){
    $id = getID();
    $dbb = connexionDataBases();
    $req = $dbb->prepare("DELETE FROM posts WHERE id_Posts=?");
    $req->execute(array($id));

    $resultDelete = $req;
    return $resultDelete;
}

function getID(){
    $dbb = connexionDataBases();
    $requete = $dbb->prepare('SELECT * FROM posts WHERE id_Posts=?');
    $requete->execute(array($_GET['action']));
    $id = $requete->fetch();

    return $id;
}