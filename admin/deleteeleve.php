<?php
session_start();
require 'config/credential.php';

if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $req = $bdd->prepare("UPDATE client SET disabled_client = 0 WHERE ID_Client = :id");
    $req->bindParam('id', $id, PDO::PARAM_INT);
    $req->execute();
    header ('Location:meseleves.php');
}
