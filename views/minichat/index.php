<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINICHAT</title>
</head>
<body>
<h1>Minichat</h1>
<form action="../../controllers/minichat/index.php" method="post">
    <div>
        <label>
            Pseudo : <input type="text" name="pseudo">
        </label>
    </div><br>
    <div>
        <label>
            Message : <textarea name="message" cols="30" rows="10" placeholder="Entrez votre message"></textarea>
        </label>  
    </div><br>
    <input type="submit" value="Poster">
</form>
</body>
</html>