<?php

class WelcomeController
{
    /**
     * @return void
     */
    public function welcome()
    {
        // On affiche la page d'administration.de
        $view = new View("Welcome");
        $view->render("welcome", [""]);
    }
}