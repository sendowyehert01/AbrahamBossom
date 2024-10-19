<?php 

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

$inquiry = $db->query("SELECT a.id, a.full_name, a.email, a.contact_no, a.product_services, a.is_agree, a.notes, a.status, b.id service_id, b.name FROM inquiries a JOIN services b ON a.product_services = b.id WHERE a.id = :id", ['id' => $_GET['id']])->findOrFail();

view('admin/inquiries/edit.view.php', [
  'heading' => 'Edit Inquiry',
  'inquiry' => $inquiry
]);