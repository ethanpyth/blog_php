<?php
include_once('../../models/connexion_sql.php');



session_start();

//get the billet and comments
if (isset($_GET) and !empty($_GET)){

    include_once('../../models/admin/admin.php');
    $idBillets = $_GET['billet'];
    $billets = get_billet(0, 1);
}
include_once('../../models/blog/get_billets.php');
//add the comments to the DB
if (isset($_POST) && !empty($_POST)){
    $add_comments = add_comments($_SESSION['nickname'], $_GET['billet'], $_POST['commentaires']);
}


$comments = get_commentaires($_GET['billet']);

//show the billets and the comments
foreach ($comments as $key => $value)
{
    $comments['$key']['auteur'] = htmlspecialchars($comments['auteur']);
    $comments['$key']['commentaire'] = nl2br(htmlspecialchars($comments['commentaire']));
}

include_once('../../views/blog/commentaires.php');
