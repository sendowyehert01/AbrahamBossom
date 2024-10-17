<?php 

use Core\App;
use Core\Database;
use Core\Validator;

$db = App::resolve('Core\Database');

// Retrieve the inquiry using the provided ID
$inquiry = $db->query("SELECT * FROM inquiries WHERE id = :id", ['id' => $_POST['id']])->findOrFail();

$errors = [];

// Validate incoming request data
if (!Validator::string($_POST['full_name'], 1, 100)) {
    $errors['full_name'] = "A full name of no more than 100 characters is required.";
}

if (!Validator::email($_POST['email'])) {
    $errors['email'] = "A valid email address is required.";
}

if (!Validator::string($_POST['contact_no'], 1, 15)) {
    $errors['contact_no'] = "A contact number of no more than 15 characters is required.";
}

if (!Validator::string($_POST['product_services'], 1, 100)) {
    $errors['product_services'] = "Product/Services description is required.";
}

if (!Validator::string($_POST['notes'], 1, 500)) {
    $errors['notes'] = "Notes should be at least 1 character and no more than 500 characters.";
}

// Optionally validate agreement
if (!isset($_POST['is_agree']) || $_POST['is_agree'] != '1') {
    $errors['is_agree'] = "You must agree to proceed.";
}

// If there are errors, return to the form with errors
if (!empty($errors)) {
    return view('admin/inquiries/create.view.php', [
        'heading' => 'Create Inquiry',
        'errors' => $errors,
        'inquiry' => $_POST // Preserve the input data
    ]);
}

// Update the inquiry
$db->query('UPDATE inquiries SET 
    full_name = :full_name, 
    email = :email, 
    contact_no = :contact_no, 
    product_services = :product_services, 
    notes = :notes, 
    is_agree = :is_agree
WHERE id = :id', 
[
    'id' => $_POST['id'],
    'full_name' => $_POST['full_name'],
    'email' => $_POST['email'],
    'contact_no' => $_POST['contact_no'],
    'product_services' => $_POST['product_services'],
    'notes' => $_POST['notes'],
    'is_agree' => $_POST['is_agree'],
]);

// Redirect to the inquiries list page
header('location: /admin/inquiries');
die();
