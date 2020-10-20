<?php

namespace Model\Entity;

use App\AbstractEntity;

class Message extends AbstractEntity {

    private $id;
    private $contenupost;
    private $datepublication;
    private $user;
    private $topic;
    
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

    public function getContenupost()
    {
        return $this->contenupost;
    }

    public function setContenupost($contenupost)
    {
        $this->contenupost = $contenupost;

        return $this;
    }

    public function getDatepublication()
    {
        return $this->datepublication;
    }

    public function setDatepublication($datepublication)
    {
        $this->datepublication = $datepublication;

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

    public function getTopic()
    {
        return $this->topic;
    }

    public function setTopic($topic)
    {
        $this->topic = $topic;

        return $this;
    }
}