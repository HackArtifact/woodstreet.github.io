<?php

//call on database login credentials
require_once("config.php");

//defining unique identifier from previous page
$hardware_ID = $_REQUEST['id'];

//connect to database
$connection = mysqli_connect(SERVER, USERNAME, PASSWORD, DATABASE) or die("Error! Could not connect to database.");

//issue instruction to retrieve data from database
$deleteQuery = "DELETE FROM hardware WHERE hardware.serial_number = $hardware_ID";

$delete = mysqli_query($connection, $deleteQuery) or die("Error! Could not delete hardware part.");

//close database
mysqli_close($connection);

//redirect back to page
header("Location:Report.php");