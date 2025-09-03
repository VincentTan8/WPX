<?php
// Database connection
include "../../connections/dbname.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];

    $teachertable = $database . ".`teachers`";

    $sql = "DELETE FROM $teachertable WHERE `id` = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("i", $id);

    if ($stmt->execute()) {
        echo "success|$id";
    } else {
        echo "error|Execution failed: " . $stmt->error;
    }
}

// Close connection
mysqli_close($conn);
?>