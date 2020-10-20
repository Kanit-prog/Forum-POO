<?php
    namespace Model\Manager;
    
    use App\AbstractManager;
    
    class UserManager extends AbstractManager
    {
        private static $classname = "Model\Entity\User";

        public function __construct(){
            self::connect(self::$classname);
        }

        public function findAll(){

            $sql = "SELECT *
                    FROM utilisateur";

            return self::getResults(
                self::select($sql,
                    null,
                    true
                ),
                self::$classname
            );
        }

        public function findOneById($id){
            $sql = "SELECT * 
                    FROM utilisateur
                    WHERE id_user = :id";
            return self::getOneOrNullResult(
                self::select($sql, 
                    ["id" => $id], 
                    false
                ), 
                self::$classname
            );
        }

    }       