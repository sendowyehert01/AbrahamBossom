<?php 

use Core\Database;

$config = require(base_path("config.php"));
$db = new Database($config['database'], $config['account']['username'], $config['account']['password']);

$inquiries = $db->query('SELECT * FROM inquiries')->get();

view('admin/inquiries/index.view.php', [
  'heading' => 'My Inquiries',
  'inquiries' => $inquiries,
]);