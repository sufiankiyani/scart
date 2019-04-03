<?php
/* Database credentials. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
define('host', 'localhost');
define('username', 'root');
define('password', '');
define('db', 'project3');
 
/* Attempt to connect to MySQL database */
$link = mysqli_connect(host, username, password, db);
 
// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>