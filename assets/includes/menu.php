<?php require_once("./assets/includes/functions.php");?>
<?php

echo'
<nav class="navbar navbar-expand-md navbar-dark bg-dark">
    <div class="container">
        <a class="navbar-brand" href="./index.php">FILELEC</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExampleDefault" aria-controls="navbarsExampleDefault" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse justify-content-end" id="navbarsExampleDefault">
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./index.html">Acceuil<span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./category.php">Historique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./product.php">Produit</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="./contact.php">Contacter</a>
                </li>
            </ul>

            <form class="form-inline my-2 my-lg-0">
                <!--<div class="input-group input-group-sm">
                    <input type="text" class="form-control" placeholder="Search...">
                    <div class="input-group-append">
                        <button type="button" class="btn btn-secondary btn-number">
                            <i class="fa fa-search"></i>
                        </button>
                    </div>
                </div>
                <a class="btn btn-success btn-sm ml-3" href="cart.php">
                    <i class="fa fa-shopping-cart"></i> Cart
                    <span class="badge badge-light">3</span>
                </a>-->
            </form>';
        if(isset($_SESSION['autoriser']))
        {echo'
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./profil.php">Profil<span class="sr-only">(current)</span></a>
                </li>
            </ul>
            
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="./deconnexion.php">Deconnexion<span class="sr-only">(current)</span></a>
                </li>
            </ul>';
        }
        else
        {echo'
            <ul class="navbar-nav m-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="login.php">Connexion <span class="sr-only">(current)</span></a>
                </li>
            </ul>';
        }echo'
            <a class="btn btn-success btn-sm ml-3" href="cart.php">
                <i class="fa fa-shopping-cart"></i> Cart
                <span class="badge badge-light">3</span>
            </a>
        </div>
    </div>
</nav>'
?>