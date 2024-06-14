<?php

namespace config;
/**
 * autoload files
 *
 * 1. fonctions services / ft_
 * 2. models class/entity
 * 3. repositories
 * 4. controllers
 * 5. views
 */

function autoloader($class)
{
    $namespaces = [
        'services',
        'repositories',
        'controllers',
        'views',
        'views/layouts',
        'views/layouts/templates',
        'models',
        ''];

    foreach ($namespaces as $prefix) {
        if (file_exists("$prefix\\$class.php")) {
            $file = "$prefix\\$class.php";
            var_dump($file);
            die;
//            require_once $file;
        }
    }
}


spl_autoload_register(function ($class) {
    if (file_exists("models\\$class.php")) {
        require_once "models\\$class.php";
    }
    if (file_exists("$class.php")) {
        require_once "$class.php";
    }
    if (file_exists("services\\$class.php")) {
        require_once "services\\$class.php";
    }
    if (file_exists("repositories\\$class.php")) {
        require_once "repositories\\$class.php";
    }
    if (file_exists("controllers\\$class.php")) {
        require_once "controllers\\$class.php";
    }
    if (file_exists("views\\$class.php")) {
        require_once "views\\$class.php";
    }
    if (file_exists("views\layouts\\$class.php")) {
        require_once "views\layouts\\$class.php";
    }
    if (file_exists("views\layouts\templates\\$class.php")) {
        require_once "views\layouts\templates\\$class.php";
    }


});


//spl_autoload_register('config\autoloader');