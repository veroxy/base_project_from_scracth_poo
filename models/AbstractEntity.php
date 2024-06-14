<?php

namespace models;

abstract class AbstractEntity
{
    // Par défaut l'id vaut -1, ce qui permet de vérifier facilement si l'entité est nouvelle ou pas. 
    protected int $id = -1;
    protected string    $slug         = "";

    /**
     * Constructeur de la classe.
     * Si un tableau associatif est passé en paramètre, on hydrate l'entité.
     *
     * @param array $data
     */
    public function __construct(array $data = [])
    {
        if (!empty($data)) {
            $this->hydrate($data);
        }
    }

    /**
     * Système d'hydratation de l'entité.
     * Permet de transformer les données d'un tableau associatif.
     * Les noms de champs de la table doivent correspondre aux noms des attributs de l'entité.
     * Les underscore sont transformés en camelCase (ex: date_creation devient setDateCreation).
     * @return void
     */
    protected function hydrate(array $data): void
    {
        foreach ($data as $key => $value) {
            $method = 'set' . str_replace('_', '', ucwords($key, '_'));
            if (method_exists($this, $method)) {
                $this->$method($value);
            }
        }
    }

    /**
     * @return string
     */
    public function getSlug(): string
    {

        return $this->slug;
    }

    /**
     * @param string $input
     * @return void
     */
    public function setSlug(string $input): void
    {

        $textlower = isset($input) ? strtolower($input) : strtolower(isset($this->title));
        //convert special characters to normal
        $utf8normal   = iconv('utf-8', 'ascii//TRANSLIT', $textlower);
        $specialchars = preg_replace("/[:']/", '', $utf8normal);
        $this->slug   = str_replace(' ', '_', $specialchars);

    }

    /**
     * Getter pour l'id.
     * @return int
     */
    public function getId(): int
    {
        return $this->id;
    }

    /**
     * Setter pour l'id.
     * @param int $id
     * @return void
     */
    public function setId(int $id): void
    {
        $this->id = $id;
    }
}