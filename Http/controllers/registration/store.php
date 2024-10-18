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
    return view('registration/create.view.php', [
      'heading' => 'Register',
      'errors' => $errors,
    ]);
  }

  $user = $db->query("SELECT * FROM users where email = :email", ['email' => $email])->find();


if ($user) {

  $errors['email'] = "Email is already exists";

  if (! empty($errors)) {
    return view('registration/create.view.php', [
      'heading' => 'Register',
      'errors' => $errors,
    ]);
  }
  
} else {
  
  // $db->query("INSERT INTO users(email, password) VALUES(:email, :password)", [
  //   'email'=> $email,
  //   'password' => password_hash($password, PASSWORD_BCRYPT),
  // ]);

  // $auth->login($user);

  $_SESSION['LAST_ACTIVITY'] = time();
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
    $mail->Subject = '[ABMG] One Time Password (OTP)';
    $mail->Body    = 
      "<p>Good day,</p>
      <br>
      <p>Thank you for visiting Abraham's Bosom website. To complete your registration, please enter the 6-digit One Time Pin (OTP): </p>
      <p><strong>" . $_SESSION['pin'] . "</strong></p>
      <p>This code is valid for only 5 minutes. Pleasr keep your OTP confidential and do not share it to anyone.</p>
      <br>
      <p>Thank you</p>

      <i>This is an automatic email. Please do not reply to this email.</i>";
    
    $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

    $mail->send();

    header('location: /otp');
    die();

} catch (Exception $e) {

  $errors['email'] = 'Please provide a valid email.';

  if (! empty($errors)) {
    return view('registration/create.view.php', [
      'heading' => 'Register',
      'errors' => $errors,
    ]);
  }
}

}

?>
