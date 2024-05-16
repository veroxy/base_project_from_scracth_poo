<?php
// autoload files
//1. fonctions Utils / ft_
//2. model class/entity
//3. repositories
//4. controllers
//5. views

spl_autoload_register(function ($className) {
    if (file_exists('utils/' . $className . '.php')) {
        require_once "utils/" . $className . '.php';
    }
    if (file_exists('models/' . $className . '.php')) {
        require_once "models/" . $className . '.php';
    }
    if (file_exists('models/' . $className . '.php')) {
        require_once "models/" . $className . '.php';

    }
    if (file_exists('controllers/' . $className . '.php')) {
        require_once "controllers/" . $className . '.php';
    }
});