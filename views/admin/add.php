<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>AJOUT DE BILLETS</title>
</head>
<link rel="stylesheet" href="../../views/blog/style.css">
<body>
<h1>Ajout d'un nouveau billet</h1>
<p><a href="../blog/index.php">Retour à la liste des billets</a></p>
<form method="post" action="../../controllers/admin/add.php">
    <div>
        <label>
            <textarea name="content" placeholder="Taper le contenu du billet ici"></textarea>
        </label>
    </div><br>
    <div>
        <label>
            <input name="title" type="text" placeholder="Titre du billet">
        </label>
    </div><br>
    <input type="submit" value="submit" name="envoyer">
</form>
</body>
</html>