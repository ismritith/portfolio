<?php
// Database connection
$servername = "localhost";
$username = "root"; // Replace with your database username
$password = ""; // Replace with your database password
$dbname = "precious_db"; // Replace with your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Retrieve form data and sanitize it
    $name = htmlspecialchars($_POST['name']);
    $email = htmlspecialchars($_POST['email']);
    $subject = htmlspecialchars($_POST['subject']);
    $address = htmlspecialchars($_POST['address']);
    $date = date("Y-m-d H:i:s"); // Current date and time

    // Validate form inputs
    if (empty($name) || empty($email) || empty($subject) || empty($address)) {
        echo "<script>alert('All fields are required!'); window.history.back();</script>";
        exit;
    }

    // SQL query to insert data into the 'contact' table
    $sql = "INSERT INTO contact (name, email, subject, address, date) VALUES (?, ?, ?, ?, ?)";

    // Prepare statement to prevent SQL injection
    if ($stmt = $conn->prepare($sql)) {
        $stmt->bind_param("sssss", $name, $email, $subject, $address, $date);

        // Execute the query
        if ($stmt->execute()) {
            echo "<script>alert('Your message has been sent successfully!'); window.location.href='contact_form.html';</script>";
        } else {
            echo "<script>alert('Error saving your message. Please try again later.'); window.history.back();</script>";
        }

        $stmt->close();
    } else {
        echo "<script>alert('Database error. Please try again later.'); window.history.back();</script>";
    }

    // Close the database connection
    $conn->close();
}
?>
