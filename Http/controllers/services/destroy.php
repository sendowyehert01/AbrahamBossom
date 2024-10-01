<?php 

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

// $currentUser = 2;

$service = $db->query("SELECT * FROM services WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

// authorize($note['user_id'] === $currentUser);

$db->query("DELETE from services where id = :id", [ 'id' =>  $_GET['id'] ]);

header('location: /services-offer');
exit();
