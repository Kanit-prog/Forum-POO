<?php

namespace Controller;

use App\Router;
use BadFunctionCallException;
use Model\Manager\UserManager;

class SecurityController
{

    //
    //  Affichage Page Inscription et Connexion
    // 

    public function login()
    {

        return [
            "view" => "security/log.php",
            "data" => null,
            "titrePage" => "Connexion"
        ];
    }

    public function register()
    {

        return [
            "view" => "security/register.php",
            "data" => null,
            "titrePage" => "Inscription"
        ];
    }

    //
    //  Enregistrer un utilisateur 
    // 

    public function addUser()
    {
        //Récupérer les infos de $_POST
        // var_dump($_POST);
        // die;

        foreach ($_POST as $key => $val) {
            if (!empty($val)) {
                ${$key} = $val;
                // var_dump($key);
            } else {
                //Stocker erreur en session et rediriger
            }
        }
        //Nettoyer les données et les vérifier (email, taille du mot de passe, la correspondance des mots de passe, etc)
        $email = strtolower(filter_var($email, FILTER_VALIDATE_EMAIL));
        // if(!$email){ 
        // var_dump($email);
        // die;
        // }

        //Nettoyage du pseudo
        $pseudonyme = filter_input(INPUT_POST, 'pseudonyme', FILTER_SANITIZE_STRING);
        //INPUT_POST récupère le name de l'input ciblé
        // var_dump($pseudonyme);
        // if(!$pseudonyme){
        //     var_dump($pseudonyme);
        //     die;
        // }


        //Vérifier si l'utilisateur existe déjà
        //Initialiser le manager -> findByEmail
        $utilisateurManager = new UserManager();
        //Si l'email de l'utilisateur existe déjà alors..  
        if ($utilisateurManager->findByEmail($email)) {
            var_dump($utilisateurManager->findByEmail($email));
            die;
        }
        //Si le mot de passe de l'utilisateur existe alors.. 
        if ($utilisateurManager->findByPseudo($pseudonyme)) {
            var_dump($utilisateurManager->findByPseudo($pseudonyme));
            die;
        }


        if (!$email) {
            var_dump($email);
            die;
        }
        if ($mdp !== $mdp2 && strlen($mdp < 8)) {
            //!== : si $mdp est différent de $mdp2 ou bien s'ils ne sont pas du même type 
            var_dump($mdp, $mdp2);
            die;
        }
        // Crypter le mot de passe
        $mdp = password_hash($mdp, PASSWORD_BCRYPT);
        //lance la méthode pour la requête
        $params = [
            "pseudo" => $pseudonyme,
            "mdp" => $mdp,
            "email" => $email
        ];
        $utilisateurManager->addUser($params);

        var_dump($utilisateurManager->addUser($params));

        // var_dump($_POST);
        //Initialise un manager et lance la méthode pour la requête

        //Return une vue avec un message (succès ou erreur)

        // return {
        //     "view"
        // }
    }
    public function connectUser()
    {
        if (isset($_POST['email']) && isset($_POST['mdp'])) {
            //si $_POST (post = formulaire) retourne une valeur dans le tableau des input email et mdp
            $email = htmlspecialchars($_POST['email']);
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
