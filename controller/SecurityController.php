<?php

namespace Controller;

use App\Router;

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
        die;

        foreach ($_POST as $key => $val) {
            if (!empty($val)) {
                ${$key} = $val;
            } else {
                //Stocker erreur en session et rediriger
            }
        }
        //Nettoyer les données et les vérifier (email, taille du mot de passe, la correspondance des mots de passe, etc)
        // Crypter le mot de passe
        //Initialise un manager et lance la méthode pour la requête
        //Return une vue avec un message (succès ou erreur )
    }
}
