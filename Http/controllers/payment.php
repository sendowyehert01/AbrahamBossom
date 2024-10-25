<?php

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

// For navbar
$services = $db->query('SELECT * FROM services')->get();

$transaction = null;

view('payment.view.php', [
  'heading' => 'PAYMENT METHOD',
  'services' => $services,
  'transaction' => $transaction
]);