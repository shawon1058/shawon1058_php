<?php

use Illuminate\Database\Eloquent\Model;

class City extends Model {
  protected $table = 'cities';
  protected $guared = [];
  public function people () {
    return $this->hasMany(Person::class);
  }
}