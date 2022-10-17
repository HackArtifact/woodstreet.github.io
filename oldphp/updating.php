<?php
//call on database login credentials
require_once("config.php");

//getting data from Profile page
$custID = $_REQUEST['studNum'];
$firstName = $_REQUEST['first-name'];
$lastName = $_REQUEST['last-name'];
$mail = $_REQUEST['mail'];
$phone = $_REQUEST['phone'];


//connect to database
$connection = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE) or die("<p style=\"color:red\">Error! Could not connect to database.</p>");

//issue istruction to update data in database
$updateQuery = "UPDATE customers SET firstName = '$firstName', lastName = '$lastName', email = '$mail', cell = '$phone' WHERE customer_id = '$custID'";


$results = mysqli_query($connection, $updateQuery) or die("<p style=\"color:red\">Error! Could not update customer details.</p>");



mysqli_close($connection);

//reconnect and fetch the new data from the database
$connect = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE) or die("<p style=\"color:red\">Error! Could not connect to database.</p>");

//issue query to fetch the new data
$fetchQuery = "SELECT * FROM customers WHERE customer_id = '$custID'";
$result = mysqli_query($connect, $fetchQuery) or die("<p style=\"color:red\">Error! Could not fetch customer details.</p>");

$row = mysqli_fetch_array($result);
//set session variable to store the user's details
$_SESSION['id'] = $row['customer_id'];
$_SESSION['lastName'] = $row['lastName'];
$_SESSION['email'] = $row['email'];
$_SESSION['cell'] = $row['cell'];



//redirect
header("Location: profile.php");