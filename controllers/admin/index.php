<?php
session_start();

include_once('../../models/connexion_sql.php');
include_once('../../models/admin/admin.php');
include_once('../../views/admin/index.php');

if ((isset($_POST['login']) && isset($_POST['pwd'])) && (!empty($_POST['login']) && !empty($_POST['pwd']))){
    $login = $_POST['login'];
    $pwd_cryptee = sha1($_POST['pwd'],'gz');
    $_SESSION = verify_admin($login, $pwd_cryptee);
    if(verify_admin($login, $pwd_cryptee)){
        header('Location: admin.php');
    }else{
        include_once('../../views/admin/index.php');
    }
}else{
    include_once('../../views/admin/index.php');
}