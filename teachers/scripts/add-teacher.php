<?php
// Database connection
include "../../connections/dbname.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullname_en = $_POST['addTeacherNameEN'];

    $tablename = $database . ".`teachers`";

    $sql = "INSERT INTO $tablename (`fullname_en`) 
            VALUES ( ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "s",
        $fullname_en
    );

    if ($stmt->execute()) {
        echo "success|$fullname_en";
    } else {
        echo "error|Execution failed: " . $stmt->error;
    }
}

// Close connection
mysqli_close($conn);
?>