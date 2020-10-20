<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>

  <form action="/action_page.php">
    <div class="container">
      <h1>Formulaire d'inscription</h1>
      <p>Veuillez complétez ce formulaire pour compléter votre inscription.</p>

      <hr>

      <label for="pseudo"><b>Pseudo</b></label>
      <input type="text" placeholder="Renseignez un pseudo" name="pseudo" id="pseudo" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Votre adresse mail" name="email" id="email" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Veuillez renseigner un mot de passe" name="psw" id="psw" required>

      <label for="psw-repeat"><b>Mot de passe</b></label>
      <input type="password" placeholder="Répetez votre mot de passe" name="psw-repeat" id="psw-repeat" required>
      <hr>
      <p>En créeant un compte vous acceptez nos <a href="#">Termes & Conditions</a>.</p>

      <button type="submit" class="registerbtn">S'inscrire</button>
    </div>

    <div class="container signin">
      <p>Vous possédez déjà un compte ? <a href="#">Connectez-vous</a>.</p>
    </div>
  </form>

</body>

</html>