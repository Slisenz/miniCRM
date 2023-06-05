<!DOCTYPE html>
<!--
Click nbfs://nbhost/SystemFileSystem/Templates/Licenses/license-default.txt to change this license
Click nbfs://nbhost/SystemFileSystem/Templates/Project/PHP/PHPProject.php to edit this template
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        error_reporting(E_ALL);
            ini_set('display_errors', 1);
            
            require_once 'app/config/Database.php';
            
            require_once 'app/models/User.php';
            
            require_once 'app/controllers/users/AuthController.php';
            require_once 'app/controllers/users/UsersController.php';
            
            $router = new router();
            $router->run();
        ?>
    </body>
</html>
