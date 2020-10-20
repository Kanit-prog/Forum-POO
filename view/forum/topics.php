<h2> Topics </h2>

<?php
    foreach ($data["topic"] as $top) {
?>
        <a href="?ctrl=forum&method=show&id=<?= $top->getId(); ?>"><?= $top->getIntitule(); ?></a><?= $top->getContenu(); ?>
        
        <p> créer le </p>
    
        <?= $top->getDatecreation();
    }
    ?>