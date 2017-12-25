<?php 
require 'vendor/autoload.php';
$id = 1;
$city = City::find($id);

require 'views/living-people.view.php';