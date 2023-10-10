<?php
session_start();
if($_SESSION["autoriser"]!="oui"){
    header("location:login.php");
    exit();
}
?>
<!DOCTYPE html>
<html>
<head>
    <!-- Site meta 2  -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Filelec</title>
    <!-- CSS -->
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" type="text/css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="//fonts.googleapis.com/css?family=Open+Sans:400,300,600" rel="stylesheet" type="text/css">
    <link href="./assets/css/style.css" rel="stylesheet" type="text/css">
</head>

<body>

<?php include("./assets/includes/menu.php") ?>

<hr>
<div class="container bootstrap snippet">
    <div class="row">

        <div class="col-sm-10">
            <h1>
                <?php
                echo (date("H")<18)?("Bonjour"):("Bonsoir");
                ?>
            </h1>
        </div>
        <div class="col-sm-2"><a href="#" class="pull-right"></a></div>
    </div>
    <div class="row">
        <div class="col-sm-3"><!--left col-->

            <ul class="list-group">
                <li class="list-group-item text-muted">Votre Compte</li>
                <li class="list-group-item text-muted"><a data-toggle="tab" href ="#">Profil</a></li>
                <li class="list-group-item text-muted"><a data-toggle="tab" href ="historique .php">Historique</a></li>
            </ul>
        </div><!--/col-3-->>
    </div><!--/col-9-->
</div>
</div>
<?php include("./assets/includes/footer.php") ?><!--/row-->
</body>
