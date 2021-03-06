<?php

//récupere les messages
function message(): array
{
    global $bdd;

    $req = $bdd->query('SELECT nickname, message FROM minichat ORDER BY id limit 0, 10');
    
    return $req->fetchAll();
}

//ajouter un message
function add_message($nickname, $message): bool
{
    global $bdd;

    $message = (string) $message;
    $nickname = (string) $nickname;
    $req = $bdd->prepare('INSERT INTO minichat(nickname, message) VALUES (:nickname, :message)');
    $req->bindParam(':nickname', $nickname,PDO::PARAM_STR);
    $req->bindParam(':message', $message, PDO::PARAM_STR);
    return $req->execute();
}