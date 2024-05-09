<?php

// Database configuration
$host = 'localhost';
$port = 3306;
$dbName = 'demo_authorization_db';
$username = 'admin';
$password = 'admin';

// Connection string (DSN: Data Source Name)
$dsn = "mysql:host={$host};port={$port};dbname={$dbName};charset=utf8";

try {
  // Create a PDO instance
  $pdo = new PDO($dsn, $username, $password);

  // Set PDO to throw exceptions on error
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // You are now connected to the database, and $pdo contains the connection object

  // You can perform database operations here

} catch (PDOException $e) {
  // If there is an error with the connection, catch it here
  echo "Connection failed: " . $e->getMessage();
}
