<?php

namespace models;

class View
{ /**
 * Le titre de la page.
 */
    private string $title;


    /**
     * Constructeur.
     */
    public function __construct($title)
    {
        $this->title = $title;
    }
    /**
     * Cette méthode construit le chemin vers la vue demandée.
     * @param string $viewName : le nom de la vue demandée.
     * @return string : le chemin vers la vue demandée.
     */
    private function buildViewPath(string $viewName) : string
    {
        return TEMPLATE_VIEW_PATH . $viewName . '.php';
    }
}
