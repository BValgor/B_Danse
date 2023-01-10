<?php 
//session_start();

include "communes/headadmin.php";
include "communes/navbarco.php";
include 'config/credential.php';
?>




<form class="enregistrement" action="action.php" method ="post">
  <div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" aria-describedby="nom" name="nom">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="prenom" aria-describedby="prenom" name="prenom">
  </div>
  <div class="mb-3">
    <label for="adresse" class="form-label">Adresse / Code Postal / Ville</label>
    <input type="text" class="form-control" id="adresse" aria-describedby="adresse" name="adresse">
  </div>
  <div class="mb-3">
    <label for="mail" class="form-label">Mail</label>
    <input type="mail" class="form-control" id="mail" aria-describedby="mail" name="mail">
  </div>
    <label for="mdp" class="form-label">Mot de passe</label>
    <input type="password" class="form-control" id="mdp" aria-describedby="mdp" name="mdp">
  </div>
  <div class="mb-3">
    <label for="tel" class="form-label">N° Téléphone</label>
    <input type="text" class="form-control" id="tel" aria-describedby="tel" name="tel">
  </div>
  <button type="submit" class="btn btn-light">Enregister</button>
</form>

<?php
include "communes/footeradmin.php";

?>