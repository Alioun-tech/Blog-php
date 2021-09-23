<?php
define('WEBROOT',str_replace('admin.php','',$_SERVER['SCRIPT_NAME']));
define('ROOT',str_replace('admin.php','',$_SERVER['SCRIPT_FILENAME']));

require (ROOT.'./models/modelBackend.php');
require (ROOT.'./controllers/controllerListe.php');

if (isset($_GET['action'])){
    $params = explode("/", $_GET['action']);

    if ($params!=""){
        $controller = $params[0];
        $action = "";
        if (isset($params[1])) {
            $action = $params[1];
        }
        require_once('controllers/admin/'.$controller.'.php');

        if(function_exists($action)){
            if (isset($params[2]) && isset($params[3])) {
                $action($params[2], $params[3]);
            }elseif (isset($params[2])) {
                $action($params[2]);
            }else{
                $action();
            }
        }
    }
}else{

    require_once ('controllers/controllerListe.php');
    showAllArticle();
}
