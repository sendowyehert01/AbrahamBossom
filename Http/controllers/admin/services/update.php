<?php 

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve('Core\Database');

// $currentUser = 2;

$service = $db->query("SELECT * FROM services WHERE id = :id", ['id' => $_POST['id']])->findOrFail();

// authorize($note['user_id'] === $currentUser);

$errors = [];


  if (! Validator::string($_POST['name'], 1 , 50)) {
    $errors['name'] = "A name of no more than 50 characters is required.";
  }

  if (! Validator::string($_POST['description'], 1 , 50)) {
    $errors['description'] = "A body of no more than 50 characters is required.";
  }


  if (! empty($errors)) {
    return view('admin/services/edit.view.php', [
      'heading' => 'Edit Service',
      'errors' => $errors,
    ]);
  }

  $db->query('UPDATE services SET name = :name, price = :price, description = :description WHERE id = :id', [
      'id' => $_POST['id'],
      'name' => $_POST['name'],
      'price' => $_POST['price'],
      'description' => $_POST['description'],
    ]);

  header('location: /admin/services');
  die();