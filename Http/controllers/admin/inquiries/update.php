<?php 

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve('Core\Database');

$inquiry = $db->query("SELECT * FROM inquiries WHERE id = :id", ['id' => $_POST['id']])->findOrFail();

// $errors = [];


  // if (! Validator::string($_POST['name'], 1 , 50)) {
  //   $errors['name'] = "A name of no more than 50 characters is required.";
  // }

  // if (! Validator::string($_POST['description'], 1 , 50)) {
  //   $errors['description'] = "A body of no more than 50 characters is required.";
  // }


  // if (! empty($errors)) {
  //   return view('admin/inquiries/edit.view.php', [
  //     'heading' => 'Edit Service',
  //     'errors' => $errors,
  //   ]);
  // }

  $db->query('UPDATE inquiries SET 
                                  full_name = :full_name, 
                                  email = :email, 
                                  contact_no = :contact_no, 
                                  product_services = :product_services,
                                  notes = :notes,
                                  is_agree = :is_agree,
                                  status = :status
                                  WHERE id = :id',
                                  [
                                    'id' => $_POST['id'],
                                    'full_name' => $_POST['full_name'],
                                    'email' => $_POST['email'],
                                    'contact_no' => $_POST['contact_no'],
                                    'product_services' => $_POST['product_services'],
                                    'notes' => $_POST['notes'],
                                    'is_agree' => $_POST['is_agree'],
                                    'status' => $_POST['status'],
                                  ]);

  header('location: /admin/inquiries');
  die();