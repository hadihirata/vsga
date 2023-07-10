<?php
//specify the server name and here it is localhost
$server_name = "localhost";

//specify the username - here it is root
$username = "root";

//specify the password - it is empty
$password = "";

$db = "db_pelajaran";

// Creating the connection by specifying the connection details
$connection = mysqli_connect($server_name, $username, $password, $db);

// Checking the  connection
if (!$connection) {
    die("Failed " . mysqli_connect_error());
}
echo "Connection established successfully";
