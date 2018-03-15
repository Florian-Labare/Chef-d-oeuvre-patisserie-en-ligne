<?php

require __DIR__.'/../Models/creamModel.php';

$location = 'index.php';
if (isset($_GET['id']) && !Creams::delete($_GET['id'])) {
    $location = 'read.php?id=' . $_GET['id'];
}

header('Location:' . $location);
