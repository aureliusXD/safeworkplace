<?php
session_start();
include("./assets/includes/functions.php");
@$email=$_POST["email"];
@$mdp=$_POST["mdp"];
@$valider=$_POST["valider"];
$message="";
if(isset($valider)){
    $res=$pdo->prepare("select * from user where email=? and mdp=? limit 1");
    $res->setFetchMode(PDO::FETCH_ASSOC);
    $res->execute(array($email, $mdp));
    $tab=$res->fetchAll();
    if(count($tab)==0)
        $message="<li>Mauvais Email ou mot de passe!</li>";
    else{
        $_SESSION["autoriser"]="oui";
        header("location:homepage.html");
    }
}