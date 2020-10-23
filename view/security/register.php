<!DOCTYPE html>

  <form method="post" action="?ctrl=security&method=addUser">
    <div class="container">
      <h1>Formulaire d'inscription</h1>
      <p>Veuillez complétez ce formulaire pour compléter votre inscription.</p>

      <hr>

      <label for="pseudo"><b>Pseudo</b></label>
      <input type="text" placeholder="Renseignez un pseudo" name="pseudonyme" id="pseudonyme" required>

      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="Votre adresse mail" name="email" id="email" required>

      <label for="mdp"><b>Mot de passe</b></label>
      <input type="password" placeholder="Veuillez renseigner un mot de passe" name="mdp" id="mdp" required>

      <label for="mdp2"><b>Mot de passe</b></label>
      <input type="password" placeholder="Répetez votre mot de passe" name="mdp2" id="mdp2" required>
      <hr>
     

      <input type="submit" class="registerbtn" value="S'inscrire">
    </div>

    <div class="container signin">
      <p>Vous possédez déjà un compte ? <a href="?ctrl=security&method=login"> Connectez-vous</a>.</p>
      <p>En créeant un compte vous acceptez nos <a href="#">Termes & Conditions</a>.</p>
    </div>
  </form>
