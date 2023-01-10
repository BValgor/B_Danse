<?php 
session_start();
require 'config/credential.php';

$cours = $_POST['cours'];

$reserve = "UPDATE cours SET Nombre_Reservation = Nombre_Reservation + 1 WHERE ID_Cours = $cours";
$reserve1= $bdd->prepare($reserve);
$reserve1->execute();

header ('Location:../informations.php');