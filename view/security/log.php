  <form action="?ctrl=security&method=connectUser" method="post">

    <h1>Connexion</h1>

    <div class="container_log">
      <label for="email"><b>Email</b></label>
      <input type="text" placeholder="email" name="email" required>

      <label for="psw"><b>Mot de passe</b></label>
      <input type="password" placeholder="Mot de passe" name="mdp" required>

      <input type="submit">Se connecter</input>
      <label>
        <input type="checkbox" checked="checked" name="remember"> Se souvenir de moi
      </label>
    </div>

    <!-- <input type="hidden" name="csrf" value="<?php //echo $token; ?>"> -->

    <div class="container" style="background-color:#f1f1f1">
      <button type="button" class="cancelbtn">Annuler</button>
      <span class="psw">Mot de passe <a href="#">oublié?</a></span>
    </div>

  </form>

  <p> Première fois sur FallCase ? <a href="?ctrl=security&method=register"> Inscrivez-vous </a></p>