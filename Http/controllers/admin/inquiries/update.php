<?php 

use Core\App;

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

//Load Composer's autoloader
require base_path('vendor/autoload.php');

use Dotenv\Dotenv;

// Load .env file
$dotenv = Dotenv::createImmutable(base_path('/'));
$dotenv->load();

// Access the variables
$gmailUser = $_ENV['GMAIL'];
$gmailPass = $_ENV['PASS'];

//Load Composer's autoloader
require base_path('vendor/autoload.php');

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$db = App::resolve('Core\Database');

$inquiry = $db->query("SELECT * FROM inquiries WHERE id = :id", ['id' => $_POST['id']])->findOrFail();

$errors = [];

  // if (! Validator::string($_POST['name'], 1 , 50)) {
  //   $errors['name'] = "A name of no more than 50 characters is required.";
  // }

  // if (! Validator::string($_POST['description'], 1 , 50)) {
  //   $errors['description'] = "A body of no more than 50 characters is required.";
  // }


  // if (! empty($errors)) {
  //   return view('admin/inquiries/edit.view.php', [
  //     'heading' => 'Edit Service',
  //     'errors' => $errors,
  //   ]);
  // }

  $db->query('UPDATE inquiries SET 
                                  full_name = :full_name, 
                                  email = :email, 
                                  contact_no = :contact_no, 
                                  product_services = :product_services,
                                  notes = :notes,
                                  is_agree = :is_agree,
                                  status = :status
                                  WHERE id = :id',
                                  [
                                    'id' => $_POST['id'],
                                    'full_name' => $_POST['full_name'],
                                    'email' => $_POST['email'],
                                    'contact_no' => $_POST['contact_no'],
                                    'product_services' => $_POST['product_services'],
                                    'notes' => $_POST['notes'],
                                    'is_agree' => $_POST['is_agree'],
                                    'status' => $_POST['status'],
                                  ]);

if ($_POST['email'] && $_POST['status'] !== 'Pending')
{
  $reply = $db->query("SELECT * FROM replies WHERE id = :id", ['id' => $_POST['notes']])->findOrFail();

  try 
  {

    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $gmailUser;
    $mail->Password   = $gmailPass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom($gmailUser, 'Abraham Bossom');
    $mail->addAddress($_POST['email']);
    $mail->addReplyTo($gmailUser, 'Abraham Bossom');

    $mail->isHTML(true);
    $mail->Subject = '[ABMG] One Time Password (OTP)';
    $mail->Body    = 
      "<p>Good day,</p>
      <br>
      <p>" . $reply['answer'] . "</p>";

    $mail->send();

  header('location: /admin/inquiries');
  die();

    } 
      catch (Exception $e) 
    {

      $errors['email'] = 'Please provide a valid email.';

      if (! empty($errors)) {
        return view('admin/inquiries/edit.view.php', [
          'heading' => 'Edit Inquiry',
          'inquiry' => $inquiry,
          'errors' => $errors,
        ]);
      }
    }
}

header('location: /admin/inquiries');
die();