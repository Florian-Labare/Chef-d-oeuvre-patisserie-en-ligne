<?php

require __DIR__.'/../Models/creamModel.php';

$name = '';

if (isset($_POST['name'])) {

    $name = htmlspecialchars($_POST['name']);

    if (Creams::create($name))
    {
        header('Location:/Projet Chef d\'Oeuvre/creams/index.php');
        exit;
    } else {
        $message = 'Une erreur est survenue pendant la création.';
    }
}
require __DIR__.'/../Views/creams/add.php';
