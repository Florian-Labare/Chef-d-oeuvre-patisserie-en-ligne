<?php

require __DIR__.'/../Models/creamModel.php';

$creams = Creams::readAll();

require __DIR__.'/../Views/creams/browse.php';
