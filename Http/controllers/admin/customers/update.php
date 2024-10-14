<?php 

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve('Core\Database');

// $currentUser = 2;

$customer = $db->query("SELECT * FROM users WHERE id = :id", ['id' => $_POST['id']])->findOrFail();

// authorize($note['user_id'] === $currentUser);

$errors = [];

  if (! Validator::string($_POST['first_name'], 1 , 50)) {
    $errors['first_name'] = "A first name of no more than 50 characters is required.";
  }

  if (! Validator::string($_POST['last_name'], 1 , 50)) {
    $errors['last_name'] = "A last name of no more than 50 characters is required.";
  }

  if (! Validator::string($_POST['middle'], 1 , 5)) {
    $errors['middle'] = "A middle of no more than 5 characters is required.";
  }

  if (! Validator::string($_POST['position'], 1 , 10)) {
    $errors['position'] = "A position of no more than 10 characters is required.";
  }

  if (! empty($errors)) {
    return view('admin/customers/edit.view.php', [
      'heading' => 'Edit Customers',
      'errors' => $errors,
    ]);
  }

  $db->query('UPDATE users SET 
    first_name = :first_name, 
    last_name = :last_name, 
    middle = :middle,
    gender = :gender,
    address = :address,
    position = :position
    WHERE id = :id', 
    [
      'id' => $_POST['id'],
      'first_name' => $_POST['first_name'],
      'last_name' => $_POST['last_name'],
      'middle' => $_POST['middle'],
      'gender' => $_POST['gender'],
      'address' => $_POST['address'],
      'position' => $_POST['position'],
    ]);

  header('location: /admin/customers');
  die();