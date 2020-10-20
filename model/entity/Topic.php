<?php

namespace Model\Entity;

use App\AbstractEntity;

class Topic extends AbstractEntity {

    private $id;
    private $intitule;
    private $statut;
    private $datecreation;
    private $contenu;
    private $user;
    private $category;
    
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

    public function getIntitule()
    {
        return $this->intitule;
    }
 
    public function setIntitule($intitule)
    {
        $this->intitule = $intitule;

        return $this;
    }

    public function getStatut()
    {
        return $this->statut;
    }

    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    public function getDatecreation()
    {
        return $this->datecreation;
    }

    public function setDatecreation($datecreation)
    {
        $this->datecreation = $datecreation;

        return $this;
    }

    public function getContenu()
    {
        return $this->contenu;
    }

    public function setContenu($contenu)
    {
        $this->contenu = $contenu;

        return $this;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function setUser($user)
    {
        $this->user = $user;

        return $this;
    }

    public function getCategory()
    {
        return $this->category;
    }

    public function setCategory($category)
    {
        $this->category = $category;

        return $this;
    }
}