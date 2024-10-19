<?php
use Core\App;
use Core\Database;

$db = App::resolve('Core\Database');

$services = $db->query("SELECT * FROM services")->get();

$service = $db->query("SELECT * FROM services WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

$replies = $db->query("SELECT * FROM replies")->get();

view('service.view.php', [
  'heading' => $service['name'],
  'services' => $services,
  'service_id' => $service['id'],
  'service_name' => $service['name'],
  'replies' => $replies
]);
