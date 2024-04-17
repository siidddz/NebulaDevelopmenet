<?php
// Database connection parameters
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "reg";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize and validate form data (example)
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    // Add more fields here...

    // Construct SQL query
    $sql = "INSERT INTO your_table_name (email, name) VALUES ('$email', '$name')";
    
    // Execute query
    if ($conn->query($sql) === TRUE) {
        echo "Form data saved successfully.";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

// Close connection
$conn->close();
?>
