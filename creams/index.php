<?php

require __DIR__.'/../Models/creamModel.php';

$doughs= Creams::readAll();

require __DIR__.'/../Views/creams/browse.php';
