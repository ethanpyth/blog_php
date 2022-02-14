<?php
include_once('../../models/connexion_sql.php');
include_once('../../models/admin/admin.php');
include_once('../../models/blog/get_billets.php');

include_once('../billets.php');

if (isset($_POST) && !empty($_POST)){
    if(delete_billets($_POST['idBillet'])){
        delete_comments_from_billets($_POST['idBillet']);
        header('Location: .');
    }
}else{
    echo 'Désolé la suppression n\'a pas pu etre effectué';
}

$billets = get_billets(0, 5);

give_billet();

include_once('../../views/admin/deletion.php');
