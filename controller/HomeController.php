<?php
    namespace Controller;
    
    use App\Session;
    use App\Router;
use Model\Manager\CategoryManager;

class HomeController {
        /**
         * Afficher la page d'accueil
         */
        public function index(){

            return [
                "view" => "forum/home.php", 
                "data" => null,
                "titrePage" => "FallCase | Accueil"
            ];
        }

        public function listCategory(){

            $manager = new CategoryManager();
            $cat = $manager->findAll();

            return [
                "view" => "forum/category.php", 
                "data" => [ 
                "category" => $cat
                ],
                "titrePage" => "FallCase | Catégorie"
            ];
        }

    }