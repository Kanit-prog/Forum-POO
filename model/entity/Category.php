<?php

namespace Model\Entity;

use App\AbstractEntity;

class Category extends AbstractEntity {

    private $id;
    private $nomcategorie;
    private $descriptioncat;
    // $ référencé à la bdd

    public function __construct($data){
         parent::hydrate($data); 
    }

    public function getId()
    {
        return $this->id;
    }

    public function setId($id)
    {
        $this->id = $id;

        return $this;
    }

    public function getNomcategorie()
    {
        return $this->nomcategorie;
    }

    public function setNomcategorie($nomcategorie)
    {
        $this->nomcategorie = $nomcategorie;

        return $this;
    }

    public function getDescriptioncat()
    {
        return $this->descriptioncat;
    }

    public function setDescriptioncat($descriptioncat)
    {
        $this->descriptioncat = $descriptioncat;

        return $this;
    }
}