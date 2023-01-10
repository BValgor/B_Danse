<?php 
session_start();
require 'config/credential.php';

// Gérer le formulaire de connexion
if (isset ($_POST['connexion'])) {
$utilisateur = $_POST['user'];
$utilisateur = addslashes ($utilisateur);
$password = $_POST['password'];
$password = addslashes ($password);

$connexion = $bdd->prepare ('SELECT * FROM danseur WHERE Nom_Danseur = :user');
$data = [':user' => $utilisateur];
$connexion->execute($data);

$user = $connexion -> fetch(PDO::FETCH_ASSOC);
// var_dump ($user);

if ($user != false) {
    if (password_verify ($password, $user['MDP_Danseur'])) {
        $_SESSION['user'] = $user['Nom_Danseur'];
        $_SESSION['connect'] = true;
        header ('Location: accueiladmin.php');
    } else {
        $_SESSION['error_message'] = 'Votre mot de passe est incorrect.';
        header ('Location: connexion.php');
    }
} else {
    $_SESSION['error_message'] = 'Votre mot de passe ou votre identifiant est incorrect.';
    header ('Location: connexion.php');
}
}

// Gérer le formulaire d'inscription

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
$sql = "INSERT INTO client (Nom_Client, Prenom_Client, Adresse_Client, Mail_Client, Tel_Client, MDP_Client) VALUES ('$nom', '$prenom','$adresse','$mail','$tel','$mdphash')";
$stmt= $bdd->prepare($sql);
$stmt->execute();

header('Location: ../index.php');
die(); 


?>