<?php

// Start the Session to save the user information 
session_start();
unset($_SESSION['error']);

include("config.php"); //include config file

// Check the form is posted 
if($_POST)
{


$name = $_POST['name']; // Get the name value from the Form 
$email = $_POST['email']; // Get the email value from the Form 
$password = $_POST['password']; // Get the password value from the Form 
$password = md5($password ); // Encrypt the Password for more security
//Connect to the Database

// SQL Query to insert data into the user table
$sql = "INSERT INTO users (name,email,password) VALUES ('$name','$email','$password')"; 

//Execute the SQL Query
$result = $con->query($sql);
// Check the Query is Successfully executed or not 
if($result)
{
$_SESSION['name'] = $name; // save a name into the session
header("Location: welcome.php"); // Redirect to welcome page
}
else
{
$_SESSION['error'] = "Invalid data has been submitted !";
header("Location: register.php");

}
$con->close();
}
?>
