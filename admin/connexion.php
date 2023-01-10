<?php 
session_start();

include "communes/headadmin.php";
include "communes/navbarco.php";
include 'config/credential.php';
?>


    <form class="connexion" action="action.php" method="POST">
  <div class="mb-3">
    <label for="exampleInputPseudo1" class="form-label">Nom d'utilisateur / Mail </label>
    <input type="text" class="form-control" id="user" name="user" aria-describedby="user">
  </div>
  <div class="mb-3">
    <label for="exampleInputPassword1" class="form-label">Password</label>
    <input type="password" class="form-control" id="password" name="password">
  </div>
  <button type="submit" class="btn btn-danger" name="connexion">Connexion</button>
    </form>
    <?php
    
    if (isset($_SESSION['error_message'])) {
        echo '<div class="alert alert-danger"> ' . $_SESSION['error_message'] . '</div>' ;
        unset($_SESSION['error_message']);
    }

   // echo password_hash ('bybyste29260', PASSWORD_DEFAULT);
    
    ?>



<?php
include "communes/footeradmin.php";

?>