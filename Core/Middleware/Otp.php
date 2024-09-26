<?php 

namespace Core\Middleware;

class Otp 
{
  public function handle() 
  {
    if (! $_SESSION['pin'] ?? false) 
    {
      header('location: /');
      die();
    }
  }
}

?>