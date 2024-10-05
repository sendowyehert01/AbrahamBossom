<?php 

namespace Core\Middleware;

class Admin
{
  public function handle() 
  {
    if (! $_SESSION['user'] ?? false) 
    {
      header('location: /');
      die();
    }

    $positions = ['superadmin' , 'admin', 'secretary'];

    if (! in_array($_SESSION['user']['position'], $positions))
    {
      header('location: /');
      die();
    }
  }
}

?>  