<?php

require __DIR__.'/../Models/doughModel.php';

$dough = null;

if (isset($_GET['id'])) {
    $dough = Doughs::read($_GET['id']);
}

require __DIR__.'/../Views/Doughs/read.php';
