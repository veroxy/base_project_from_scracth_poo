<?php

use repositories\ArticleRepository;

class ArticleController
{
    /**
     * @return void
     */
    public function all()
    {
        $articleRepo = new ArticleRepository();
        $articles    = $articleRepo->getAllArticles();
        $view        = new View('Tous Articles');

        $view->render('articles', ['articles' => $articles]);
    }
}