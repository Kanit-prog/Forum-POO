<?php
    namespace Model\Manager;
    
    use App\AbstractManager;
    
    class PostManager extends AbstractManager
    {
        private static $classname = "Model\Entity\Message";

        public function __construct(){
            self::connect(self::$classname);
        }

        public function findAll(){

            $sql = "SELECT *
                    FROM post";

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
                        FROM user 
                        WHERE id_post = :id";
            return self::getOneOrNullResult(
                self::select($sql, 
                    ["id" => $id], 
                    false
                ), 
                self::$classname
            );
        }

        public function findByTopic($id){

            $sql = "SELECT *
                    FROM post
                    INNER JOIN topic
                    ON topic.id_topic = post.topic_id";

            return self::getResults(
                self::select($sql,
                    ["id" => $id], 
                    true
                ), 
                self::$classname
            );
        }

    }