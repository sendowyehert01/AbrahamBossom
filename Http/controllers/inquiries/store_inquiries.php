<?php
use Core\Database;

require base_path('Core/Validator.php');

$config = require base_path("config.php");

// Correctly extract username and password from the config array
$username = $config['account']['username'];
$password = $config['account']['password'];

$db = new Core\Database($config['database'], $username, $password);

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $full_name = filter_var(trim($_POST['fullName']), FILTER_SANITIZE_STRING);
    $email = filter_var(trim($_POST['email']), FILTER_SANITIZE_EMAIL);
    $contact_no = filter_var(trim($_POST['contact']), FILTER_SANITIZE_STRING);
    $product_services = filter_var(trim($_POST['service']), FILTER_SANITIZE_STRING);
    $notes = filter_var(trim($_POST['note']), FILTER_SANITIZE_STRING);
    $is_agree = isset($_POST['agreement']) ? 1 : 0;

    $errors = [];
    if (empty($full_name)) $errors[] = "Full Name is required.";
    if (empty($email) || !filter_var($email, FILTER_VALIDATE_EMAIL)) $errors[] = "Valid Email is required.";
    if (empty($contact_no)) $errors[] = "Contact Number is required.";
    if (empty($product_services)) $errors[] = "Product/Service is required.";

    if (empty($errors)) {
        $sql = "INSERT INTO inquiries (full_name, email, contact_no, product_services, notes, is_agree)
                VALUES (?, ?, ?, ?, ?, ?)";

        $stmt = $db->query($sql, [$full_name, $email, $contact_no, $product_services, $notes, $is_agree]);

        if ($stmt) {
            header('Location: /');
            exit();
        } else {
            echo "<div class='alert alert-danger'>Error: Unable to save your inquiry. Please try again later.</div>";
        }
    } else {
        foreach ($errors as $error) {
            echo "<div class='alert alert-danger'>$error</div>";
        }
    }
}
?>
