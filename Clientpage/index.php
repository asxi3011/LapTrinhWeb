<?php

require "./Core/Database.php";

require "./Models/BaseModel.php";

require "./Controllers/BaseController.php";




if(!isset($_REQUEST['controller'])) {

    $_REQUEST['controller'] = 'productcategory';

}



$controllerName = ucfirst((strtolower($_REQUEST['controller'])). 'Controller') ?? 'news' . 'Controller';



$actionName = $_REQUEST['action'] ?? 'index';



require "./Controllers/${controllerName}.php";



$controllerObj = new $controllerName;



$controllerObj->$actionName();
