<?php

namespace Controller;

use App\Session;
use App\Router;
use Model\Manager\TopicManager;
use Model\Manager\PostManager;
use Model\Manager\UserManager;

class ForumController
{

    public function index()
    {
        Router::redirectTo("home", "index");
    }

    /**
     * Afficher tous les topics
     */

    public function listTopics()
    {

        $manTopic = new TopicManager();
        $topics = $manTopic->findAll();

        return [
            "view" => "forum/topics.php",
            "data" => [
                "topic" => $topics
            ],
            "titrePage" => "FORUM | Sujets"
        ];
    }

    /**
     * Afficher les posts d'un topic
     */

    public function show()
    {

        $id = (isset($_GET['id'])) ? $_GET['id'] : null;
        $manTopic = new TopicManager();
        $manPost = new PostManager();

        $topic = $manTopic->findOneById($id);
        $post = $manPost->findByTopic($id);

        return [
            "view" => "forum/post.php",
            "data" => [
                "topic" => $topic,
                "post" => $post,
            ],
            "titrePage" => "FORUM | " . $topic->getIntitule(),
        ];
    }

    public function Profil()
    {
        $id = (isset($_GET['id'])) ? $_GET['id'] : null;
        // $manTopic = new TopicManager();
        // $manPost = new PostManager();
        $manUser = new UserManager();

        // $topic = $manTopic->findOneById($id);
        // $post = $manPost->findByTopic($id);
        $user = $manUser->findOneById($id);

        return [
            "view" => "forum/myprofil.php",
            "data" => [
                // "topic" => $topic,
                // "post" => $post,
                "utilisateur" => $user
            ],
            "titrePage" => "FORUM | Mon Profil"
            
        ];
    }

}
