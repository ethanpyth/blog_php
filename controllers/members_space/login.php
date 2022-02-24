<?php
session_start();

include_once('../../models/connexion_sql.php');
include_once('../../models/members_space/db_operations.php');
include_once('../../views/members_space/login.php');


// verifie les champs de la page de login sont tous remplis
if(empty($_POST['nickname']) && empty($_POST['pwd'])){
    include_once('../../views/members_space/login.php');
    echo '<br>Veuillez compléter tous les champs.<br>';
}else{
    $nickname = htmlspecialchars($_POST['nickname']);
    $pwd = htmlspecialchars($_POST['pwd']);
    //verifie s'il existe des cookies sur la machine pour une rédirection vers le blog
    if(!empty($_COOKIE['nickname']) && !empty($_COOKIE['pwd'])){
        header('Location: ../blog/index.php');
    }elseif((!empty($pwd) && !empty($nickname))){
        $pwd = sha1('gz' . $pwd);
        //verifie si les données correspondent à celles contenues dans la base de données
        if(
            in_array($nickname, verify_members($nickname, $pwd)[0]) &&
            in_array($pwd, verify_members($nickname, $pwd)[0])
        ){
            //definir un cookie si la connexion automatique est définie
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
