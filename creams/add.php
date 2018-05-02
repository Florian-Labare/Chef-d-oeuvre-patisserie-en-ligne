<?php

require __DIR__.'/../Models/creamModel.php';

/*$name = '';

if (isset($_POST['name'])) {

    $name = htmlspecialchars($_POST['name']);

    if (Creams::create($name))
    {
        header('Location:/Chef-d-oeuvre-patisserie-en-ligne/creams');
        exit;
    } else {
        $message = 'Une erreur est survenue pendant la création.';
    }
}*/

$name = ($_POST['name'] ?? '');
$message = 'Ajoutez votre crème';

if (empty($name) == false) {
    $sanitized_name = htmlspecialchars($name);

    if (Doughs::create($sanitized_name))
    {
        header('Location: /Chef-d-oeuvre-patisserie-en-ligne/creams');
        exit;
    } else {
        $message = 'Une erreur est survenue pendant la création.';
    }
}

require __DIR__.'/../Views/creams/add.php';
