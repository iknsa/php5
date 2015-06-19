<?php

$bundles = ['authentification', 'user'];

if(isset($_GET))
{
    try
    {
        if(in_array(lcfirst($_GET['bundle']), $bundles)) {
            
            $bundle = lcfirst($_GET['bundle']);
            
            try {
                if(!@include("src/" . ucfirst($_GET['bundle']) . "/Ressources/config/routing.php")) {
                    throw new Exception("The required routing file was not found!");
                }

                require_once "src/" . ucfirst($_GET['bundle']) . "/Ressources/config/routing.php";

                foreach ($routes as $route) {

                    foreach ($route as $key => $value) {
                        if($value == lcfirst($_GET['action'])) {
                            
                            $action = lcfirst($value);
                            
                            $controller = lcfirst($key);
                        }

                    }
                }

                if(!isset($controller))
                    throw new Exception("The controller was not found", 1);

                if(!isset($action))
                    throw new Exception("The action was not found", 1);

            }catch(Exception $e) {
                $error = $e->getMessage();
            }

        } else {
            throw new Exception("The bundle was not found", 1);
        }
    } catch(Exception $e) {
        $error = $e->getMessage();
    }
}