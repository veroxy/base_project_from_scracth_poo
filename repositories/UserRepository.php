<?php

/** 
 * Classe UserManager pour gérer les requêtes liées aux users et à l'authentification.
 */

class UserRepository extends AbstractEntityRepository
{
    /**
     * Récupère un user par son login.
     * @param string $email
     * @return ?User
     */
    public function getUserByLogin(string $email) : ?User
    {
        $sql = "SELECT * FROM user WHERE email = :email";
        $result = $this->db->query($sql, ['email' => $email]);
        $user = $result->fetch();
        if ($user) {
            return new User($user);
        }
        return null;
    }
}