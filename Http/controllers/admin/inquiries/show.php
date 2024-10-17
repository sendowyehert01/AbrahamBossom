<?php 

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

// $currentUser = 2;

$inquiry = $db->query("SELECT * FROM inquiries WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

// authorize($note['user_id'] === $currentUser);

view('admin/inquiries/show.view.php', [
  'heading' => 'inquiry',
  'inquiry' => $inquiry,
]);
