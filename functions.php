<?php
// Include this file in your other PHP files

// Function to sanitize input
function sanitizeInput($input) {
    return htmlspecialchars(strip_tags(trim($input)));
}

// Function to upload image
function uploadImage($file) {
    // Implement image upload logic here
    // Return the path or URL of the uploaded image
}

// Add more functions as needed
?>
