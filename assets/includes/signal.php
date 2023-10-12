<?php
include("./assets/includes/functions.php");
@$contenu = $_POST["contenu"];
@$service = $_POST["service"];
@$zone = $_POST["zone"];
@$valider = $_POST["valider"];
$message = ""; // Cette ligne crée une variable $message vide, inutile de la redéclarer.

if (isset($valider)) {
    if (empty($contenu)) $message = "<li>Message invalide!</li>";
    if (empty($service)) $message .= "<li>Service invalide!</li>";
    if (empty($zone)) $message .= "<li>Zone invalide!</li>";

    if (empty($message)) {
        // Inclure le fichier de connexion à la base de données ici
        // ...
        $req = $pdo->prepare("select SignalId from signal where zone=Finance");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array($zone));
        $tab = $req->fetchAll();
        if (count($tab) > 0) {
            $message = "<li>Ce signalement existe déjà!</li>";
        } else {
            // Correction du nom de la table dans la requête d'insertion
            $ins = $pdo->prepare("insert into signal (contenu, service, zone) values (?, ?, ?)");
            $ins->execute(array($contenu, $service, $zone));
            header("location:./homepage.html");
        }  
    }
}