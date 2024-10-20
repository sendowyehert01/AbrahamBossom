<?php 

use Core\App;
use Core\Database;
use Core\Validator;
use Core\Authenticator;

$db = App::resolve('Core\Database');

$pin = $_POST['pin'];
$email = $_POST['email'];

// dd($email);

$newPin = (int) implode('', $pin);

if ($_SESSION === [])
{
  $errors = [];

  $errors['pin'] = "Please provide a correct pin.";

  if (! empty($errors)) {
    return view('forgot/otp.view.php', [
      'heading' => 'Register',
      'errors' => $errors,
    ]);
  }
}

$otp = (int) $_SESSION['pin'];

// Set timeout duration
$timeout = 300;

// Check if the session variable for last activity exists
if (isset($_SESSION['LAST_ACTIVITY'])) {

    $errors = [];

    // Calculate the session duration
    if (time() - $_SESSION['LAST_ACTIVITY'] > $timeout) {
        // Session expired
        session_unset();
        session_destroy();
        
        $errors['pin'] = "Pin expires! ";
    }

    if (! empty($errors)) {
      return view('forgot/otp.view.php', [
        'heading' => 'Register',
        'errors' => $errors,
      ]);
    }
}

if ($newPin === $otp)
{
  session_destroy();

  return view('forgot/multiform.view.php', [
    'heading' => 'Forgot',
    'email' => $email,
  ]);
}

$errors = [];

$errors['pin'] = "Please provide a correct pin.";

if (! empty($errors)) {
  return view('forgot/otp.view.php', [
    'heading' => 'Register',
    'errors' => $errors,
  ]);
}

?>