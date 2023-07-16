<?php
// Database connection
$host = 'localhost';
$username = 'your_username';
$password = 'your_password';
$database = 'your_database';

$conn = mysqli_connect('localhost', 'root', '', 'outsidelime');
if (!$conn) {
    die('Database connection error');
}

// Process form submission
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $parent = $_POST['parent'];

    $sql = "INSERT INTO category (name, parent_id) VALUES ('$name', '$parent')";
    $result = mysqli_query($conn, $sql);

    if ($result) {
        header('Location: test.php');
        exit();
    } else {
        echo "Error: " . mysqli_error($conn);
    }
}

mysqli_close($conn);
?>