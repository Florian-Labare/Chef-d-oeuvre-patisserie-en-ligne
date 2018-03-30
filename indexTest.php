<?php

$path = 'browseTest.php';

require 'Models/doughModel.php';

$doughs= Doughs::readAll();

require 'Models/creamModel.php';

$creams = Creams::readAll();

require $path;
