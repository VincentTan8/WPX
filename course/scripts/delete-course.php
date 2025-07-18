<?php
// Database connection
include "../../connections/dbname.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ref_num = $_POST['ref_num'];

    $coursestable = $database . ".`wt_courses`";

    $sql = "DELETE FROM $coursestable WHERE `ref_num` = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("s", $ref_num);

    if ($stmt->execute()) {
        echo "success|$ref_num";
    } else {
        echo "error|Execution failed: " . $stmt->error;
    }
}

// Close connection
mysqli_close($conn);
?>