<?php
// Database connection details
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "adfo_database";

// Create a connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Separate the form data
$personalInfo = array(
    'name' => $_POST['name'],
    'email' => $_POST['email'],
    'event' => $_POST['event']
);


// Insert into personal_info table
$sql_personal = "INSERT INTO test (Name, E_mail, Event)
        VALUES ('" . $personalInfo['name'] . "', '" . $personalInfo['email'] . "', '" . $personalInfo['event'] . "')";

if ($conn->query($sql_personal) === TRUE) {
    echo "Personal information stored successfully<br>";
} else {
    echo "Error: " . $sql_personal . "<br>" . $conn->error;
}

$conn->close();
?>