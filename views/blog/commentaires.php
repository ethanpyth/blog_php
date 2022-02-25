<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="../../views/blog/style.css">
    <title>COMMENTAIRES</title>
</head>
<body>
<h1>MON SUPER BLOG!</h1>
<p><a href="index.php">Retour à la liste des billets</a></p>
<div class="news">
    <h3>
        <?php echo $billets[0]['titre']; ?>
    </h3>
    <p>
        <?php echo $billets[0]['contenu']; ?><br>
        <em>le <?php echo $billets[0]['date_creation_fr']; ?></em>
    </p>
</div>
<h2>Commentaires</h2>
<hr>
<?php
    if (empty($comments)){
        echo '<p> Aucun commentaire</p>';
    }else{
        for($index = 0; $index < count($comments) - 1; $index++)
        {
            ?>
            <p><strong><?php echo (htmlspecialchars($comments[$index]['auteur']) == $_SESSION['nickname']) ? '<em>' . $_SESSION['nickname'] . '</em>':  htmlspecialchars($comments[$index]['auteur']) ; ?></strong> <?php echo 'le ' . $comments[$index]['date_commentaire_fr']; ?></p>
            <p><?php echo nl2br(htmlspecialchars($comments[$index]['commentaire'])); ?></p>
            <hr>
            <?php
        }
        // Fin de la boucle des commentaires
    }
    ?>
    <form class="news" method="post" action="../../controllers/blog/commentaires.php?billet=<?php echo $_GET['billet']; ?>">
        <div>
            <label>
                <textarea name="commentaires" placeholder="Entrer votre texte ici"></textarea>
            </label>
        </div><br>
        <div><input type="submit" value="envoyer"></div>
    </form>
</body>
</html>