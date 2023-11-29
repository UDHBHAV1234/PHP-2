<?php
include 'config.php';

$sql = "SELECT * FROM records";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while ($row = $result->fetch_assoc()) {
        echo "Username: " . $row["username"] . "<br>";
        echo "Content: " . $row["content"] . "<br>";
        echo "<img src='uploads/" . $row["image"] . "'><br><br>";
    }
} else {
    echo "No records found.";
}

$conn->close();
?>
