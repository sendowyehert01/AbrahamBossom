<?php 

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

// $currentUser = 2;

$inquiry = $db->query("SELECT * FROM inquiries WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

// authorize($note['user_id'] === $currentUser);

$db->query("DELETE from inquiries where id = :id", [ 'id' =>  $_GET['id'] ]);

header('location: /admin/inquiries');
exit();
