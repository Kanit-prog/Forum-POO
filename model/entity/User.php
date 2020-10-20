<?php

namespace Model\Entity;

use App\AbstractEntity;

class User extends AbstractEntity {

    private $id;
    private $email;
    private $role;
    private $mdp;
    private $pseudo;
    private $avatar;
    private $dateinscription;
    // $ référencé à la bdd

    public function __construct($data){
         parent::hydrate($data); 
    }

    public function getEmail()
    {
        return $this->email;
    }

    public function setEmail($email)
    {
        $this->email = $email;

        return $this;
    }

    public function getMdp()
    {
        return $this->mdp;
    }

    public function setMdp($mdp)
    {
        $this->mdp = $mdp;

        return $this;
    }

    public function getPseudo()
    {
        return $this->pseudo;
    }

    public function setPseudo($pseudo)
    {
        $this->pseudo = $pseudo;

        return $this;
    }

    public function getAvatar()
    {
        return $this->avatar;
    }

    public function setAvatar($avatar)
    {
        $this->avatar = $avatar;

        return $this;
    }

    public function getDateinscription()
    {
        return $this->dateinscription;
    }

    public function setDateinscription($dateinscription)
    {
        $this->dateinscription = $dateinscription;

        return $this;
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

    public function getRole()
    {
        return $this->role;
    }

    public function setRole($role)
    {
        $this->role = $role;

        return $this;
    }
}