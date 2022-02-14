<?php
include_once('../../models/connexion_sql.php');
include_once('../../models/minichat/db_operation.php');
include_once('../../views/minichat/index.php');

add_message($_POST['pseudo'], $_POST['message']);

//$data = message();
//if (empty($data)){
//    echo 'Chat vide';
//}else{
//    foreach ($data as $datum){
//        echo '<p><strong>' . htmlspecialchars($datum[])
//    }
//}

//if (!empty($_POST['pseudo']) && !empty($_POST['message'])){
//}else{
//    echo 'Veuillez remplir tous les champs';
//}

// while($data)
