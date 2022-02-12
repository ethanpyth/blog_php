<?php session_start(); ?>
<!Doctype html>
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="../../views/blog/style.css">
</head>
<body>
    <h1>Supprimer des billets</h1>
    <form action="../../controllers/admin/deletion.php" method="post">
        <?php
            for($index = 0; $index < count($billets) ; $index++)
            {
            ?>
                <div class="news">

                    <h3>
                        <input type="checkbox" name="idBillet" value="<?php echo $billets[$index]['id']; ?>" id="">
                        <?php echo $billets[$index]['titre']; ?>
                    </h3>
                    <p>
                        <?php echo $billets[$index]['contenu']; ?><br>
                        <em>le <?php echo $billets[$index]['date_creation_fr']; ?></em>
                    </p>
                    <hr>
                </div>
        <?php
            }
        ?>
        <input type="submit" value="Supprimer">
    </form>
</body>
</html>
