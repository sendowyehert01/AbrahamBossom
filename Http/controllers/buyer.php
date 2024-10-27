<?php

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

// For navbar
$services = $db->query('SELECT * FROM services')->get();

$burial_lots = $db->query('SELECT * FROM services WHERE type = "Burial Lots"')->get();

view('buyer.view.php', [
  'heading' => 'Form',
  'services' => $services,
  'burial_lots' => $burial_lots,
  'db' => $db
]);