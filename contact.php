<?php

include "view/communes/head.php";
include "view/communes/navbar.php"; ?>



<form class ="contact">
  <div class="mb-3">
    <label for="email" class="form-label">Adresse Mail</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <div id="emailHelp" class="form-text">Veuillez entrer une adresse mail valide.</div>
  </div>
  <div class="mb-3">
    <label for="nom" class="form-label">Nom</label>
    <input type="text" class="form-control" id="nom" required minlength="2" maxlength="20">
  </div>
  <div class="mb-3">
    <label for="prenom" class="form-label">Prénom</label>
    <input type="text" class="form-control" id="prenom" required minlength="2" maxlength="20">
  </div>
  <div class="mb-3">
    <label for="commentaire" class="form-label">Commentaire</label>
    <textarea class="form-control" id="commentaire" rows="5"></textarea>
  </div>
  <button type="submit" class="btn btn-light">Submit</button>
</form>


<?php
include "view/communes/footer.php";

?>