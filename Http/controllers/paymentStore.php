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
    return view('payment.view.php', [
      'errors' => $errors,
    ]);
  }

  if (empty($errors)) {

    $formType = $_POST['formType'] ?? null;

      if (! $formType)
      {
        $result = $db->query("SELECT * FROM payments WHERE ref_id = :ref_id", ['ref_id' => $_POST['refId']])->find();

        if (! $result)
        {
          $errors = [];

          $errors['refId'] = "Sorry, Reference ID not found!";
        
          if (! empty($errors)) {
            return view('payment.view.php', [
              'heading' => "PAYMENT METHOD",
              'errors' => $errors,
              'transaction' => null,
            ]);
          } 
        }

        $db->query("INSERT INTO payments (transaction_id, ref_id, mop, total_price, amortization, downpayment, amount, balance, terms, full_name, email, contact_no, service_id, proof, created_by) 
        VALUES (:transaction_id, :ref_id, :mop, :total_price, :amortization, :downpayment, :amount, :balance, :terms, :full_name, :email, :contact_no, :service_id, :proof, :created_by)",
        [
          'transaction_id' => $result['transaction_id'],
          'ref_id' => $_POST['refId'],
          'mop'=> $_POST['mop'],
          'total_price'=> $result['total_price'],
          'amortization'=> $result['amortization'],
          'downpayment'=> $result['downpayment'],
          'amount'=> $_POST['amount'],
          'balance'=> $result['balance'] - $_POST['amount'],
          'terms'=> $_POST['terms'],
          'full_name'=> $_POST['fullName'],
          'email'=> $_POST['email'],
          'contact_no'=> $_POST['contactNo'],
          'service_id'=> $_POST['selectedService'],
          'proof'=> null,
          'created_by' => $_SESSION['user']['id'],
        ]);

        header("location: /user-profile?id=". $_SESSION['user']['id']);
        die();
      }

    $db->query("INSERT INTO transactions (service_id, phase, type, block, lot, last_name, first_name, middle, suffix, address, birth_date, gender, contact_no, email, created_by) 
                VALUES (:service_id, :phase, :type, :block, :lot, :last_name, :first_name, :middle, :suffix, :address, :birth_date, :gender, :contact_no, :email, :created_by)",
                [
                  'service_id' => $_POST['selectedService'],
                  'phase'=> $_POST['phase'],
                  'type'=> $_POST['type'] ?? null,
                  'block'=> $_POST['block'] ?? null,
                  'lot'=> $_POST['lot'] ?? null,
                  'last_name'=> $_POST['lastName'],
                  'first_name'=> $_POST['firstName'],
                  'middle'=> $_POST['middle'],
                  'suffix'=> $_POST['suffix'],
                  'address'=> $_POST['address'],
                  'birth_date'=> $_POST['birthDate'],
                  'gender'=> $_POST['gender'],
                  'contact_no'=> $_POST['contactNo'],
                  'email'=> $_POST['email'],
                  'created_by' => $_SESSION['user']['id']
                ]);

      $db->query("SET @last_payment_id = LAST_INSERT_ID()");

      $db->query("INSERT INTO payments (transaction_id, ref_id, mop, total_price, amortization, downpayment, amount, balance, terms, full_name, email, contact_no, service_id, status, proof) 
      VALUES (@last_payment_id, :ref_id, :mop, :total_price, :amortization, :downpayment, :amount, :balance, :terms, :full_name, :email, :contact_no, :service_id, :status, :proof)",
      [
        'ref_id' => $_POST['refId'],
        'mop'=> $_POST['mop'],
        'total_price'=> $_POST['totalPrice'],
        'amortization'=> $_POST['amortization'] ?? null,
        'downpayment'=> $_POST['downpayment'] ?? null,
        'amount'=> $_POST['downpayment'],
        'balance'=> (int) $_POST['totalPrice'] - (int) $_POST['downpayment'],
        'terms'=> $_POST['termsOfPayment'] ?? null,
        'full_name'=> $_POST['fullName'],
        'email'=> $_POST['email'],
        'contact_no'=> $_POST['contactNo'],
        'service_id'=> $_POST['selectedService'],
        'status'=> 'Pending',
        'proof'=> null,
      ]);
  }


  header("location: /user-profile?id=". $_SESSION['user']['id']);
  die();
?>