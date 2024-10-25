<?php
use Core\App;
use Core\Database;

$db = App::resolve('Core\Database');

$services = $db->query("SELECT * FROM services")->get();

$service = $db->query("SELECT * FROM services WHERE id = :id", ['id' => $_GET['id']])->findOrFail();

$replies = $db->query("SELECT * FROM replies")->get();

$service_images = $db->query("
    SELECT 
        i.image AS image_src, 
        i.name AS image_name
    FROM images i
    WHERE i.service_id = :id
", ['id' => $_GET['id']])->get();  // fetch all related images


view('service.view.php', [
  'heading' => $service['name'],
  'services' => $services,
  'service_id' => $service['id'],
  'service_name' => $service['name'],
  'service_description' => $service['description'],
  'service_images' => $service_images,
  'replies' => $replies
]);
