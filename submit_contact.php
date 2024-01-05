<?php
include "config.php";

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Validate and sanitize user inputs
    $name = filter_input(INPUT_POST, "name", FILTER_SANITIZE_STRING);
    $email = filter_input(INPUT_POST, "email", FILTER_SANITIZE_EMAIL);
    $phone_number = filter_input(INPUT_POST, "phone_number", FILTER_SANITIZE_NUMBER_INT);
    $requirement = filter_input(INPUT_POST, "requirement", FILTER_SANITIZE_STRING);
    $message = filter_input(INPUT_POST, "message", FILTER_SANITIZE_STRING);

    // Check if required fields are not empty
    if (empty($name) || empty($email) || empty($message)) {
        echo '<div class="alert alert-danger alert-dismissible" role="alert">
            <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
            <strong>Error!</strong> Please fill in all required fields.
        </div>';
    } else {
        // Insert data into the database
        $query = "INSERT INTO contacts (name, email, requirement, phone_number, message) VALUES (?, ?, ?, ?, ?)";
        $stmt = mysqli_prepare($con, $query);

        // Check if the prepare statement is successful
        if ($stmt) {
            mysqli_stmt_bind_param($stmt, "sssss", $name, $email, $requirement, $phone_number, $message);

            if (mysqli_stmt_execute($stmt)) { 
                echo '<div class="alert alert-success alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Success!</strong> Thank you for contacting us! We will reach out to you shortly.
                </div>';
            } else {
                echo '<div class="alert alert-danger alert-dismissible" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <strong>Error!</strong> Error submitting the form. Please try again or contact support.
                </div>';
            }

            // Close the statement
            mysqli_stmt_close($stmt);
        } else {
            // Handle the case where prepare statement fails
            echo '<div class="alert alert-danger alert-dismissible" role="alert">
                <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <strong>Error!</strong> Unable to prepare the statement. Please try again or contact support.
            </div>';
        }

        // Close the database connection
        mysqli_close($con);
    }
} else {
    echo '<div class="alert alert-danger alert-dismissible" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
        <strong>Error!</strong> Invalid request method. Please try again or contact support.
    </div>';
}
?>
