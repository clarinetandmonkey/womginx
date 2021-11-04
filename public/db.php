<?php
// Enter your Host, username, password, database below.
// I left password empty because i do not set password on localhost.
$con = mysqli_connect("localhost","id17234362_russian2","g?utiEq-[y4/D}M}","id17234362_russian");
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
?>

	define('DB_HOST', 'localhost');
	define('DB_NAME', 'id17234362_russian');
	define('DB_USERNAME', 'id17234362_russian2');
	define('DB_PASSWORD','g?utiEq-[y4/D}M}');
