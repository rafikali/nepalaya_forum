

<?php
// Server-side validation

// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Retrieve form data
    $name = $_POST["name"];
    $email = $_POST["email"];

    // Initialize an array to store errors
    $errors = [];

    // Validate name
    if (empty($name)) {
        $errors["name"] = "Name qis required";
    }

    // Validate email
    if (empty($email)) {
        $errors["email"] = "Email is required";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors["email"] = "Invalid email format";
    }

    // If there are no errors, process the form data
    if (empty($errors)) {
        // Perform further processing, such as saving to a database
        echo "Form submitted successfully!";
    } else {
        // Display errors
        echo "Form submission failed. Please fix the following errors:<br>";
        foreach ($errors as $error) {
            echo $error . "<br>";
        }
    }
}
?>