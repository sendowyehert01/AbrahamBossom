<?php 

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

// $currentUser = 2;

$customer = $db->query("SELECT * FROM users WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

// authorize($note['user_id'] === $currentUser);

$db->query("DELETE from users where id = :id", [ 'id' =>  $_GET['id'] ]);

header('location: /admin/customers');
exit();