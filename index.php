<?php
require_once 'config/_config.php';
require_once 'config/autoload.php';

$action = Utils::request('action', 'welcome');

// Try catch global pour gérer les erreurs
try {
    // Pour chaque action, on appelle le bon contrôleur et la bonne méthode.
    switch ($action) {
        // Pages accessibles à tous.
           case 'welcome':
               $adminController = new AdminController();
               $adminController->welcome();
               break;

        // Section admin & connexion.
        case 'admin':
            $adminController = new AdminController();
            $adminController->showAdmin();
            break;

        case 'connectionForm':
            $adminController = new AdminController();
            $adminController->displayConnectionForm();
            break;

        case 'connectUser':
            $adminController = new AdminController();
            $adminController->connectUser();
            break;

        case 'disconnectUser':
            $adminController = new AdminController();
            $adminController->disconnectUser();
            break;

        default:
            throw new Exception("La page demandée n'existe pas.");
    }
} catch (Exception $e) {
    // En cas d'erreur, on affiche la page d'erreur.
    $errorView = new View('Erreur');
    $errorView->render('errorPage', ['errorMessage' => $e->getMessage()]);
}
