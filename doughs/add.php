<?php

require __DIR__.'/../Models/doughModel.php';

$base = '';

if (isset($_POST['base'])) {

    $base = htmlspecialchars($_POST['base']);

    if (Doughs::create($base))
    {
        header('Location:./index');
        exit;
    } else {
        $message = 'Une erreur est survenue pendant la création.';
    }
}
require __DIR__.'/../Views/doughs/add.php';
