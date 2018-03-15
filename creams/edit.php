<?php

require __DIR__. '/../Models/creamModel.php';

$cream = null;
if (isset($_GET['id'])) {

    if (isset($_POST['name'])) {

        if (Doughs::update($_GET['id'], $_POST)) {
            header('Location:../creams/read.php?id=' . $_GET['id']);
            exit;
        }
    } else {
        $dough = Creams::read($_GET['id']);
    }
}

require __DIR__.'/../Views/creams/edit.php';
