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
        public function connectUser()
        {
            if (isset($_POST['email']) && isset($_POST['mdp'])) {
                //si $_POST (post = formulaire) retourne une valeur dans le tableau des input email et mdp
                $email = filter_input(INPUT_POST, 'email', FILTER_SANITIZE_EMAIL);
                //$email = enlever les caractères spéciaux de la valeur du tableau email 
                $mdp = htmlspecialchars($_POST['mdp']);
                //$mdp = enlever les caractères spéciaux de la valeur du tableau mdp 
    
                $check = $bdd->prepare('SELECT pseudo, email, mdp FROM utilisateur WHERE email = :email');
                //je place cette requête qui sera répertorié dans mon UserController dans une variable appellé $check
                $check->execute(array($email));
                $data = $check->fetch();
                //je récupère la ligne qui représente le résultat de $email et l'assigne à $data
                $row = $check->rowCount();
                //je compte cette ligne et j'assigne cette valeur à $row
    
                if ($row == 1) {
                    //si ligne = 1, donc si il y à une ligne 
                    if (filter_var($email, FILTER_VALIDATE_EMAIL))  
                    //je prends $email et je lui applique FILTER_VALIDATE_EMAIL
                        {
                            $mdp = hash('sha256', $mdp);
                            
                            if($data['mdp'] === $mdp)
                        }
                }
            } // else header('Location:index.php')
        }

    }