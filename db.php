
<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USERNAME', 'your_username');
define('DB_PASSWORD', 'your_password');
define('DB_NAME', 'login_system');

// Create database connection
$connect = new mysqli(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);

// Check connection
if ($connect->connect_error) {
  die("Connection failed: " . $connect->connect_error);
}
?>