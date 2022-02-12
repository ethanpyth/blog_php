<?php

function give_billet(): void
{
    foreach ($billets as $key => $value) {
        $billets['$key']['id'] = htmlspecialchars($billets['id']);
        $billets['$key']['titre'] = htmlspecialchars($billets['titre']);
        $billets['$key']['contenu'] = nl2br(htmlspecialchars($billets['contenu']));
    }
}
