<?php

require __DIR__.'/../Models/creamModel.php';

$cream = null;

if (isset($_GET['id'])) {
    $cream = Creams::read($_GET['id']);
}

require __DIR__.'/../Views/creams/read.php';
