<?php

//require_once("secure.php");

//database credentials
require_once("config.php");

//retrieve new customer information
$customer_id = $_REQUEST['stNum'];
$firstName = $_REQUEST['firstName'];
$lastName = $_REQUEST['lastName'];
$email = $_REQUEST['email'];
$cell = $_REQUEST['phone'];
$password =  hash('sha256', $_REQUEST['password']);

//connect
$connection = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE) or die("Error! Could not connect to database");

//insert customer details into table 
$customerQuery = "INSERT INTO customers (customer_id, firstName, lastName, email, cell,  password) 
VALUES ('$customer_id', '$firstName', '$lastName', '$email', '$cell', '$password' )";


$result = mysqli_query($connection, $customerQuery) or die("Error! Could not execute query.");


//disconnect
mysqli_close($connection);

//output
echo "<p style=\"color:blue\">The new customer was added!</p>";

//revert to login page
header("Location:login.html");