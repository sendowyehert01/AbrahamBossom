<?php

use Core\Database;

$config = require(base_path("config.php"));
$db = new Database($config['database'], $config['account']['username'], $config['account']['password']);

$services = $db->query('SELECT * FROM services')->get();

$target_dir = "uploads/";
$uploadOk = 1;

$service_id = $_POST['id'];

$errors = [];

function getMultiple_FILES() {
  $_FILE = array();
  foreach($_FILES as $name => $file) {
      foreach($file as $property => $keys) {
          foreach($keys as $key => $value) {
              $_FILE[$name][$key][$property] = $value;
          }
      }
  }
  return $_FILE;
}

foreach (getMultiple_FILES()['images'] as $image)
{

$target_file = $target_dir . basename($image["name"]);
$imageFileType = strtolower(pathinfo($target_file,PATHINFO_EXTENSION));

// Check if image file is a actual image or fake image
if(isset($_POST["submit"])) {
  $check = getimagesize($image["tmp_name"]);
  if($check !== false) {
    $uploadOk = 1;
  } else {
    $errors['images'] = "File is not an image.";
    $uploadOk = 0;
  }
}

// Check if file already exists
if (file_exists($target_file)) {
  $errors['images'] = "Sorry, file already exists.";
  $uploadOk = 0;
}

// Check file size
if ($image["size"] > 500000) {
  $errors['images'] = "Sorry, your file is too large.";
  $uploadOk = 0;
}

// Allow certain file formats
if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg"
&& $imageFileType != "gif" ) {
  $errors['images'] = "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
  $uploadOk = 0;
}

// Check if $uploadOk is set to 0 by an error
if ($uploadOk == 0 || count($errors) > 0) {

  if (! empty($errors)) {
    return view('admin/services/upload.view.php', [
      'errors' => $errors,
      'services' => $services,
    ]);
  }

// if everything is ok, try to upload file
} 
else 
{
  if (move_uploaded_file($image["tmp_name"], $target_file))
  {
    $db->query("INSERT INTO images (service_id, name, image, type, size) 
                VALUES(:service_id, :name, :image, :type, :size)", 
                [
                  'service_id' => $service_id,
                  'name' => $image['name'], 
                  'image'=> $image['name'],
                  'type'=> $image['type'],
                  'size'=> $image['size'],
                ]);
  } 
  else
  {
    $errors['images'] = "Sorry, there was an error uploading your file.";

    if (! empty($errors)) {
      return view('admin/services/upload.view.php', [
        'errors' => $errors,
        'services' => $services,
      ]);
    }
  }
}
};

header('location: /admin/services');
die();

?>