<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="../../views/bootstrap/css/bootstrap.css">
    <style>
        .container{
            margin-top: 12.5%;
            margin-bottom: 12.5%;
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
                <form action="../../controllers/members_space/login.php" method="post">
                    <div class="mb-3 row">
                        <label for="pseudo" class="col-sm-3 form-label">Pseudonyme : </label>    
                        <div class="col-sm-9">
                            <input class="form-control" type="text" id="pseudo" name="nickname" placeholder="xyz">
                        </div>
                    </div>
                    <div class="mb-3 row">
                        <label for="pass" class="text-left col-sm-3 form-label">Mot de passe : </label>
                        <div class="col-sm-9">
                            <input class="form-control" id="pass" type="password" name="pwd" placeholder="********">
                        </div>
                    </div>
                    <div class="mb-3 form-check row">  
                        <div class="col-sm-1">
                            <input type="checkbox" class="form-check-input" name="auto" id="auto" value="auto_login">
                        </div>  
                        <label for="auto" class="col-sm-4 form-check-label">Connexion automatique |</label>
                        <p class="col-sm-7">Vous n'avez pas de compte? Inscrivez-vous <a href="../../controllers/members_space/subscription.php">ici</a></p>
                    </div>
                    <input type="hidden" name="page_from" value="login">
                    <div class="align-self-center">
                        <input class="btn btn-primary col-sm-6 offset-3" type="submit" value="Submit">
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