<?php 

require 'vendor/autoload.php';
$message = '';

if (isset($_POST['name']) && isset($_POST['country'])) {
  $name = $_POST['name'];
  $country = $_POST['country'];
  City::insert([
    'name' => $name,
    'country' => $country
  ]);
  $message = 'successfully added city';
}

require 'views/create-city.view.php';