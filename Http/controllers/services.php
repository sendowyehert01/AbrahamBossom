<?php
use Core\App;
use Core\Database;

$db = App::resolve('Core\Database');

$service = $db->query("SELECT * FROM services WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

view('service.view.php', [
  'heading' => $service['name'],
  'service' => $service,
]);
