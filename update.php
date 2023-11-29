<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["username"])) {
    $content = $_POST["content"];
    $id = $_POST["id"];

    $sql = "UPDATE records SET content='$content' WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
