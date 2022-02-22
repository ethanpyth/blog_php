<?php

session_start();

include_once('../../models/connexion_sql.php');
include_once('../../models/minichat/db_operation.php');
include_once('../../views/minichat/index.php');

$data = message();

//vérifie si la table n'est pas vide
if (empty($data)){
    echo 'Chat vide';
}else{
    //affichage des données de la table
    foreach ($data as $datum){
        echo '<p><strong>' . htmlspecialchars($datum['nickname']) . '</strong> : ' . htmlspecialchars($datum['message']) . '</p>';
    }
}

//vérifie si la session n'est pas vide
if (!empty($_SESSION['nickname'])){
    if (!empty($_POST['pseudo']) && !empty($_POST['message'])){
        add_message($_POST['pseudo'], $_POST['message']);
    }else{
        echo ' Veuillez remplir tous les champs';
    }
}else{
    header('Location: ../members_space/login.php');
}
