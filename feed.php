<?php
$servername = "localhost"; 
$username = "root";       
$password = "root";           
$dbname = "feedback_db";   

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Prepare the SQL statement
$sql = "INSERT INTO feedback (name,feedback,rating,preference,suggestion) VALUES (?,?,?,?,?)";
$stmt = $conn->prepare($sql);

if ($stmt === false) {
    die("Prepare failed: " . $conn->error);
}

// Bind parameters
$stmt->bind_param("ssiss", $name,$feedback,$rating,$preference,$suggestion);

// Check if POST data is set and sanitize inputs

if (isset($_POST['name']) && isset($_POST['feedback'])&& isset($_POST['rating'])&& isset($_POST['preference'])&& isset($_POST['suggestion'])) {
    $name = $_POST['name'];
    $suggestion = $_POST['suggestion'];
    $preference = $_POST['preference'];
    $rating = $_POST['rating'];
    $feedback = $_POST['feedback'];

    // Execute the prepared statement
    if ($stmt->execute()) {
        echo "Feedback submitted successfully!";
    } else {
        echo "Execute failed: " . $stmt->error;
    }
} else {
    echo "error";
}

// Close the statement and connection
$stmt->close();
$conn->close();
?>

