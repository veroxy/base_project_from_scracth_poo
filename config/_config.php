<?php

session_start();

define('TEMPLATES_VIEWS', './views/'); // base chemin vers les views

define('TEMPLATE_LAYOUTS', TEMPLATES_VIEWS . 'layouts/'); // Le chemin vers les layer, partials et composants
define('MAIN_VIEW_PATH', TEMPLATE_LAYOUTS . 'app.php'); // Le chemin vers le template principal.
define('TEMPLATE_VIEW_PATH', TEMPLATES_VIEWS . 'templates/'); // Le chemin vers les views 'home', 'administrattion', 'error'

define('DB_HOST', 'localhost');
define('DB_NAME', 'blog_forteroche');
define('DB_USER', 'root');
define('DB_PASS', '');
