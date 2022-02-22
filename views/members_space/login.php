<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../views/bootstrap/css/bootstrap.css">
    <style>
        .container{
            margin-top: 12.5%;
        }
    </style>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CONNEXION</title>
</head>
<body>
    <div class="container text-center ">
        <div class="row align-items-center">
            <div class="col-lg">
                <h1>SE CONNECTER</h1>
            </div>
            <div class="col-lg">
                <form action="../../controllers/members_space/login.php" method="post">
                    <div class="mb-3 row">
                        <label for="pseudo" class="col-sm-4 form-label">Pseudonyme : </label>    
                        <div class="col-sm-8">
                            <input class="form-control" type="text" id="pseudo" name="nickname" placeholder="xyz">
                        </div>
                    </div><br>
                    <div class="mb-3 row">
                        <label for="pwd" class="col-sm-4 form-label">Mot de passe : </label>
                        <div class="col-sm-8">
                            <input class="form-control" type="password" name="pwd" placeholder="********">
                        </div>
                    </div><br>
                    <div class="form-check">    
                        <input type="checkbox" class="form-check-input" name="auto" id="auto" value="auto_login">
                        <label for="auto" class="form-check-label">Connexion automatique</label><br>
                    </div>
                    <input type="hidden" name="page_from" value="login"><br>
                    <input class="btn-lg btn-primary" type="submit" value="Submit">
                    <p>Vous n'avez pas de compte? Inscrivez-vous <a href="../../controllers/members_space/subscription.php">ici</a></p>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.js"></script>
<script src="../bootstrap/js/assets/jquery-3.6.0.js"></script>
</html>