<?php
# get the data from the form on the bookings.php page
$customer_id = $_REQUEST['studNum'];
$firstName = $_REQUEST['first-name'];
$lastName = $_REQUEST['last-name'];
$email = $_REQUEST['mail'];
$brand = $_REQUEST['dev-brand'];
$model = $_REQUEST['model'];
require_once("config.php");
# connect to the database
$connection = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE) or die("Error! Could not connect to database");

# insert the data into the database
$customerQuery = "INSERT INTO customers (customer_id, firstName, lastName, email, brand, model) 
VALUES ('$customer_id', '$firstName', '$lastName', '$email', '$brand', '$model')";

mysqli_close($connection);

header("Location: Bookings.php");
