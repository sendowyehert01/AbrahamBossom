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

//Create an instance; passing `true` enables exceptions
$mail = new PHPMailer(true);

$db = App::resolve('Core\Database');

$auth = new Authenticator();

$email = $_POST['email'];
// $password = $_POST['password'];

$errors = [];

  if (! Validator::email($email)) {
    $errors['email'] = "Please provide a valid email.";
  }

  // if (! Validator::string($password, 7 , 255)) {
  //   $errors['password'] = "Please provide a password of atleast 7 characters.";
  // }

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

  $_SESSION['pin'] = str_pad(rand(0, 999999), 6, '0', STR_PAD_LEFT);

  try {
    //Server settings
    $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
    $mail->isSMTP();                                            //Send using SMTP
    $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
    $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
    $mail->Username   = 'odnes12@gmail.com';                     //SMTP username
    $mail->Password   = 'mtju ccuq nwec jkgy';                               //SMTP password
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
    $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

    //Recipients
    $mail->setFrom('odnes12@gmail.com', 'Abraham Bossom');
    $mail->addAddress($email);                                  //Add a recipient
    $mail->addReplyTo('odnes12@gmail.com', 'Abraham Bossom');
    // $mail->addCC('cc@example.com');
    // $mail->addBCC('bcc@example.com');

    //Content
    $mail->isHTML(true);                                  //Set email format to HTML
    $mail->Subject = 'Here is the subject';
    $mail->Body    = 'This is the HTML message body <b>' . $_SESSION['pin'] . '</b>';
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