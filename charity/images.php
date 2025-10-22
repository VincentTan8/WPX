<?php
// Get the id and img parameters from the URL
$id = $_GET['id'] ?? '';
$img = $_GET['img'] ?? '';

// Validate the id and img parameters (e.g., check database or file system for validity)

// Assuming the images are stored in a directory named "images"
$imagePath = "../charity/img/$img";

// Check if the image file exists
if (file_exists($imagePath)) {
    // Set the appropriate Content-Type header
    header('Content-Type: image/png');

    // Output the image file
    readfile($imagePath);
    exit;
} else {
    // Image not found, you can handle this case accordingly
    header('HTTP/1.0 404 Not Found');
    echo 'Image not found.';
    exit;
}
