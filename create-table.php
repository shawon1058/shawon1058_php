<?php
require 'vendor/autoload.php';

use Illuminate\Database\Capsule\Manager;

Manager::schema()->create('people', function ($t) {
  $t->increments('id');
  $t->string('name');
  $t->string('email');
  $t->integer('city_id')->unsigned();
  $t->timestamps();
});
Manager::schema()->create('cities', function ($t) {
  $t->increments('id');
  $t->string('name');
  $t->string('country');
  $t->timestamps();
});