<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <style>
            h1{
                padding-top: 25px;
            }
        </style>
        <link rel="stylesheet" href="../../views/bootstrap/css/bootstrap.css">
        <meta charset="UTF-8">
        <title>Accueil</title>
    </head>
    <body>
        <div class="container">
            <nav class="navbar-expand-md navbar navbar-dark bg-dark fixed-top">
                <div class="container">
                    <div class="col-md collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav">
                            <li class="nav-item active">
                                <a class="nav-link" href="../../controllers/blog/index.php">Accueil</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../controllers/minichat/index.php">Minichat</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="../../controllers/blog/profile.php">Profil</a>
                            </li>
                            <li>
                                
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-3 mx-auto justify-content-center">
                        <span class="navbar-brand text-center" style="display: inline;">FORSYTHE BLOG</span>
                    </div>
                    <div class="col-md collapse navbar-collapse" id="navbar-right">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#" class="nav-link">A propos</a>
                            </li>
                            <li class="nav-item">
                                <a href="#" class="nav-link">
                                    Contact
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-2">
                        <form class="form-inline d-flex" action="">
                            <input class="form-control rounded-3 me-2" type="search" name="search" id="search">
                        </form>
                    </div>
                </div>
            </nav>
            <hr>
            <h1>Accueil</h1>
            <p class="text-left">Posts récents :</p>
            <?php
                for($index = 0; $index < count($billets); $index++)
                {
                ?>
                    <div class="text-back-50">
                        <h3 class="bg-light text-center">
                            <?php echo $billets[$index]['titre']; ?>
                        </h3>
                        <p class="bg-light text-left">
                            <?php echo $billets[$index]['contenu']; ?><br>
                            <em>le <?php echo $billets[$index]['date_creation_fr']; ?></em>
                        </p>
                        <em><a href="../../controllers/blog/commentaires.php?billet=<?php echo $billets[$index]['id'];?>">Commentaires</a></em>
                        <hr>
                    </div>
            <?php
                }
            ?>
        </div>
    </body>
</html>