<?php
require 'config.php';
require 'core/Db.php';
require 'core/Query.php';
$connection = Db::connect($config);
$query = new Query($connection);