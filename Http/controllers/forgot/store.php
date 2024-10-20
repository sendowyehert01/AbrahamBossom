<?php 

use Core\App;
use Core\Database;
use Core\Validator;
use Core\Authenticator;

//Import PHPMailer classes into the global namespace
//These must be at the top of your script, not inside a function
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

$auth = new Authenticator();

$email = $_POST['email'];

$errors = [];

  if (! Validator::email($email)) {
    $errors['email'] = "Please provide a valid email.";
  }

  if (! empty($errors)) {
    return view('forgot/create.view.php', [
      'heading' => 'Register',
      'errors' => $errors,
    ]);
  }

 
  $_SESSION['LAST_ACTIVITY'] = time();
  $_SESSION['email'] = $_POST['email'];
  $_SESSION['pin'] = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

  try {

    $mail->SMTPDebug = SMTP::DEBUG_OFF;
    $mail->isSMTP();
    $mail->Host       = 'smtp.gmail.com';
    $mail->SMTPAuth   = true;
    $mail->Username   = $gmailUser;
    $mail->Password   = $gmailPass;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;
    $mail->Port       = 465;

    $mail->setFrom($gmailUser, 'Abraham Bossom');
    $mail->addAddress($email);
    $mail->addReplyTo($gmailUser, 'Abraham Bossom');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    $mail->isHTML(true);
    $mail->Subject = 'Your OTP for Password Reset';
    $mail->Body    = 
      "<p>Dear Customer,</p>
      <br>
      <p>You have requested to reset your password. To proceed, please use the One Time Password (OTP) provided below: </p>
      <p>Your OTP: <strong>" . $_SESSION['pin'] . "</strong></p>
      <p>This OTP is valid for only 5 minutes. If you did not make this request, please ignore this email, and your account will remain secure.</p>
      <p>For any further assistance, feel free to contact our support team.</p>
      <br>
      <p>Best Regards,</p>
      <p><strong>Abraham Bosom Memorial Garden</strong></p>

      <i>This is an automatic email. Please do not reply to this email.</i>";
    
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    header('location: /forgot_otp');
    die();

} catch (Exception $e) {

  $errors['email'] = 'Please provide a valid email.';

  if (! empty($errors)) {
    return view('forgot/create.view.php', [
      'heading' => 'Register',
      'errors' => $errors,
    ]);
  }
}

?>
