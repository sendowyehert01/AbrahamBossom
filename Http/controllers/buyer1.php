<?php

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

// For navbar
$services = $db->query('SELECT * FROM services')->get();

view('buyer1.view.php', [
  'heading' => 'Form',
  'services' => $services,
  'db' => $db
]);