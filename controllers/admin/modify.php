<?php
include_once('../../models/connexion_sql.php');

//vérification du billet envoyé par la méthode get
if (isset($_GET) && !empty($_GET)){
    include_once('../../models/admin/admin.php');
    $idBillets = $_GET['index'];
    $billets = get_billet(0, 1);
    //vérification des champs du formulaire
    if (isset($_POST) && !empty($_POST['new_billet']) && !empty($_POST['new_title'])){
        if(modify_billets($_POST['new_title'], $_POST['new_billet'], $_GET['index'])){
            header('Location: ../blog/index.php');
        }
    }else{
        include_once('modify.php?index=' . $_GET ['index']);
        echo 'Veuillez remplir tous les champs';
    }
}else{
    include_once('../../models/blog/get_billets.php');
    $billets = get_billets(0, 5);
}

give_billet();

include_once('../../views/admin/modify.php');
