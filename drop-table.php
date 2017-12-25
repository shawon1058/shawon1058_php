<?php 
require 'vendor/autoload.php';
use Illuminate\Database\Capsule\Manager;
Manager::schema()->dropIfExists('people');
Manager::schema()->dropIfExists('cities');







