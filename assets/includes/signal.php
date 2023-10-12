<?php
@$contenu = $_POST["contenu"];
@$service = $_POST["service"];
@$zone = $_POST["zone"];
@$valider = $_POST["valider"];
$message = ""; // Cette ligne crée une variable $contenu vide, inutile de la redéclarer.

if (isset($valider)) {
    if (empty($contenu)) $contenu = "<li>Message invalide!</li>";
    if (empty($service)) $contenu .= "<li>Service invalide!</li>";
    if (empty($zone)) $contenu .= "<li>Zone invalide!</li>";

    if (empty($message)) {
        // Inclure le fichier de connexion à la base de données ici
        // ...
        $req = $pdo->prepare("select SignalId from signal where contenu=? limit 1");
        $req->setFetchMode(PDO::FETCH_ASSOC);
        $req->execute(array($zone));
        $tab = $req->fetchAll();
        if (count($tab) > 0) {
            $contenu = "<li>Ce signalement existe déjà!</li>";
        } else {
            // Correction du nom de la table dans la requête d'insertion
            $ins = $pdo->prepare("insert into signal (contenu, service, zone) values (?, ?, ?)");
            $ins->execute(array($contenu, $service, $zone));
            header("location:./homepage.html");
        }  
    }
}