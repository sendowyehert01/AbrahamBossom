<?php 

use Core\App;
use Core\Database;
use Core\Validator;
use Core\Authenticator;

$db = App::resolve('Core\Database');

$pin = $_POST['pin'];

$newPin = (int) implode('', $pin);

if ($_SESSION === [])
{
  $errors = [];

  $errors['pin'] = "Please provide a correct pin.";

  if (! empty($errors)) {
    return view('registration/otp.view.php', [
      'heading' => 'Register',
      'errors' => $errors,
    ]);
  }
}

$otp = (int) $_SESSION['pin'];

if ($newPin === $otp)
{
  header('location: /multiform');

  session_destroy();

  die();
}

$errors = [];

$errors['pin'] = "Please provide a correct pin.";

if (! empty($errors)) {
  return view('registration/otp.view.php', [
    'heading' => 'Register',
    'errors' => $errors,
  ]);
}

?>