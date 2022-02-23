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
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg">
                <h1 class="text-center">SE CONNECTER</h1>
            </div>
            <div class="col-lg bg-opacity-50 bg-gradient">
                <form class="form" action="../../controllers/members_space/login.php" method="post">
                    <div class="mb-3 row">
                        <label for="pseudo" class="col-sm-4 form-label">Pseudonyme : </label>    
                        <div class="col-sm-8">
                            <input class="form-control" type="text" id="pseudo" name="nickname" placeholder="xyz">
                        </div>
                    </div><br>
                    <div class="mb-3 row">
                        <label for="pwd" class="text-left col-sm-4 form-label">Mot de passe : </label>
                        <div class="col-sm-8">
                            <input class="form-control" type="password" name="pwd" placeholder="********">
                        </div>
                    </div><br>
                    <div class="mb-3 form-check row">  
                        <div class="col-sm-2">
                            <input type="checkbox" class="form-check-input" name="auto" id="auto" value="auto_login">
                        </div>  
                        <label for="auto" class="col-sm-6 form-check-label">Connexion automatique</label><br>
                    </div><br>
                    <p class="text-center">Vous n'avez pas de compte? Inscrivez-vous <a href="../../controllers/members_space/subscription.php">ici</a></p>
                    <input type="hidden" name="page_from" value="login"><br>
                    <div class="row align-items-center">
                        <input class="btn btn-primary col-sm-6 " type="submit" value="Submit">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.js"></script>
<script src="../bootstrap/js/assets/jquery-3.6.0.js"></script>
</html>