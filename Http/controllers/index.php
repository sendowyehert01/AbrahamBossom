<?php

use Core\Database;

$config = require(base_path("config.php"));
$db = new Database($config['database'], $config['account']['username'], $config['account']['password']);

$services = $db->query('SELECT * FROM services')->get();

view('index.view.php', [
  'heading' => 'Home',
  'services' => $services,
  'db' => $db
]);