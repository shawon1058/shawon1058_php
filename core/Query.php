<?php
class Query {
  protected $connection;
  public function connect($db)
  {
    $this->connection = $db;
  }
}