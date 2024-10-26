<?php 

use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$config = require(base_path("config.php"));
$db = new Core\Database($config['database'], $config['account']['username'], $config['account']['password']);

$errors = [];

  if (! Validator::string($_POST['name'], 1 , 50)) {
    $errors['name'] = "A name of no more than 50 characters is required.";
  }

  if (! Validator::string($_POST['description'], 1 , 500)) {
    $errors['description'] = "A description of no more than 50 characters is required.";
  }

  if (! empty($errors)) {
    return view('admin/services/create.view.php', [
      'heading' => 'Create Service',
      'errors' => $errors,
    ]);
  }

  if (empty($errors)) {
    $db->query("INSERT INTO services(name, description, type) VALUES(:name, :description, :type)", ['name' => $_POST['name'] , 'description'=> $_POST['description'], 'type'=> $_POST['type']]);
  }

  header('location: /admin/services');
  die();

?>