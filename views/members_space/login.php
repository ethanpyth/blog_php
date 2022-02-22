<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../views/bootstrap/css/bootstrap.css">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNEXION</title>
</head>
<body>
    <h1 class="col-6 text-center">SE CONNECTER</h1>
    <div class="container text-center">
        <form action="../../controllers/members_space/login.php" method="post">
            <div>
                Pseudonyme : <input type="text" name="nickname" placeholder="entrez votre pseudo">
            </div><br>
            <div>
                Mot de passe : <input type="password" name="pwd" placeholder="entrer votre mot de passe">
            </div><br>
            <input type="checkbox" name="auto" value="auto_login">Connexion automatique<br>
            <input type="hidden" name="page_from" value="login"><br>
            <input class="btn btn-primary" type="submit" value="Submit">
        </form>
    </div>
</body>
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.js"></script>
<script src="../bootstrap/js/assets/jquery-3.6.0.js"></script>
</html>