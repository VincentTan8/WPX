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
    $feature_bold_en_array = $_POST['editFeatureBoldEN']; //all of these post values are arrays
    $feature_bold_cn_array = $_POST['editFeatureBoldCN'];
    $feature_en_array = $_POST['editFeatureEN'];
    $feature_cn_array = $_POST['editFeatureCN'];

    $tablename = $database . ".`wt_course_features`";

    $entryCount = count($ref_num_array); // assuming all arrays are same length

    for ($i = 0; $i < $entryCount; $i++) {
        if ($ref_num_array[$i] !== '') {
            $sql = "UPDATE $tablename SET 
                    `feature_bold_en` = ?,
                    `feature_bold_cn` = ?,
                    `feature_en` = ?,
                    `feature_cn` = ?
                WHERE `ref_num` = ?";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param(
                "sssss",
                $feature_bold_en_array[$i],
                $feature_bold_cn_array[$i],
                $feature_en_array[$i],
                $feature_cn_array[$i],
                $ref_num_array[$i]
            );

            if (!$stmt->execute()) {
                $errors[`$ref_num_array[$i]`] = $stmt->error;
            }
        } else {
            //If feature does not exist yet
            //WeTalk Course Features reference num generate
            $ref_num_prefix = 'CF-';
            $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

            $sql = "INSERT INTO $tablename 
                (`ref_num`, `courses_ref_num`, 
                `feature_bold_en`, `feature_bold_cn`,
                `feature_en`, `feature_cn`)
                VALUES (?, ?, ?, ?, ?, ?)";

            $stmt = $conn->prepare($sql);
            $stmt->bind_param(
                "ssssss",
                $new_ref_num,
                $courses_ref_num,
                $feature_bold_en_array[$i],
                $feature_bold_cn_array[$i],
                $feature_en_array[$i],
                $feature_cn_array[$i]
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