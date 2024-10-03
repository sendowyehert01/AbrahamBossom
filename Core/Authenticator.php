<?php 

namespace Core;
use Core\Session;

class Authenticator 
{
  public function attemp($email, $password)
  {
    $users = (App::resolve(Database::class))->query("SELECT * FROM users WHERE email = :email", [
      'email' => $email
    ])->find();

      if ($users) {
          if (password_verify($password, $users['password'])) {
            $this->login([
              'id' => $users['id'],
              'email' => $email,
            ]);

            return true;
        }
      }

    return false;
  }

  public static function login($user) {
    $_SESSION['user'] = [
      'id' => $user['id'],
      'email' => $user['email'],
    ];
  
    session_regenerate_id();
  }
  
  public function logout() {
    Session::destroy();
  }
}

?>
