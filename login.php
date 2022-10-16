<?php
//database credentials
require_once("config.php");

//start session 
session_start();

//get login details from form
//encrypt password using sha256
$username = $_REQUEST['email'];
$password =  hash('sha256', $_REQUEST['password']);
$pass =  $_REQUEST['password'];

//conect to database 
$connection = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE) or die("Error! Could not validate your credentials");

//issue query 
$loginQuery = "SELECT * FROM customers WHERE email = '$username' AND password = '$password'";
$result = mysqli_query($connection, $loginQuery) or die("Error! Could not validate your credentials");

$row = mysqli_fetch_array($result);

$loginQuery1 = "SELECT * FROM technician WHERE email = '$username' AND password = '$pass'";
$final = mysqli_query($connection, $loginQuery1) or die("Error! Could not validate your credentials");

$admin = mysqli_fetch_array($final);

//check if the user exists in the DB
if (mysqli_num_rows($final) == 1) {

    //set session variable to allow access to the webpage 
    $_SESSION['access'] = "yes";

    //set session variable to store the user's details
    $_SESSION['id']= $admin['technician_id'];
    $_SESSION['firstName'] = $admin['firstName'];
    $_SESSION['lastName'] = $admin['lastName'];
    $_SESSION['email'] = $admin['email'];
    $_SESSION['admin'] = $admin['admin'];
    //$_SESSION['cell'] = $row['cell'];

    //redirect to the profile page
   header("Location:Profile.php");

} else if(mysqli_num_rows($result) == 1) {

    //set session variable to allow access to the webpage 
    $_SESSION['access'] = "yes";

    //set session variable to store the user's details
    $_SESSION['id'] = $row['customer_id'];
    $_SESSION['firstName'] = $row['firstName'];
    $_SESSION['lastName'] = $row['lastName'];
    $_SESSION['email'] = $row['email'];
    $_SESSION['cell'] = $row['cell'];

    //redirect to the profile page
    header("Location:Profile.php");
    
 
}
else {
    //if the user does not enter the right credentials
    header("Location:login.html");
}
//close the DB connection '
mysqli_close($connection);