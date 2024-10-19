<?php 

use Core\Database;

$config = require(base_path("config.php"));
$db = new Database($config['database'], $config['account']['username'], $config['account']['password']);

$inquiries = $db->query('SELECT a.id, a.full_name, a.email, a.contact_no, a.notes, a.is_agree, a.status, b.name, c.reply FROM inquiries a 
JOIN services b ON a.product_services = b.id 
JOIN replies c ON c.id = a.notes WHERE a.deleted_at IS NULL')->get();

view('admin/inquiries/index.view.php', [
  'heading' => 'My Inquiries',
  'inquiries' => $inquiries,
]);