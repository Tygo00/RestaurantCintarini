<?php
$servername = "db";
$username = "user";
$password = "password";
$dbname = "PizzariaDaCintarini";

try {
  $conn = new PDO("mysql:host=$servername;dbname=$dbname", $username, $password);

} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}