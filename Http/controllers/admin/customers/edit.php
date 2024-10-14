<?php 

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

// $currentUser = 2;

$customer = $db->query("SELECT * FROM users WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

// authorize($note['user_id'] === $currentUser);

view('admin/customers/edit.view.php', [
  'heading' => 'Edit Customer',
  'customer' => $customer
]);