<?php
// Function to display validation errors
function display_validation_errors($errors) {
    echo '<div class="register-box">';
    echo '<p class="error">';
    foreach ($errors as $msg) {
        echo " - " . htmlspecialchars($msg) . "<br>\n"; // Escaping for security
    }
    echo '<br></div>';
}

// Initialize errors array and form values
$errors = [];
$n = $e = $p = '';

// Check if the form was submitted
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Validate input fields
    $fn = !empty($_POST['name']) ? trim($_POST['name']) : $errors[] = 'Please enter your first name.';
    $e = !empty($_POST['email']) ? trim($_POST['email']) : $errors[] = 'Please enter your email.';

    if (!empty($_POST['psword1'])) {
        if ($_POST['psword1'] !== $_POST['psword2']) {
            $errors[] = 'Your passwords do not match.';
        } else {
            $p = trim($_POST['psword1']);
        }
    } else {
        $errors[] = 'Please enter your password.';
    }

    // Check if the email already exists in the database
    if (empty($errors)) {
        require('mysqli_connect.php'); // Connect to the database

        $db = new Database();
        $connection = $db->getConnection();

        // Check for duplicate email
        $q = "SELECT email FROM users WHERE email = '$e'";
        $result = $db->query($q);

        if (mysqli_num_rows($result) > 0) {
            // Email already exists, add error
            $errors[] = 'This email address is already registered.';
        } else {
            // Hash the password
            $hashedPassword = password_hash($p, PASSWORD_DEFAULT);

            // Prepare and execute the query to insert the user data
            $q = "INSERT INTO users (fname, lname, email, password) 
                  VALUES ('$fn', '$ln', '$e', '$hashedPassword')";

            $result =  $db->query($q);
            if ($result) {
                header('Location: register-success.php');
                exit();
            } else {
                echo '<h2>System Error</h2>
                      <p class="error">Your registration could not be completed due to a system error. Please try again later.</p>';
                echo '<p>' . mysqli_error($connection) . '</p>'; // Debugging message
            }
        }
    }
}
?>