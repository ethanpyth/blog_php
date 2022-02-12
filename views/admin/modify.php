<html>
<head>
    <meta charset="UTF-8">
    <title>MODIFICATION</title>

</head>
<link rel="stylesheet" href="../../views/blog/style.css">
<body>
<h1>Modification</h1>
<p><em><a href="../../controllers/admin/admin.php">Retour à la page d'administration</a></em></p>
<?php
if(!isset($_GET['index'])){
    for($index = 0; $index < count($billets) - 1; $index++)
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
            <em><a href="../../controllers/admin/modify.php?index=<?php echo $billets[$index]['id']?>">Modifier</a></em>
            <hr>
        </div>
        <?php
    }
}else{
    ?>
    <div class="news">
            <h3><?php echo $billets[0]['titre']; ?></h3>
    <p>
        <?php echo $billets[0]['contenu']; ?><br>
        <em>le <?php echo $billets[0]['date_creation_fr']; ?></em>
    </p>
    </div>
    <form action="../../controllers/admin/modify.php?index=<?php echo $billets[0]['id']?>"" method="post">
        Modifier ici le billet : 
            <textarea name="new_billet" cols="30" rows="10" placeholder="Entrer ici le nouveau commentaire"></textarea><br><br>
        Nouveau titre : <input type="text" name="new_title"><br><br>
        <input type="submit" value="submit">
    </form>
<?php
}
?>
</body>
</html>