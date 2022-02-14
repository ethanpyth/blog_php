<?php

session_start();

include_once('../../models/connexion_sql.php');
include_once('../../models/members_space/db_operations.php');
include_once('../../views/members_space/subscription.php');

//vérifier si les champs du formulaire d'inscription ne sont pas vides
if (isset($_POST) && (!empty($_POST['nickname']) && !empty($_POST['pwd']) && !empty($_POST['pwd1']) && !empty($_POST['email']))) {
    //vérifier si les mots de passes correspondent
    if ($_POST['pwd'] == $_POST['pwd1']) {
        //vérifier la validité de l'email
        if (preg_match("#^[a-z0-9._-]+@[a-z0-9._-]{2,}\.[a-z]{2,4}$#", $_POST['email'])){
            //vérifier si le pseudonyme exite dans la base de données
            try {
                $pwd = sha1('gz' . $_POST['pwd']);
                add_members($_POST['nickname'], $pwd, $_POST['email']);

                $data = verify_members($_POST['nickname'], $pwd);
                $_SESSION['id'] = $data[0]['id'];
                $_SESSION['nickname'] = $data[0]['nickname'];
                header('Location: ../blog/index.php');
            }catch (Exception $e){
                echo 'Désolé ce pseudonyme a déjà été pris. Choisissez-en un autre.';
            }
        }else{
            echo 'Votre adresse email n\'est pas valide';
        }
    } else {
        echo '<p> Veuillez entrer le meme mot de passe dans les deux champs de mot de passe</p>';
    }
}elseif(empty($_POST['nickname']) || empty($_POST['pwd']) || empty($_POST['pwd1']) || empty($_POS['email'])){
    echo '<p> Veuillez remplir tous les champs</p>';
}
