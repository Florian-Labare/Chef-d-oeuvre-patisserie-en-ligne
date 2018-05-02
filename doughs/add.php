<?php

require __DIR__.'/../Models/doughModel.php';

/*
$base = '';

if (isset($_POST['base'])) {
    $base = $_POST['base'];
}
*//*
$base = (isset($_POST['base']) ? $_POST['base'] : '');
*/
$base = ($_POST['base'] ?? '');
$message = 'Ajoutez votre pâte';

if (empty($base) == false) {
    $sanitized_base = htmlspecialchars($base);

    if (Doughs::create($sanitized_base))
    {
        header('Location: /Chef-d-oeuvre-patisserie-en-ligne/doughs');
        exit;
    } else {
        $message = 'Une erreur est survenue pendant la création.';
    }
}

require __DIR__.'/../Views/doughs/add.php';
