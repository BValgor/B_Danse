<?php 
session_start();

include "communes/headadmin.php";
include "communes/navbaradmin.php";
include 'config/credential.php';?>

<div class="conteneureleve">
        <h4>Les cours de danse</h4>
        <hr>
        <table class="table">
            <thead>
              <tr class="menu_tableau">
                <th scope="col">Cours</th>
                <th scope="col">Prix</th>
                <th scope="col">Durée</th>
                <th scope="col">Jour</th>
                <th scope="col">Heure</th>
                <th scope="col">Réservation</th>
              </tr>
            </thead>
            <tbody class="body">
                <?php 
                //Afficher tous les élèves
                $cours = $bdd->query("SELECT * FROM cours ORDER BY ID_Cours");
                while ($row = $cours->fetch()) 
                {
                    echo '<tr class="clone">' ;
                    echo '<td>'. $row['Libelle_Cours'] . '</td>';
                    echo '<td>'. $row['Prix_Cours'] . '</td>';
                    echo '<td>'. $row['Heure_Cours'] . '</td>';
                    echo '<td>'. $row['Jour_Cours'] . '</td>';
                    echo '<td>'. $row['Horaire_Cours'] . '</td>';
                        if ($row['Nombre_Reservation'] >= 20) {
                            echo '<td class="redreserve">Complet</td>';
                        } else {
                            echo '<td class="redreserve">'. $row['Nombre_Reservation'] . '</td>';
                        }
                    echo '</tr>';
                }
                ?>
            </tbody>
          </table>
</div>

<?php include "communes/footeradmin.php"; ?>