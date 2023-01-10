<?php
session_start();
require 'config/credential.php';

$nom = $_POST['nom'];
$nom = addslashes($nom);
$prenom = $_POST['prenom'];
$prenom = addslashes($prenom);
$adresse = $_POST['adresse'];
$adresse = addslashes ($adresse);
$mail = $_POST['mail'];
$mail = addslashes ($mail);
$mdp = $_POST['mdp'];
$mdp = addslashes($mdp);
$mdphash= password_hash ($mdp , PASSWORD_DEFAULT);
$tel = $_POST['tel'];
$tel = addslashes ($tel);
// Ajouter les données entrées à la BDD
$sql1 = "INSERT INTO client (Nom_Client, Prenom_Client, Adresse_Client, Mail_Client, Tel_Client, MDP_Client) VALUES ('$nom', '$prenom','$adresse','$mail','$tel','$mdphash')";
$stmt1= $bdd->prepare($sql1);
$stmt1->execute();

header('Location: meseleves.php');
die(); 