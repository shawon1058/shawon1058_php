<?php

use Illuminate\Database\Eloquent\Model;
class Person extends Model {
  protected $table = 'people';
  protected $guared = [];
  public function city() {
    return $this->belongsTo(City::class);
  }
}