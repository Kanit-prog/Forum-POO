<?php

namespace Controller;

use App\Router;
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
        var_dump($_POST);
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
        $pseudonyme = filter_input(INPUT_POST, 'pseudo', FILTER_SANITIZE_STRING);
        // if(!$pseudonyme){
        //     var_dump($pseudonyme);
        //     die;
        // }


        //Vérifier si l'utilisateur existe déjà
            //Initialiser le manager -> findByEmail
            $utilisateurManager = new UserManager();
            //Si l'email de l'utilisateur existe déjà alors..  
            if ($utilisateurManager->findByEmail($email)){
                var_dump($utilisateurManager->findByEmail($email));
                die;
            }
            //Si le mot de passe de l'utilisateur existe alors.. 
            if ($utilisateurManager->findByPseudo($pseudonyme)){
                var_dump($utilisateurManager->findByPseudo($pseudonyme));
                die;
            }
            var_dump($pseudonyme);

        if(!$email){
            var_dump($email);
            die;
        }
        if($mdp !== $mdp2 && strlen($mdp < 8)){
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

        

        var_dump($_POST);
        //Initialise un manager et lance la méthode pour la requête

        //Return une vue avec un message (succès ou erreur )
    }
}
