<?php

$bundles = ['authentification'];

if(isset($_GET))
{
    try
    {
        if(in_array($_GET['bundle'], $bundles)) {

            try {
                if(!@include("src/" . ucfirst($_GET['bundle']) . "/Ressources/config/routing.php")) {
                    throw new Exception("The required routing file was not found!");
                }

                require_once "src/" . ucfirst($_GET['bundle']) . "/Ressources/config/routing.php";

                foreach ($routes as $route) {

                    foreach ($route as $controllers => $actions) {
                        if($controllers == $_GET['bundle']) {
                            $controller = $_GET['bundle'];
                        }

                        if($actions == $_GET['action']) {
                            $action = $_GET['action'];
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