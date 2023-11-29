<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["username"])) {
    $content = $_POST["content"];
    $image = $_FILES["image"]["name"];
    $target = "uploads/" . basename($image);

    move_uploaded_file($_FILES["image"]["tmp_name"], $target);

    $username = $_SESSION["username"];
    
    $sql = "INSERT INTO records (username, content, image) VALUES ('$username', '$content', '$image')";

    if ($conn->query($sql) === TRUE) {
        echo "Record created successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
