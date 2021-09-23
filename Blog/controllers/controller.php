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
            $comments = getComments($id);

            $nb_comments = $comments->rowCount();
            require_once './views/viewArticle.php';
        }
    }
}


function addNewUser($pseudo, $nom, $prenom, $mail, $password)
{
    $addUser = addUser($pseudo, $nom, $prenom, $mail, $password);

    if (!$addUser) {
        $message = "Un problème est survenu, lors de la création du compte";
    } else {
        $success = "Votre compte a bien été crée";
    }
}

function addOneUser()
{
    if (isset($_POST['register'])) {
        if (
            !empty($_POST['pseudo']) && !empty($_POST['nom']) && !empty($_POST['prenom']) &&
            !empty($_POST['mail']) && !empty($_POST['password']) && !empty($_POST['password_confirm'])
        ) {
            if (!filter_var($_POST['mail'], FILTER_VALIDATE_EMAIL)) {
                $message = "Renseigner une adresse mail valide";
            } elseif ($_POST['password'] != $_POST['password_confirm']) {
                $message = "Les mots de passe sont différents";
            } else {
                $verifMail = getMailExist($_POST['mail']);
                if ($verifMail) {
                    $message = "Un compte existe déjà avec cet adresse email saisie";
                } else {
                    // CRYPTAGE PASSWORD
                    $password = "aq1" . sha1($_POST['password'] . "123") . "25";
                    addNewUser($_POST['pseudo'], $_POST['nom'], $_POST['prenom'], $_POST['mail'], $password);
                }
            }
        } else {
            $message = "Tous les champs sont requis!";
        }
        require_once './views/errors.php';
        require_once './views/success.php';
    }
    require_once './views/viewAddUser.php';
}

function connected()
{
    if (isset($_POST['connexion'])) {
        $mail = $_POST['mail'];
        $password = $_POST['password'];

        $data = getMailExist($mail);
        if (!$data) {
            $message = "Veuillez renseigner une adresse mail valide!!!";
        } else {
            $passValid = password_verify($password, $data['password']);

            if ($passValid) {
                session_start();
                $_SESSION['id_User'] = $data['id_User'];
                $_SESSION['pseudo'] = $data['pseudo'];
                $_SESSION['nom'] = $data['nom'];
                $_SESSION['prenom'] = $data['prenom'];
                $_SESSION['mail'] = $mail;
                $_SESSION['password'] = $password;

                $data['type'] = 'user';
                $posts =  getPosts();
                require_once './views/viewAcceuilBlog.php';
            } else {
                $message = "Renseigné un mot de passe valide!";
            }
        }
    }
    if (!isset($_SESSION['id_User'])) {
        require_once './views/viewLogin.php';
    }
    require_once './views/errors.php';
}
