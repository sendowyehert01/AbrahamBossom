<?php
use Core\App;
use Core\Database;

$db = App::resolve('Core\Database');

$services = $db->query('SELECT * FROM services')->get();

$service = $db->query("SELECT * FROM services WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

$prices = $db->query("SELECT name, price, description FROM services WHERE id = :id", ['id' => $_GET['id']])->get();

$currentUser = $_SESSION['user']['id'];

$user = $db->query("SELECT * FROM users WHERE id = :id", ['id' => $currentUser])->findOrFail();

authorize($user['id'] === $currentUser);

view('service.view.php', [
  'heading' => $service['name'],
  'description' => $service['description'],
  'services' => $services,
  'prices' => $prices,
  'user' => $user
]);

