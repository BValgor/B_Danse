<?php 
try {
$bdd = new PDO('mysql:host=localhost;dbname=bvalgor','sitededanse','motdepassealeatoire');
$bdd->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); 
} catch (exception $e) {
    echo "Une erreur à été rencontrée" ;
}
?>