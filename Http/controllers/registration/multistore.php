<?php 

use Core\App;
use Core\Database;
use Core\Validator;
use Core\Authenticator;

$db = App::resolve('Core\Database');

// dd($_POST);

$first_name = $_POST['first_name'];
$last_name = $_POST['last_name'];
$middle = $_POST['middle'];
$gender = $_POST['gender'];
$suffix = $_POST['suffix'];
$birth_date = $_POST['birth_date'];
$address = $_POST['address'];
$relative_name = $_POST['relative_name'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirm_pass = $_POST['confirm_pass'];

// dd($_POST);

$errors = [];

  if (! Validator::email($email)) {
    $errors['email'] = "Please provide a valid email.";
  }

  if (! Validator::string($password, 7 , 255)) {
    $errors['password'] = "Please provide a password of atleast 7 characters.";
  }

  if (! Validator::string($confirm_pass, 7 , 255)) {
    $errors['password'] = "Please provide a password of atleast 7 characters.";
  }

  if (! empty($errors)) {
    return view('registration/create.view.php', [
      'heading' => 'Register',
      'errors' => $errors,
    ]);
  }

  $user = $db->query("SELECT * FROM users where email = :email", ['email' => $email])->find();


if ($user) {
  header('location: /');
  die();
  
} else {

  $db->query("INSERT INTO users(first_name, last_name, gender, middle, suffix, birth_date, address, relative_name, email, password) VALUES(:firstname, :lastname, :gender, :middle, :suffix, :birth_date, :address, :relative_name, :email, :password)", [
    'firstname'=> $first_name,
    'lastname'=> $last_name,
    'gender' => $gender,
    'middle' => $middle,
    'suffix' => $suffix,
    'birth_date' => $birth_date,
    'address' => $address,
    'relative_name' => $relative_name,
    'email'=> $email,
    'password' => password_hash($password, PASSWORD_BCRYPT),
  ]);

  Authenticator::login($user);

  header('location: /');
  die();
}

?>