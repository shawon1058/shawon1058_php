<?php 
require 'vendor/autoload.php';
$people = Person::all();
require 'views/show-people.view.php';