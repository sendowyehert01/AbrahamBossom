<?php 

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

// $currentUser = 2;

// For navbar
$services = $db->query('SELECT * FROM services')->get();

$service = $db->query("SELECT * FROM services WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

// authorize($note['user_id'] === $currentUser);

view('service.view.php', [
  'heading' => $service['name'],
  'services' => $services
]);