<?php
require_once "Config/Config.php";
$ruta = !empty($_GET['url']) ? ($_GET['url']) : "Home/index";
$array = explode('/', $ruta);
$controller = $array[0];
$method = 'index';
$params = "";

if (!empty($array[1])) {
    if (!empty($array[1] != "")) {
        $method = $array[1];
    }
}
if (!empty($array[2])) {
    if (!empty($array[2] != "")) {
       for ($i=2; $i < count($array) ; $i++) { 
          $params .= $array[$i]. ",";
       }
       $params = trim($params, ',');
    }
}
require_once 'Config/App/autoload.php';
$dirController = "Controllers/".$controller.'.php';
if (file_exists($dirController)) {
    require_once $dirController;
    $controller = new $controller();
    if (method_exists($controller, $method)) {
        $controller->$method($params);
    }else{
        echo "Method not exist";
    }
}else{
    echo "Controller not exist";
}