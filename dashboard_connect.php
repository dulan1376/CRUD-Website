<!--
  used to connect to dbdashboard.
  connected to academic sholar.php
  alumni.php
  clerical_assistant.php
  febres.php
  maintenance_assistant.php
-->
<?php 
$servername = "localhost";
$database = "dbdashboard";
$username = "root";
$password = "";

$mysqli = new mysqli($servername, $username, $password, $database); 
$conn = mysqli_connect($servername, $username, $password);
if ($conn->connect_error) {

  die("Connection failed: " . $conn->connect_error);
}