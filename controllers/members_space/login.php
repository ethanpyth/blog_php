<?php
session_start();

include_once('../../models/connexion_sql.php');
include_once('../../models/members_space/db_operations.php');
include_once('../../views/members_space/login.php');

if(!isset($_POST)){
    include_once('../../views/members_space/login.php');
    echo '<br>Veuillez compléter tous les champs.<br>';
}else{
    $nickname = htmlspecialchars($_POST['nickname']);
    $pwd = htmlspecialchars($_POST['pwd']);
    if(!empty($_COOKIE['nickname']) && !empty($_COOKIE['pwd'])){
        header('Location: ../blog/index.php');
    }elseif((!empty($pwd) && !empty($nickname))){
        $pwd = sha1('gz' . $pwd);
        if(
            in_array($nickname, verify_members($nickname, $pwd)[0]) &&
            in_array($pwd, verify_members($nickname, $pwd)[0])
        ){
            if (isset($_POST['auto'])){
                setcookie('nickname', $_COOKIE['nickname'], time() + 24 * 3600);
                setcookie('pwd', $_COOKIE['pwd'], time() + 24 * 3600);
                $data = verify_members($_COOKIE['nickname'], $pwd);
            }else{
                $data = verify_members($_POST['nickname'], $pwd);
            }
            $_SESSION['id'] = $data[0]['id'];
            $_SESSION['nickname'] = $data[0]['nickname'];
            header('Location: ../blog/index.php');
        }else{
            include_once('../../views/members_space/login.php');
            echo '<br>Mauvais identifiant ou mot de passe. Veuillez réessayer.<br>';
        }
    }
}

echo '<br>Vous n\'avez pas de compte? <a href=\'./subscription.php\'>Inscrivez-vous ici.</a>';
