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
        if (file_exists("$prefix\\$class.php"))
            require_once "$prefix\\$class.php";
    }
}

spl_autoload_register('config\autoloader');