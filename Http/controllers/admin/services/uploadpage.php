<?php 

use Core\App;
use Core\Database;
use Core\Response;

$db = App::resolve('Core\Database');

$service = $db->query("SELECT * FROM services WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

view('admin/services/upload.view.php', [
  'heading' => 'Upload',
  'service' => $service
]);