<?php

require __DIR__.'/../Models/doughModel.php';

$location = 'index.php';
if (isset($_GET['id']) && !Doughs::delete($_GET['id'])) {
    $location = 'read.php?id=' . $_GET['id'];
}

header('Location:' . $location);
