<?php

require __DIR__. '/../Models/doughModel.php';

$dough = null;
if (isset($_GET['id'])) {

    if (isset($_POST['base'])) {

        if (Doughs::update($_GET['id'], $_POST)) {
            header('Location:../doughs/read.php?id=' . $_GET['id']);
            exit;
        }
    } else {
        $dough = Doughs::read($_GET['id']);
    }
}

require __DIR__.'/../Views/doughs/edit.php';
