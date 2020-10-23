<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.3/css/bootstrap.min.css" integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">

    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="<?= CSS_PATH ?>style.css">
    <title>Shuttle - Fallcase</title>
</head>

<body>

    <header>

        <div id="header_all">

            <div class="navbar">
                <ul>
                    <li><a href="?ctrl=home&method=index">Acceuil</a></li>
                    <li><a href="?ctrl=home&method=listCategory">Catégorie</a></li>
                    <li><a href="?ctrl=forum&method=listTopics">Topics</a></li>
                    <li><a href="?ctrl=forum&method=Profil&id=1">Mon profil</a></li>
                </ul>
            </div>

            <input onclick="location.href = '?ctrl=security&method=login';" type="button" value="Connexion">

            <input onclick="location.href = '?ctrl=security&method=register';" type="button" value="S'inscrire">

            <div class="register_p">

            <p>Première visite sur Fallcase ? Inscrivez-vous.</p>

            </div>

            <div class="avatar_header">
                <p>User_test</p>
                <!-- <img> temporaire, elle devra être remplacé par celle de l'utilisateur avec une fonction  -->
                <img src="http://via.placeholder.com/80x80" alt="">

            </div>

        </div>


    </header>

    <main>

        <div id="page">
            <?= $page ?>
        </div>

    </main>

    <footer>

        <div id="footer_all">

            <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Sunt ratione corporis, provident odio numquam
                magni
                officiis voluptatibus vel neque non quasi dolorum praesentium, veritatis fuga temporibus obcaecati ipsam
                delectus necessitatibus.</p>

            <div>
                <a href="#">A propos de Shuttle</a>
                <a href="#">Contact</a>
                <a href="#">Règle et Assistance</a>
            </div>

        </div>


    </footer>

</body>

</html>