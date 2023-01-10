<?php

include "admin/config/credential.php";
include "view/communes/head.php";
include "view/communes/navbar.php"; ?>

<div class="conteneurcours">
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

<div class ="containerreservecours">
    <form class="reservecours" action="admin/reserve.php" method ="post" id="reserve">
        <select class="form-select" aria-label="Default select example" name="cours" id="cours">
            <option selected>Quel cours souhaitez-vous reserver?</option>
            <option value="1">L.A Style</option>
            <option value="2">Hip-Hop</option>
            <option value="3">Popping</option>
            <option value="4">House Dance</option>
            <option value="5">Video Class</option>
        </select>
            </br>
        <button type="submit" class="btn btn-danger">Enregister</button>

    </form>
</div>

<?php
include "view/communes/footer.php";

?>