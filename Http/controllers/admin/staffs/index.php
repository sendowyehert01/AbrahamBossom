<?php 

use Core\Database;

$config = require(base_path("config.php"));
$db = new Database($config['database'], $config['account']['username'], $config['account']['password']);

$staffs = $db->query("SELECT * FROM users WHERE position != 'superadmin' AND position != 'admin' AND position != 'guest'")->get();

view('admin/staffs/index.view.php', [
  'heading' => 'My Staffs',
  'staffs' => $staffs,
]);