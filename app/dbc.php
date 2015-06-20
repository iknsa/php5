<?php

try {
    $db = new PDO(
        "mysql:host=" . $parameters['dbHost'] .
        ";dbname=" . $parameters['dbName'] .
        ";charset=utf8", $parameters['dbUser'],
        $parameters['dbPass']
    );
  
    $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    $error = 'Impossible de se connecter à la bd.<br />';
}
