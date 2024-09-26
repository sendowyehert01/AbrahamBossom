<?php

require 'vendor/autoload.php';

use Dotenv\Dotenv;

// Load .env file
$dotenv = Dotenv::createImmutable(__DIR__);
$dotenv->load();

// Access the variables
$dbHost = $_ENV['DB_HOST'];
$dbUser = $_ENV['DB_USER'];
$dbPass = $_ENV['DB_PASS'];
$dbName = $_ENV['DB_NAME'];
$dbCharset = $_ENV['DB_CHARSET'];


    return [
      'database' => [
        'host' => $dbHost,
        'port' => 3306,
        'dbname' => $dbName,
        'charset' => $dbCharset
      ],
      'account' => [
        'username' => $dbUser,
        'password' => $dbPass
      ]
    ];

?>