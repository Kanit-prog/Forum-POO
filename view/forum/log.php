<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="<?= CSS_PATH ?>style.css">
</head>

<body>

  <form action="/action_page.php" method="post">

    <h1>Connexion</h1>

    <div class="container_log">
      <label for="pseudo"><b>Pseudo ou Email</b></label>
      <input type="text" placeholder="Pseudo / Email" name="pseudo" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Mot de passe" name="psw" required>

      <button type="submit">Se connecter</button>
      <label>
      <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
      </label>
    </div>

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Annuler</button>
      <span class="psw">Mot de passe <a href="#">oublié?</a></span>
    </div>
  </form>

</body>

</html>