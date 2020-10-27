<?php

namespace Model\Manager;

use App\AbstractManager;

class UserManager extends AbstractManager
{
    private static $classname = "Model\Entity\User";

    public function __construct()
    {
        self::connect(self::$classname);
    }

    public function findAll()
    {

        $sql = "SELECT *
                    FROM utilisateur";

        return self::getResults(
            self::select(
                $sql,
                null,
                true
            ),
            self::$classname
        );
    }

    public function findOneById($id)
    {
        $sql = "SELECT * 
                    FROM utilisateur 
                    WHERE id_user = :id";
        return self::getOneOrNullResult(
            self::select(
                $sql,
                ["id" => $id],   
                false
            ),
            self::$classname
        );
    }
 
    public function findByEmail($email)
    {
        $sql = "SELECT email 
                    FROM utilisateur
                    WHERE email = :email";
        return self::getOneOrNullResult(
            self::select($sql,
                ["email" => $email],
                false
            ),
            self::$classname
        );
    }

    
    public function findByPseudo($pseudonyme)
    {
        $sql = "SELECT pseudo
                FROM utilisateur
                WHERE pseudo = :pseudo";
        return self::getOneOrNullResult(
            self::select($sql,
                ["pseudo" => $pseudonyme],
                false
            ),
            self::$classname
        );
    }

    public function addUser($array){
        $sql = "INSERT INTO utilisateur (pseudo, mdp, email)
        VALUES (:pseudo, :mdp, :email)";
        return self::create( 
            $sql,
            $array
        );
    }

    public function findUserbyEmail($array){
        $sql = "SELECT *
                FROM utilisateur
                WHERE email = :email";
            return self::getOneOrNullResult(
                self::select($sql,
                    $array,
                    false
                ),
                self::$classname
            );
    }
}
