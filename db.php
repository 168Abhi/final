<?php
$mysqli = new mysqli("localhost", "root", "", "contact");

// Check connection
if ($mysqli->connect_errno) {
  echo "Failed to connect to MySQL: " . $mysqli->connect_error;
} else {
  // echo "connected Sucsessfully";
}