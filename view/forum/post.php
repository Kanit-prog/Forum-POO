<?php

// var_dump($data);
echo $data['topic']->getIntitule();
echo $data['topic']->getContenu();
echo $data['topic']->getUser()->getEmail();

// foreach sert à parcourir plusieurs données, si une seul donnée est à récuperer c'est inutile

// foreach ($data["utilisateur"] as $user) {
//     echo $user->getEmail();
// }

foreach ($data["post"] as $post) {
    echo $post->getContenuPost();
    echo $post->getDatePublication();

}

?>