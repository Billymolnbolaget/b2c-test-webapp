<?php
// Check if the form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve the submitted username and password
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Perform your authentication logic here (e.g., querying a database)
    // You should check if the provided credentials are valid and grant access accordingly

    // For the sake of this example, let's assume the username is "admin" and the password is "password"
    if ($username === "admin" && $password === "password") {
        // Redirect the user to a success page or perform any other actions you need
        header("Location: success.html");
        exit();
    } else {
        // Redirect the user back to the login page with an error message
        header("Location: login.html?error=1");
        exit();
    }
}
?>
