<?php 

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

$currentUser = $_SESSION['user']['id'];

$user = $db->query("SELECT * FROM users WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

authorize($user['id'] === $currentUser);

view('sessions/profile.view.php', [
  'user' => $user
]);