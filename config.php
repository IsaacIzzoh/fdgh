<?php
session_start();


// Replace these placeholders with your actual database credentials
$databaseHost = "localhost";
$databaseUser = "root";
$databasePassword = "";
$databaseName = "devsytech_db";


// Establish a secure database connection
$con = mysqli_connect($databaseHost, $databaseUser, $databasePassword, $databaseName);

if (!$con) {
    // Log the detailed error for debugging purposes
    error_log("Database connection error: " . mysqli_connect_error());
    
    // Redirect the user to a friendly error page
    header('Location: error.php');
    exit; // Stop script execution after redirect
}


?>
