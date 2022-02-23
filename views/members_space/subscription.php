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
    <title>INSCRIPTION</title>
</head>
<body>
    <div class="container text-center">
        <div class="row align-items-center">
            <h1 class="col-4">INSCRIVEZ-VOUS ICI</h1>
            <form class="col-8" action="../../controllers/members_space/subscription.php" method="post">
                <div class="mb-3 row">
                    <label for="nickname" class="form-label col-sm-4">Pseudonyme : </label>    
                    <div class="col-sm-8">
                        <input type="text" id="nickname" class="form-control" name="nickname" placeholder="xyz">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pwd" class="form-label col-sm-4">Mot de passe : </label>
                    <div class="col-sm-8">
                        <input type="password" id="pwd" class="form-control" name="pwd" placeholder="********">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="pwd1" class="form-label col-sm-4">Confirmation du mot de passe : </label>
                    <div class="col-sm-8">
                        <input type="password" name="pwd1" class="form-control" id="pwd1" placeholder="********">
                    </div>
                </div>
                <div class="mb-3 row">
                    <label for="email" class="form-label col-sm-4">Addresse electronique : </label>
                    <div class="col-sm-8">
                        <input type="email" id="email" class="form-control" name="email" placeholder="xyz@example.com">
                    </div>
                </div>
                <input type="hidden" name="page_from" value="subscription">
                <input type="submit" class="btn btn-primary">
            </form>
            <p>Avez-vous déjà un compte? Connectez-vous <a href="../../controllers/members_space/login.php">ici</a>.</p>
        </div>
    </div>
</body>
<script src="../bootstrap/js/bootstrap.js"></script>
<script src="../bootstrap/js/bootstrap.bundle.js"></script>
<script src="../bootstrap/js/assets/jquery-3.6.0.js"></script>
</html>