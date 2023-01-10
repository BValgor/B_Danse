<?php 
session_start();

include "communes/headadmin.php";
include "communes/navbaradmin.php";
include 'config/credential.php';?>

<div class="conteneureleve">
        <h4>Les élèves</h4>
        <hr>
        <table class="table">
            <thead>
              <tr class="menu_tableau">
                <th scope="col">Nom & Prénom</th>
                <th scope="col">Adresse</th>
                <th scope="col">Mail</th>
                <th scope="col">Téléphone</th>
                <th scope="col">Modifier</th>
                <th scope="col">Supprimer</th>
              </tr>
            </thead>
            <tbody class="body">
                <?php 
                //Afficher tous les élèves
                $client = $bdd->query("SELECT * FROM client WHERE disabled_client = 1 ORDER BY ID_Client");
                while ($row = $client->fetch()) 
                {
                    echo '<tr class="clone">' ;
                    echo '<td>'. $row['Nom_Client'] . ' ' . $row['Prenom_Client'] . '</td>';
                    echo '<td>'. $row['Adresse_Client'] . '</td>';
                    echo '<td>'. $row['Mail_Client'] . '</td>';
                    echo '<td>'. $row['Tel_Client'] . '</td>';

                    echo '<td><a href="action.php?id='.$row['ID_Client'].'" class="btn btn-light">Modifier</a></td>';
                    echo '<td><a href="deleteeleve.php?id='.$row['ID_Client'].'" class="btn btn-danger"> Supprimer</button></td>';
                    echo '</tr>';
                }
                ?>
            </tbody>
          </table>

          <button class="ajoutereleve btn btn-light">
        <a href="#ajouter" class="ajoutereleve1" >Ajouter un élève</a>
            </button>

        <div class= "enregistrementeleve hidden">
        <form class="addeleve" action="addeleve.php" method ="post" id="ajouter">
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
            <div class="mb-3">
                <label for="mdp" class="form-label">Mot de passe</label>
                <input type="password" class="form-control" id="mdp" aria-describedby="mdp" name="mdp">
            </div>
            <div class="mb-3">
                <label for="tel" class="form-label">N° Téléphone</label>
                <input type="text" class="form-control" id="tel" aria-describedby="tel" name="tel">
            </div>
            <button type="submit" class="btn btn-light">Enregister</button>
            <br>
        </form>
            <br>
            <button class="fermeraddeleve btn btn-danger">Fermer</button>
        </div>
    </div>

<?php

include "communes/footeradmin.php"; ?>