<h2>Bienvenue <?= App\Session::getUser()->getPseudo() ?></h2>
    
<p><a href="?ctrl=forum&method=ListTopics">Accéder aux sujets</a></p>

<?php
