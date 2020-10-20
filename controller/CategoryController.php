<?php
    namespace Controller;
    
    use App\Session;
    use App\Router;     
    use Model\Manager\CategoryManager;
   
    class CategoryController {
        /**
         * Afficher la page Catégories
         */
        public function index(){

            
            $manCat = new CategoryManager();
            $cat = $manCat->findAll();

            return [
                "view" => "forum/category.php", 
                "data" => [
                    "category" => $cat
                ],
                "titrePage" => "FORUM | Catégorie"
            ];
        }


    }