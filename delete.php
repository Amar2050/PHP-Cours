<?php

// var_dump($_POST);
$bdd = new PDO('mysql:host=localhost;dbname=jeux_projet', "root", "");
if (!empty($_POST['gameID'])) {


    $idGame = $_POST['gameID']; // vérifier type
    // avoir la bdd ($bdd) forcement... require...
    $req = "DELETE FROM jeux_video WHERE ID= :id";
    $stmt = $bdd->prepare($req); // ou ecrire dans prepare 
    $stmt->bindValue(":id", $idGame, PDO::PARAM_INT);
    $result = $stmt->execute(); // si good redirection !
    $stmt->closeCursor();
    
    
    if ($result) {
        header("Location: test.php");
    }
}