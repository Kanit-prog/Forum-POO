<?php
    namespace Model\Manager;
    
    use App\AbstractManager;
    
    class CategoryManager extends AbstractManager
    {
        private static $classname = "Model\Entity\Category";

        public function __construct(){
            self::connect(self::$classname);
        }

        public function findAll(){

            $sql = "SELECT id_categorie, nomcategorie, descriptioncat
                    FROM categorie 
                    ORDER BY nomcategorie ASC";

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
                        FROM categorie 
                        WHERE id_categorie = :id";
            return self::getOneOrNullResult(
                self::select($sql, 
                    ["id" => $id], 
                    false
                ), 
                self::$classname
            );
        }

    }