<?php 

use Core\App;
use Core\Database;
use Core\Validator;
use Core\Authenticator;

$db = App::resolve('Core\Database');

// Check if email and password are set in the POST request
if (!isset($_POST['email']) || empty($_POST['email'])) {
    $errors['email'] = 'Email is required.';
}
if (!isset($_POST['password']) || empty($_POST['password'])) {
    $errors['password'] = 'Password is required.';
}
if (!isset($_POST['confirm_pass']) || empty($_POST['confirm_pass'])) {
    $errors['confirm_pass'] = 'Confirm Password is required.';
}

// If there are any validation errors, return to the form
if (!empty($errors)) {
    return view('forgot/multiform.view.php', [
        'heading' => 'Reset Password',
        'errors' => $errors,
    ]);
}

$email = $_POST['email'];
$password = $_POST['password'];
$confirm_pass = $_POST['confirm_pass'];

// Validate passwords match
if ($password !== $confirm_pass) {
    $errors['password'] = "Passwords do not match!";
    return view('forgot/multiform.view.php', [
        'heading' => 'Reset Password',
        'errors' => $errors,
    ]);
}

// Fetch the user by email
$user = $db->query("SELECT id, first_name, last_name, middle, gender, suffix, birth_date, address, relative_name, position  FROM users WHERE email = :email", ['email' => $email])->findOrFail();

$id = $user['id'];
$first_name = $user['first_name'];
$last_name = $user['last_name'];
$middle = $user['middle'];
$gender = $user['gender'];
$suffix = $user['suffix'];
$birth_date = $user['birth_date'];
$address = $user['address'];
$relative_name = $user['relative_name'];
$position = $user['position'];

// Hash the password before updating
$hashed_password = password_hash($password, PASSWORD_BCRYPT);

// Update the user's information, including the hashed password
$db->query('UPDATE users SET 
    first_name = :first_name, 
    last_name = :last_name, 
    birth_date = :birth_date,
    middle = :middle,
    gender = :gender,
    address = :address,
    relative_name  = :relative_name,
    email = :email,
    suffix = :suffix,
    position = :position,
    password = :password
    WHERE id = :id', 
    [
      'id' => $user['id'],
      'first_name' => $first_name,
      'last_name' => $last_name,
      'middle' => $middle,
      'suffix' => $suffix,
      'relative_name' => $relative_name,
      'birth_date' => $birth_date,
      'gender' => $gender,
      'email' => $email,
      'password' => $hashed_password,  // Save the hashed password
      'address' => $address,
      'position' => $position,
    ]);

// Log the user in after updating the password
$user = $db->query("SELECT * FROM users WHERE email = :email", ['email' => $email])->findOrFail();

Authenticator::login($user);

header('location: /');
die();

?>
