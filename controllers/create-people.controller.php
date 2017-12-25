<?php 

require 'vendor/autoload.php';
$cities = City::all();
$message = '';

if ( isset($_POST['name']) && isset($_POST['email']) && isset($_POST['city']) ) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $city = $_POST['city'];
  Person::insert([
    'name' => $name,
    'email' => $email,
    'city_id' => $city
  ]);

  $message = 'successfully added person';
}
require 'views/create-people.view.php';