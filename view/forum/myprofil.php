<h2>Mon Profil</h2>

<?php

$user = $data['utilisateur'];
// foreach ($data["topic"] as $topic) {
//     echo $data['topic']->getUser()->getEmail();

// }
    ?>

    <ul>
        <li><?= $user->getPseudo() ?> </li>
        <li><?= $user->getEmail() ?></li>
        <li><?= $user->getAvatar() ?></li>
        <li><?= $user->getDateinscription() ?></li>
        <li><?= $user->getRole() ?></li>
    </ul>