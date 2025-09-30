<?php
    require_once("../app/controllers/UserController.php");
    require_once("../app/config/db.php"); 
    $action = $_GET ["action"] ?? ["welcome"];
    switch ($action) { 
        case "list":
            require 'views/List.php.php';
            break;
        case "create":
            require 'views/usersForm.php';
            $controller = new UserController($db_conn);
            $controller->createUser();
            break;
        case "welcome":
            default:
            require 'views/welcome.php';
            break;
    }
?>
