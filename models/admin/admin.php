<?php

//verifie l'admin dans la base de données
function verify_admin($admin_name, $pwd): bool{
    global $bdd;
    $admin_name = (string) $admin_name;
    $pwd = (string) $pwd;
    $req = $bdd->prepare('SELECT admin_name, password FROM admin_site WHERE admin_name = :admin_name  AND password = :pwd');
    $req->bindParam(':admin_name', $admin_name, PDO::PARAM_STR);
    $req->bindParam(':pwd', $pwd, PDO::PARAM_STR);
    return $req->execute();
}

//envoie le billet pour l'afficher sur la page index du blog
function get_billet($offset, $limit): array
{
    global $idBillets;
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
    $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh:%imin:%ss\') 
                    AS date_creation_fr FROM billets WHERE id = :idBillets ORDER BY date_creation DESC limit :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->bindParam(':idBillets', $idBillets, PDO::PARAM_INT);
    $req->execute();
    return $req->fetchAll();
}

//ajouter un billet
function adding_billets($title, $content): bool
{
    global $bdd;
    $title = (string) $title;
    $content = (string) $content;
    $req = $bdd->prepare('INSERT INTO billets(titre, contenu, date_creation) VALUES(:title, :content, NOW())');
    $req->bindParam(':title', $title, PDO::PARAM_STR);
    $req->bindParam(':content', $content, PDO::PARAM_STR);
    $req->execute();
    return true;

}

//modifier un billet
function modify_billets($title, $content, $idBillets): bool
{
    global $bdd;
    $title = (string) $title;
    $content = (string) $content;
    $idBillets = (int) $idBillets;
    $req = $bdd->prepare('UPDATE billets SET titre = :title, contenu = :content WHERE id = :idBillets');
    $req->bindParam(':title', $title, PDO::PARAM_STR);
    $req->bindParam(':content', $content, PDO::PARAM_STR);
    $req->bindParam(':idBillets', $idBillets, PDO::PARAM_INT);
    $req->execute();
    return true;
}

//supprimer un billet
function delete_billets($idBillet): bool
{
    global $bdd;
    $idBillet = (int) $idBillet;
    $req = $bdd->prepare('DELETE FROM billets WHERE id = :idBillets');
    $req->bindParam(':idBillets', $idBillet, PDO::PARAM_INT);
    return $req->execute();
}

//supprimer les commentaires du billet supprimé
function delete_comments_from_billets($idBillets): bool
{
    global $bdd;
    $idBillets = (int) $idBillets;
    $req = $bdd->prepare('DELETE FROM commentaires WHERE id = :idBillets');
    $req->bindParam(':idBillets', $idBillets, PDO::PARAM_INT);
    $req->execute();
    return true;
}