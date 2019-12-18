<?php
// Start the Session to save the user information 
session_start();
include("config.php"); // include config file

// Check the form is posted 
if($_POST)
{

$email = $_POST['email']; // Get the name value from the Form 
$password = $_POST['password']; // Get the password value from the Form 
$password = md5($password ); // Encrypt the Password for more security

// SQL Query to retrieve data from the user table

$sql = "SELECT * FROM users where email='$email' and password='$password'";
//Execute the SQL Query
$result = $con->query($sql);
//Fetch the Rows from $result
$row = $result->fetch_assoc();

if($row)
{
// store name into the session
$_SESSION['name'] = $row['name']; // Since we are fetching one row from the table
header("Location: welcome.php");  // Redirect to welcome page
}
else
{
header("Location: index.php");  // Redirect to index page if there is any error
}
//To fetch a mulitple row from table 
/*
while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["name"]. " " . $row["email"]. "<br>";
    }
*/
$con->close();
}
?>
