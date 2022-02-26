<!DOCTYPE html>
<html lang="en">
<head>
    <style>
    </style>
    <link rel="stylesheet" href="../../views/bootstrap/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MINICHAT</title>
</head>
<body>
<h1 class="text-center">Minichat</h1>
<form class="col-12 row g-3 justify-content-center align-items-end" action="../../controllers/minichat/index.php" method="post">
    <div class="col">
        <label for="nickname" class="visually-hidden">
            Pseudo :
        </label>
        <input readonly class="form-control-plaintext" type="text" id="nickname" name="nickname" value="<?php echo (!empty($_SESSION['nickname'])) ? $_SESSION['nickname'] : ''; ?>">
    </div>
    <div class="col">
        <label class="visually-hidden" for="message"> 
            Message :            
        </label>  
        <textarea name="message" id="message" class="form-control" placeholder="Entrez votre message"></textarea>
    </div><br>
    <div class="col">
        <input type="submit" class="btn btn-primary mb-3"value="Poster">
    </div>
</form>
</body>
</html>