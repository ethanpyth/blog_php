<?php

session_start();

include_once('../../models/connexion_sql.php');
include_once('../../models/minichat/db_operation.php');

$data = message();

//vérifie si la table n'est pas vide
if (empty($data)){
    echo 'Chat vide';
}else{
    //affichage des données de la table
    include_once('../../views/minichat/index.php');   
}

//vérifie si la session n'est pas vide
if (empty($_SESSION['nickname'])){
    header('Location: ../members_space/login.php');
}else{
    if (!empty($_POST['pseudo']) && !empty($_POST['message'])){
        add_message(htmlspecialchars($_POST['pseudo']), htmlspecialchars($_POST['message']));
    }
}
