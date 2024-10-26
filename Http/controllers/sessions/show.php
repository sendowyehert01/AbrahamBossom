<?php 

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

$currentUser = $_SESSION['user']['id'];

$user = $db->query("SELECT * FROM users WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

$services = $db->query("SELECT * FROM services")->get();

$transactions = $db->query("SELECT * FROM transactions a  JOIN payments b ON a.id = b.transaction_id WHERE a.created_by = :created_by", ['created_by' => $_GET['id']])->get();

authorize($user['id'] === $currentUser);

view('sessions/profile.view.php', [
  'services' => $services,
  'user' => $user,
  'transactions' => $transactions
]);