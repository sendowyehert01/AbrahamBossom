<?php

use Core\Database;

$config = require(base_path("config.php"));
$db = new Database($config['database'], $config['account']['username'], $config['account']['password']);
$totalCustomers = $db->query("SELECT COUNT(*) as total FROM users WHERE position != 'superadmin' AND position != 'admin' AND position != 'staff'")->find()['total'];

$totalStaffs = $db->query("SELECT COUNT(*) as total FROM users WHERE position != 'superadmin' AND position != 'admin' AND position != 'guest'")->find()['total'];

$totalServices = $db->query("SELECT COUNT(*) as total FROM services")->find()['total'];


view('admin/index.view.php', [
  'totalCustomers' => $totalCustomers,
  'totalStaffs' => $totalStaffs,
  'totalServices' => $totalServices,
]);
