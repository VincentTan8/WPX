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
    $ref_num_array = $_POST['ref_num'];  //an array of ref nums
    $courses_ref_num_array = $_POST['courses_ref_num'];  //all of these post values are arrays
    $feature_bold_en_array = $_POST['editFeatureBoldEN'];
    $feature_bold_cn_array = $_POST['editFeatureBoldCN'];
    $feature_en_array = $_POST['editFeatureEN'];
    $feature_cn_array = $_POST['editFeatureCN'];

    $featurestable = $database . ".`wt_course_features`";

    $featureCount = count($ref_num_array); // assuming all arrays are same length

    for ($i = 0; $i < $featureCount; $i++) {
        $sql = "UPDATE $featurestable SET 
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

        if ($stmt->execute()) {
            // nice
        } else {
            $errors[`$ref_num_array[$i]`] = $stmt->error;
        }
    }

    if (!empty($errors)) {
        echo "error|" . json_encode($errors);
        exit;
    } else {
        echo "success|$ref_num";
    }
}

// Close connection
mysqli_close($conn);
?>