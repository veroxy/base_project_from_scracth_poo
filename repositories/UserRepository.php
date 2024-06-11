<?php

namespace repositories;

use models\entities\User;

/**
 * Classe UserRepository pour gérer les requêtes liées aux users et à l'authentification.
 */
class UserRepository extends AbstractEntityRepository
{
    /**
     * Récupère un user connecté
     * @param int $id
     * @return ?User
     */
    public function getUserById(int $id): ?User
    {
        $sql    = "SELECT * FROM user WHERE id = :id";
        $result = $this->db->query($sql, ['id' => $id]);
        $user   = $result->fetch();
        if ($user) {
            $u = new User($user);
            var_dump($u);
            return $u;
        }
        return null;
    }

    /**
     * Récupère un user par son login.
     * @param string $email
     * @return ?User
     */
    public function getUserByLogin(string $email): ?User
    {
        $sql    = "SELECT * FROM user WHERE email = :email";
        $result = $this->db->query($sql, ['email' => $email]);
        $user   = $result->fetch();
        if ($user) {
            return new User($user);
        }
        return null;
    }

    public function addUser(User $user)
    {
        var_dump($user);

        // On hash le mot de passe
        $hashPassword = password_hash($user->getPassword(), PASSWORD_DEFAULT);

        $sql    = "INSERT INTO user (username, email, password, date_creation) VALUES (:username, :email, :password, NOW())";
        $result = $this->db->query($sql, [
            'username' => $user->getUsername(),
            'password' => $hashPassword,
            'email' => $user->getEmail()
        ]);
        return $result->rowCount() > 0;
    }


}