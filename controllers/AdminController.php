<?php

use repositories\ArticleRepository;
use repositories\UserRepository;

//use Article;
//use ArticleRepository;
//use CommentRepository;
//use UserRepository;

/**
 * Contrôleur de la partie admin.
 */
class AdminController
{
    /**
     * Affiche le profile utilisateur Connecté
     * @return void
     */
    public function showProfile()
    {

        // On vérifie que l'utilisateur est connecté.
        $this->checkIfUserIsConnected();

        // On récupère les articles.
        $userRepo = new UserRepository();
        $user     = $userRepo->getUserById(1);
        $view     = new View('Profile');
        $view->render('profile', ['user' => $user]);
    }

    /**
     * Vérifie que l'utilisateur est connecté.
     * @return void
     */
    private function checkIfUserIsConnected(): void
    {
        // On vérifie que l'utilisateur est connecté.
        if (!isset($_SESSION['user'])) {
            Utils::redirect("connectionForm");
        }
    }

    /**
     * Affiche la page d'administration.
     * @return void
     */
    public
    function showAdmin(): void
    {
        // On vérifie que l'utilisateur est connecté.
        $this->checkIfUserIsConnected();

        // On récupère les articles.
        $articleRepository = new ArticleRepository();
        $articles          = $articleRepository->getAllArticles();

        // On affiche la page d'administration.
        $view = new View("Administration");
        $view->render("administration", [
            'articles' => $articles
        ]);
    }

    /**
     * Affichage du formulaire de connexion.
     * @return void
     */
    public function displayConnectionForm(): void
    {
        $view = new View("Connexion");
        $view->render("connectionForm");
    }

    /**
     * Connexion de l'utilisateur.
     * @return void
     */
    public function connectUser(): void
    {
        // On récupère les données du formulaire.
        $login    = Utils::request("username");
        $password = Utils::request("password");

        var_dump($login, $password);
        // On vérifie que les données sont valides.
        if (empty($login) || empty($password)) {
            throw new Exception("Tous les champs sont obligatoires. 1");
        }

        // On vérifie que l'utilisateur existe.
        $userRepository = new UserRepository();
        $user           = $userRepository->getUserByLogin($login);
        if (!$user) {
            throw new Exception("L'utilisateur demandé n'existe pas.");
        }

        // On vérifie que le mot de passe est correct.
        if (!password_verify($password, $user->getPassword())) {
            $hash = password_hash($password, PASSWORD_DEFAULT);
            throw new Exception("Le mot de passe est incorrect : $hash");
        }

        // On connecte l'utilisateur.
        $_SESSION['user']   = $user;
        $_SESSION['idUser'] = $user->getId();

        // On redirige vers la page d'administration.
        Utils::redirect("administration");
    }

    /**
     * /**
     * Affichage du formulaire de connexion.
     * @return void
     */
    public function displaySuscribeForm(): void
    {
        $view = new View("Inscription");
        $view->render("suscribeForm");
    }

    /**
     * Connexion de l'utilisateur.
     * @return void
     */
    public function suscribeUser(): void
    {

        // On récupère les données du formulaire.
        $username = Utils::request("username");
        $email    = Utils::request("email");
        $password = Utils::request("password");
        // On vérifie que les données sont valides.
        if (empty($username) || empty($email) || empty($password)) {
            throw new Exception("Tous les champs sont obligatoires. 1");
        }

        // On crée l'objet User.
        $user = new User([
            'username' => $username,
            'email' => $email,
            'password' => $password
        ]);

        // On vérifie que l'utilisateur n'existe pas déjà.
        $userRepository = new UserRepository();
        $entity         = $userRepository->addUser($user);
        if (!$entity) {
            throw new Exception("Une erreur est survenue lors de l'ajout de l'uilisateur ");
        }

        // On connecte l'utilisateur.
        $_SESSION['user']   = $user;
        $_SESSION['idUser'] = $entity->getId();

        // On redirige vers la page d'administration.
        Utils::redirect("administration");
    }

    /**
     * Déconnexion de l'utilisateur.
     * @return void
     */
    public function disconnectUser(): void
    {
        // On déconnecte l'utilisateur.
        unset($_SESSION['user']);

        // On redirige vers la page d'accueil.
        Utils::redirect("welcome");
    }

    /**
     * Affichage du formulaire d'ajout d'un article.
     * @return void
     */
    public function showUpdateArticleForm(): void
    {
        $this->checkIfUserIsConnected();

        // On récupère l'id de l'article s'il existe.
        $id = Utils::request("id", -1);

        // On récupère l'article associé.
        $articleRepository = new ArticleRepository();
        $article           = $articleRepository->getArticleById($id);


        // Si l'article n'existe pas, on en crée un vide.
        if (!$article) {
            $article = new Article;
        }


        // On affiche la page de modification de l'article.
        $view = new View("Edition d'un article");
        $view->render("updateArticleForm", [
            'article' => $article
        ]);
    }

    /**
     * Ajout et modification d'un article.
     * On sait si un article est ajouté car l'id vaut -1.
     * @return void
     */
    public function updateArticle(): void
    {
        $this->checkIfUserIsConnected();


        // On récupère les données du formulaire.
        $id      = Utils::request("id", -1);
        $title   = Utils::request("title");
        $content = Utils::request("content");

        // On vérifie que les données sont valides.
        if (empty($title) || empty($content)) {
            throw new Exception("Tous les champs sont obligatoires. 2");
        }

        // On crée l'objet Article.
        $article = new Article([
            'id' => $id, // Si l'id vaut -1, l'article sera ajouté. Sinon, il sera modifié.
            'title' => $title,
            'content' => $content,
            'id_user' => $_SESSION['idUser']
        ]);

        // On ajoute l'article.
        $articleRepository = new ArticleRepository();
        $articleRepository->addOrUpdateArticle($article);

        // On redirige vers la page d'administration.
        Utils::redirect("administration");
    }

    /**
     * Suppression d'un article.
     * @return void
     */
    public function deleteArticle(): void
    {
        $this->checkIfUserIsConnected();


        $id = Utils::request("id", -1);

        // On supprime l'article.
        $articleRepository = new ArticleRepository();
        $articleRepository->deleteArticle($id);

        // On redirige vers la page d'administration.
        Utils::redirect("administration");
    }

    /**
     * Suppression d'un comment.
     * @return void
     */
    public
    function deleteComment(): void
    {
        $this->checkIfUserIsConnected();


        $id = Utils::request("id", -1);
        // On supprime l'article.
        $commentRepository = new CommentRepository();
        $commentRepository->deleteComment($id);

        // On redirige vers la page d'administration.
        Utils::redirect("administration");
    }

    public
    function orderBy(): void
    {
        $this->checkIfUserIsConnected();

        $order = Utils::request("order", 'ASC');
        $col   = Utils::request("col", 'title');

        $articleRepository = new ArticleRepository();
        $articles          = $articleRepository->orderBy($col, $order);
        $view              = new View("Administration");
        $view->render("administration", [
            'articles' => $articles
        ]);
    }


}