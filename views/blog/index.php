<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Mon blog</title>
        <link rel="stylesheet" href="../../views/blog/style.css">
    </head>
    <body>
        <h1>Mon super Blog !</h1>
        <h4> <?php echo (!empty($_SESSION['nickname'])) ? 'Bienvenu à vous Mr./Mme. ' . ucfirst($_SESSION['nickname']) : null; ?></h4>
        <p>Derniers billets du blog :</p>
        <?php
            for($index = 0; $index < count($billets); $index++)
            {
            ?>
                <div class="news">
                    <h3>
                        <?php echo $billets[$index]['titre']; ?>
                    </h3>
                    <p>
                        <?php echo $billets[$index]['contenu']; ?><br>
                        <em>le <?php echo $billets[$index]['date_creation_fr']; ?></em>
                    </p>
                    <em><a href="../../controllers/blog/commentaires.php?billet=<?php echo $billets[$index]['id'];?>">Commentaires</a></em>
                    <hr>
                </div>
        <?php
        }
        ?>
    </body>
</html>