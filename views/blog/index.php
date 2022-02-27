<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="../../views/bootstrap/css/bootstrap.css">
        <meta charset="UTF-8">
        <title>Accueil</title>
    </head>
    <body>
        <div class="row">
            <nav class="navbar navbar-inverse col-sm-2">
                <ul class="nav">
                    <li class="nav-item active">
                        <a class="nav-link" href="../../controllers/blog/index.php">Accueil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="../../controllers/minichat/index.php">Minichat</a>
                    </li>
                    <li class="nav-link">
                        <a class="nav-link" href=""></a>
                    </li>
                    <li>

                    </li>
                </ul>
            </nav>
        </div>
        <h1 class="Page-header text-center">FORSYTHE BLOG</h1>
        <div class="container">
            <p>Derniers billets du blog :</p>
            <?php
                for($index = 0; $index < count($billets); $index++)
                {
                ?>
                    <div class="text-black">
                        <h3 class="text-center">
                            <?php echo $billets[$index]['titre']; ?>
                        </h3>
                        <p class="text-center">
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