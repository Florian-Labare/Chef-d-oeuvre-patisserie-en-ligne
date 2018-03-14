<?php

require __DIR__.'/../Models/doughModel.php';

$doughs= Doughs::readAll();

require __DIR__.'/../Views/doughs/browse.php';
