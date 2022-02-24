<?php

session_start();

include_once('../../models/connexion_sql.php');
include_once('../../models/blog/get_billets.php');
include_once('../billets.php');

$billets = get_billets(0, 5);
give_billet();

include_once('../../views/blog/index.php');
