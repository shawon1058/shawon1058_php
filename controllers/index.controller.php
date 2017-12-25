<?php 
require 'vendor/autoload.php';
$cities = City::all();
require 'views/index.view.php';
