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

  if (! empty($errors)) {
    return view('buyer.view.php', [
      'errors' => $errors,
    ]);
  }

  if (empty($errors)) {

  $formArray = [
    'selectedService' => $_POST['selectedService'],
    'phase'=> $_POST['phase'] ?? null,
    'type'=> $_POST['type'] ?? null,
    'block'=> $_POST['block'] ?? null,
    'lot'=> $_POST['lot'] ?? null,
    'mop'=> $_POST['mop'],
    'totalPrice'=> $_POST['totalPrice'],
    'amortization'=> $_POST['amortization'] ?? null,
    'downpayment'=> $_POST['downpayment'] ?? null,
    'termsOfPayment'=> $_POST['termsOfPayment'] ?? null,
    'lastName'=> $_POST['lastName'],
    'firstName'=> $_POST['firstName'],
    'middle'=> $_POST['middle'],
    'suffix'=> $_POST['suffix'],
    'address'=> $_POST['address'],
    'birthDate'=> $_POST['birthDate'],
    'gender'=> $_POST['gender'],
    'contactNo'=> $_POST['contactNo'],
    'email'=> $_POST['email'],
    'refId' => str_pad(mt_rand(0, 999999999999), 12, '0', STR_PAD_LEFT),
  ];

    // For navbar
      $services = $db->query('SELECT * FROM services')->get();

    return view('payment.view.php', [
      'heading' => 'PAYMENT METHOD',
      'services' => $services,
      'transaction' => $formArray,
    ]);

  }
?>