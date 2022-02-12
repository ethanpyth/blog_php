<?php
include_once('../../views/admin/add.php');
include_once('../../models/connexion_sql.php');
include_once('../../models/admin/admin.php');

if (isset($_POST) && !empty($_POST['title']) && !empty($_POST['content'])){
    if(adding_billets($_POST['title'], $_POST['content'])){
        header('Location: ../blog/index.php');
    }
}else{
    include_once('add.php');
    echo 'Veuillez réessayer en remplissant tous les champs';
}
