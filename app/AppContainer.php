<?php

if(isset($bundle) && isset($controller) && isset($action))
{
    require_once "src/" . ucfirst($bundle) . "/Controller/" . ucfirst($controller) . ".php";

    $controller_name = "\\" . ucfirst($bundle) . "\\Controller\\" . ucfirst($controller);

    $$controller = new $controller_name();

    $actionName = $action . 'Action';

    $$controller->$actionName();
}