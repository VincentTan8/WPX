<?php
// Database connection
include "../../connections/dbname.php";
include 'generateRefNum.php';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$errors = [];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $courses_ref_num = $_POST['courses_ref_num']; //not an array

    $ref_num_array = $_POST['ref_num'];  //an array of ref nums 
    $activity_en_array = $_POST['editActivityEN']; //all of these post values are arrays
    $activity_cn_array = $_POST['editActivityCN'];

    $tablename = $database . ".`wt_course_activities`";

    $entryCount = count($ref_num_array); // assuming all arrays are same length

    for ($i = 0; $i < $entryCount; $i++) {
        if ($ref_num_array[$i] !== '') {
            $sql = "UPDATE $tablename SET 
                    `activity_en` = ?,
                    `activity_cn` = ?
                WHERE `ref_num` = ?";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param(
                "sss",
                $activity_en_array[$i],
                $activity_cn_array[$i],
                $ref_num_array[$i]
            );

            if (!$stmt->execute()) {
                $errors[`$ref_num_array[$i]`] = $stmt->error;
            }
        } else {
            //If activity does not exist yet
            //WeTalk Course Activities reference num generate
            $ref_num_prefix = 'CA-';
            $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

            $sql = "INSERT INTO $tablename 
                (`ref_num`, `courses_ref_num`, 
                `activity_en`, `activity_cn`)
                VALUES (?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param(
                "ssssss",
                $new_ref_num,
                $courses_ref_num,
                $activity_en_array[$i],
                $activity_cn_array[$i]
            );

            if (!$stmt->execute()) {
                $errors[`$new_ref_num`] = $stmt->error;
            }
        }
    }

    if (!empty($errors)) {
        echo "error|" . json_encode($errors);
        exit;
    } else {
        echo "success|$courses_ref_num";
    }
}

// Close connection
mysqli_close($conn);
?>