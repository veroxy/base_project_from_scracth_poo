<?php
namespace repositories;

/**
 * Classe abstraite qui représente un manager. Elle récupère automatiquement le gestionnaire de base de données. 
 */
abstract class AbstractEntityRepository {
    
    protected $db;

    /**
     * Constructeur de la classe.
     * Il récupère automatiquement l'instance de BaseRepository.
     */
    public function __construct() 
    {
        $this->db = BaseRepository::getInstance();
    }
}