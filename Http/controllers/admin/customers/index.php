<?php 

use Core\Database;

$config = require(base_path("config.php"));
$db = new Database($config['database'], $config['account']['username'], $config['account']['password']);

$customers = $db->query("SELECT * FROM users WHERE position != 'superadmin' AND position != 'admin' AND position != 'staff'")->get();

view('admin/customers/index.view.php',  [
  'heading' => 'My Customers',
  'customers' => $customers,
]);
