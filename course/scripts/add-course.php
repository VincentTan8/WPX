<?php
// Database connection
include "../../connections/dbname.php";
include 'generateRefNum.php';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $course_title_en = $_POST['addCourseTitleEN'];

    $tablename = $database . ".`wt_courses`";

    //WeTalk Courses reference num generate
    $ref_num_prefix = 'WTC-';
    $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

    $sql = "INSERT INTO $tablename (`ref_num`, `course_title_en`) 
            VALUES (?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ss",
        $new_ref_num,
        $course_title_en
    );

    if ($stmt->execute()) {
        echo "success|$new_ref_num";
    } else {
        echo "error|Execution failed: " . $stmt->error;
    }
}

// Close connection
mysqli_close($conn);
?>