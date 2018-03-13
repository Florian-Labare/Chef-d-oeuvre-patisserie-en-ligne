<?php

require 'Models/doughModel.php';

$doughs= Doughs::readAll();
var_dump($doughs);
