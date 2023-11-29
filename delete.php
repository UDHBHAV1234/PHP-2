<?php
session_start();
include 'config.php';

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_SESSION["username"])) {
    $id = $_POST["id"];

    $sql = "DELETE FROM records WHERE id=$id";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully!";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
