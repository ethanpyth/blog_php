<?php

//afficher le billet
function get_billets($offset, $limit): array
{
    global $bdd;
    $offset = (int) $offset;
    $limit = (int) $limit;
    $req = $bdd->prepare('SELECT id, titre, contenu, DATE_FORMAT(date_creation, \'%d/%m/%Y à %Hh:%imin:%ss\') 
                    AS date_creation_fr FROM billets ORDER BY date_creation DESC limit :offset, :limit');
    $req->bindParam(':offset', $offset, PDO::PARAM_INT);
    $req->bindParam(':limit', $limit, PDO::PARAM_INT);
    $req->execute();
    return $req->fetchAll();
}

//recupérer les commentaires
function get_commentaires($id_billet): array|bool
{
    global $bdd;
    $id_billet = (int) $id_billet;

    $req = $bdd->query('SELECT MAX(id) AS lastId FROM billets');
    $donnees = $req->fetchAll();

    if ($id_billet > $donnees[0]['lastId']){
        return false;
    }else{
        $req = $bdd->prepare('SELECT auteur, commentaire, DATE_FORMAT(date_commentaire, \'%d/%m/%Y à %Hh %imin %ss\') 
                            AS date_commentaire_fr FROM commentaires WHERE id_billet = :id_billet ORDER BY date_commentaire');
        $req->bindParam(':id_billet', $id_billet, PDO::PARAM_INT);
        $req->execute();
        return $req->fetchAll();
    }
}

//ajouter les commentaires
function add_comments($author, $id_billet, $comment): bool
{
    global $bdd;
    $author = (string) $author;
    $id_billet = (int) $id_billet;
    $comment = (string) $comment;
    $req = $bdd->prepare('INSERT INTO commentaires(id_billet, auteur, commentaire, date_commentaire) VALUES (:id_billet, :author, :comment, NOW())');
    $req->bindParam(':id_billet', $id_billet, PDO::PARAM_INT);
    $req->bindParam(':author', $author);
    $req->bindParam(':comment', $comment);
    $req->execute();
    return true;
}