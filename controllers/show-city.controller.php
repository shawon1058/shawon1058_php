<?php 
require 'vendor/autoload.php';

$cities = City::all();

require 'views/show-city.view.php';