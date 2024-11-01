<?php 

namespace Core\Middleware;
use Core\Middleware\Guest;
use Core\Middleware\Auth;
use Core\Middleware\Otp;
use Core\Middleware\Admin;

class Middleware
{
  public const MAP = [
    'guest' => Guest::class,
    'auth' => Auth::class,
    'otp' => Otp::class,
    'admin' => Admin::class,
  ];

  public static function resolve($key) {
    if (! $key) {
      return;
    }
    $middleware = static::MAP[$key] ?? false;

    if (! $middleware) {
      throw new \Exception("No matching middleware found for key '{$key}'.");
    }
    (new $middleware)->handle();
  }
}

?>