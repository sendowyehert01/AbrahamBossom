<?php 

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

$inquiry = $db->query("SELECT * FROM inquiries WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

$db->query('UPDATE inquiries SET 
full_name = :full_name, 
email = :email, 
contact_no = :contact_no, 
product_services = :product_services,
notes = :notes,
is_agree = :is_agree,
status = :status,
deleted_at = :deleted_at
WHERE id = :id',
[
  'id' => $inquiry['id'],
  'full_name' => $inquiry['full_name'],
  'email' => $inquiry['email'],
  'contact_no' => $inquiry['contact_no'],
  'product_services' => $inquiry['product_services'],
  'notes' => $inquiry['notes'],
  'is_agree' => $inquiry['is_agree'],
  'status' => $inquiry['status'],
  'deleted_at' => date('Y-m-d H:i:s'),
]);

// $db->query("DELETE from inquiries where id = :id", [ 'id' =>  $_GET['id'] ]);

header('location: /admin/inquiries');
exit();
