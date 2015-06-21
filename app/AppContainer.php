<?php

if(isset($bundle) && isset($controller) && isset($action))
{
    require_once 'app/dbc.php';

    require_once "src/" . ucfirst($bundle) . "/Controller/" . ucfirst($controller) . ".php";

    $controller_name = "\\" . ucfirst($bundle) . "\\Controller\\" . ucfirst($controller) . "Controller";

    $$controller = new $controller_name();

    $actionName = $action . 'Action';
    $$controller->$actionName();

    if(!empty($$controller->$actionName()))
        $controllerReturn = $$controller->$actionName();
}