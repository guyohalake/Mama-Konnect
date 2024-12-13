<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

// Database connection
$servername = "localhost";
$username = "root"; // Default XAMPP username
$password = ""; // Default XAMPP password
$dbname = "mama-konnect"; // Your database name

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Collecting form data
$user_type = $_POST['userType'];
$full_name = $_POST['fullName'] ?? null;
$national_id = $_POST['nationalId'] ?? null;
$gender = $_POST['gender'] ?? null;
$safaricom_number = $_POST['safaricomNumber'] ?? null;
$date_of_birth = $_POST['dob'] ?? null;
$email = $_POST['email'];
$password = password_hash($_POST['password'], PASSWORD_DEFAULT); // Hashing the password
$upload_id_front = $_FILES['uploadIdFront']['name'] ?? null;
$upload_id_back = $_FILES['uploadIdBack']['name'] ?? null;
$background_check = $_POST['backgroundCheck'] ?? null;
$trusted_key_holder = $_POST['trustedKeyHolder'] ?? null;

// File upload handling (make sure to create an 'uploads' directory)
if (isset($_FILES['uploadIdFront']) && $_FILES['uploadIdFront']['error'] == 0) {
    move_uploaded_file($_FILES['uploadIdFront']['tmp_name'], 'uploads/' . $_FILES['uploadIdFront']['name']);
}

if (isset($_FILES['uploadIdBack']) && $_FILES['uploadIdBack']['error'] == 0) {
    move_uploaded_file($_FILES['uploadIdBack']['tmp_name'], 'uploads/' . $_FILES['uploadIdBack']['name']);
}

// Insert data into the database
$sql = "INSERT INTO users (user_type, full_name, national_id, gender, safaricom_number, date_of_birth, email, password, upload_id_front, upload_id_back, background_check, trusted_key_holder)
VALUES ('$user_type', '$full_name', '$national_id', '$gender', '$safaricom_number', '$date_of_birth', '$email', '$password', '$upload_id_front', '$upload_id_back', '$background_check', '$trusted_key_holder')";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
