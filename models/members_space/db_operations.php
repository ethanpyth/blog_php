<?php

function add_members($nickname, $pwd, $email): bool
{
    global $bdd;

    $nickname = (string) $nickname;
    $pwd = (string) $pwd;
    $email = (string) $email;
    $req = $bdd->prepare('INSERT INTO members(nickname, password, email, subscription) 
                                VALUES (:nickname, :pwd, :email, CURDATE())');
    $req->bindParam(':nickname', $nickname, PDO::PARAM_STR);
    $req->bindParam(':pwd', $pwd, PDO::PARAM_STR);
    $req->bindParam(':email', $email, PDO::PARAM_STR);
    $req->execute();
    return true;
}

function verify_members($nickname, $pwd): array
{
    global $bdd;

    $nickname = (string) $nickname;
    $pwd = (string) $pwd;
    $req = $bdd->prepare('SELECT id, nickname, password, email FROM members WHERE nickname = :nickname  AND password = :pwd');
    $req->bindParam(':nickname', $nickname, PDO::PARAM_STR);
    $req->bindParam(':pwd', $pwd, PDO::PARAM_STR);
    $req->execute();
    return $req->fetchAll();
}