<?php
session_start();

(isset($_SESSION) && !empty($_SESSION)) ? include_once('../../views/admin/admin.php') : header('Location: index.php');
