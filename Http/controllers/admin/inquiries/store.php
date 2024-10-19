<?php 

use Core\Database;
use Core\Validator;

require base_path('Core/Validator.php');

$config = require(base_path("config.php"));
$db = new Core\Database($config['database'], $config['account']['username'], $config['account']['password']);

$errors = [];

  // if (! Validator::string($_POST['name'], 1 , 50)) {
  //   $errors['name'] = "A name of no more than 50 characters is required.";
  // }

  // if (! Validator::string($_POST['price'], 1 , 10)) {
  //   $errors['price'] = "A price of no more than 10 characters is required.";
  // }

  // if (! Validator::string($_POST['description'], 1 , 500)) {
  //   $errors['description'] = "A description of no more than 50 characters is required.";
  // }

  // if (! empty($errors)) {
  //   return view('admin/inquiries/create.view.php', [
  //     'heading' => 'Create Inquiry',
  //     'errors' => $errors,
  //   ]);
  // }

  if (empty($errors)) {
    $db->query("INSERT INTO inquiries(full_name, email, contact_no, product_services, notes, is_agree) 
                VALUES(:full_name, :email, :contact_no, :product_services, :notes, :is_agree)", 
                [ 'full_name' => $_POST['full_name'] , 
                  'email' => $_POST['email'], 
                  'contact_no'=> $_POST['contact_no'],
                  'product_services'=> $_POST['product_services'],
                  'notes'=> $_POST['notes'],
                  'is_agree'=> $_POST['is_agree'],
                ]);
  }

  header('location: /');
  die();

?>