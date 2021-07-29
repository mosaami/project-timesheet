<?php
// $con = mysqli_connect('localhost', 'database_user', 'database_password','database');
$con = mysqli_connect('localhost', 'root','','db_connect');

if(!$con)
{
    die("Connection failed: " . mysqli_connect_error());
}

?>