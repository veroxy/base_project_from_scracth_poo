<?php
try {
    switch ($uri){
        case"":;
        default;
    }
}catch (Exception $e){
    $errorView = new View('Erreur');
    $errorView->render('errorPage', ['errorMessage' => $e->getMessage()]);
}