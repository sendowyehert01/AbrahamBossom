<?php
use Core\App;
use Core\Database;

$db = App::resolve('Core\Database');

$services = $db->query('SELECT * FROM services')->get();

$service = $db->query("SELECT * FROM services WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

$prices = $db->query("SELECT name, price, description FROM services WHERE id = :id", ['id' => $_GET['id']])->get();


view('service.view.php', [
  'heading' => $service['name'],
  'description' => $service['description'],
  'service_id' => $service['id'],
  'services' => $services,
  'prices' => $prices,
]);

