<?php 

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

// $currentUser = 2;

$staff = $db->query("SELECT * FROM users WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

// authorize($note['user_id'] === $currentUser);

view('admin/staffs/edit.view.php', [
  'heading' => 'Edit Staff',
  'staff' => $staff
]);