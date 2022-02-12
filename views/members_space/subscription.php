<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INSCRIPTION</title>
</head>
<body>
<h1>S'INSCRIRE</h1>
<form action="../../controllers/members_space/subscription.php" method="post">
    <div>
        Pseudonyme : <input type="text" name="nickname" placeholder="entrez votre pseudo">
    </div><br>
    <div>
        Mot de passe : <input type="password" name="pwd" placeholder="entrer votre mot de passe">
    </div><br>
    <div>
        Confirmation du mot de passe : <input type="password" name="pwd1" placeholder="entrer à nouveau votre mot de passe">
    </div><br>

    <div>
        Email : <input type="email" name="email" placeholder="entrer votre email">
    </div><br>
    <input type="hidden" name="page_from" value="subscription">
    <input type="submit">
</form>
</body>
</html>