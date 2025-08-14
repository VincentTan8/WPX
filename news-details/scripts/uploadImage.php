<?php
function uploadImage($conn, $ref_num, $tablename, $image, $column)
{
    $uploads_dir = '../../resources/img/news/';
    if (!is_dir($uploads_dir)) {
        if (!mkdir($uploads_dir, 0777, true)) {
            echo "Failed to create directory.";
            exit;
        }
    }

    $fileName = basename($image["name"]);
    $fileTmpName = $image["tmp_name"];
    $fileError = $image["error"];
    $fileSize = $image["size"];
    $random_digit = str_pad(rand(0, 9999), 4, '0', STR_PAD_LEFT);
    $newFileName = $random_digit . '_' . $fileName;

    if ($fileError === 0) {
        // 5MB limit (5 * 1024 * 1024 bytes = 5242880 bytes)
        if ($fileSize <= 5242880) {
            // Get old image filename from DB
            $oldFileName = null; // initialize
            $stmt = $conn->prepare("SELECT `$column` FROM $tablename WHERE `ref_num` = ?");
            $stmt->bind_param("s", $ref_num);
            $stmt->execute();
            $stmt->bind_result($oldFileName);
            $stmt->fetch();
            $stmt->close();

            // Move the new file
            if (move_uploaded_file($fileTmpName, $uploads_dir . '/' . $newFileName)) {
                // Delete old file if it exists and is not empty
                if (!empty($oldFileName) && file_exists($uploads_dir . '/' . $oldFileName)) {
                    unlink($uploads_dir . '/' . $oldFileName);
                }

                // Update database
                $stmt = $conn->prepare("UPDATE $tablename SET `$column` = ? WHERE `ref_num` = ?");
                $stmt->bind_param("ss", $newFileName, $ref_num);
                $stmt->execute();
                $stmt->close();
            } else {
                echo "<script> alert('Failed to move $fileName.') </script>";
            }
        } else {
            echo "<script> alert('$fileName is too large. Please upload a file smaller than 5MB.') </script>";
        }
    } else {
        echo "<script> alert('There was an error uploading the image. $fileError') </script> ";
    }
}

// Check if form is submitted
// if ($_SERVER["REQUEST_METHOD"] == "POST") {
//     $course_title_en = $_POST['addCourseTitleEN'];
//     $course_title_cn = $_POST['addCourseTitleCN'];

//     $course_short_title_en = $_POST['addCourseShortTitleEN'];
//     $course_short_title_cn = $_POST['addCourseShortTitleCN'];

//     $course_subtitle_en = $_POST['addCourseSubtitleEN'];
//     $course_subtitle_cn = $_POST['addCourseSubtitleCN'];

//     $course_description_en = $_POST['addCourseDescriptionEN'];
//     $course_description_cn = $_POST['addCourseDescriptionCN'];

//     $thumbnail_tag_en = $_POST['addThumbnailTagEN'];
//     $thumbnail_tag_cn = $_POST['addThumbnailTagCN'];

//     $suitable_for_en = $_POST['addSuitableForEN'];
//     $suitable_for_cn = $_POST['addSuitableForCN'];

//     $course_start_date_en = $_POST['addCourseStartDateEN'];
//     $course_start_date_cn = $_POST['addCourseStartDateCN'];

//     $class_hours_en = $_POST['addClassHoursEN'];
//     $class_hours_cn = $_POST['addClassHoursCN'];

//     $age_group = $_POST['addAgeGroup'];
//     $language = $_POST['addLanguage'];
//     $course_package = $_POST['addCoursePackage'];
//     $course_type = $_POST['addCourseType'];

//     $tablename = $database . ".`wt_courses`";

//     //WeTalk Courses reference num generate
//     $ref_num_prefix = 'WTC-';
//     $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

//     $sql = "INSERT INTO $tablename (`ref_num`, `course_title_en`, `course_title_cn`,
//                 `course_short_title_en`, `course_short_title_cn`,
//                 `course_subtitle_en`, `course_subtitle_cn`,
//                 `course_description_en`, `course_description_cn`,
//                 `thumbnail_tag_en`, `thumbnail_tag_cn`,
//                 `suitable_for_en`, `suitable_for_cn`,
//                 `course_start_date_en`, `course_start_date_cn`,
//                 `class_hours_en`, `class_hours_cn`,
//                 `age_group`, `language`, `course_package`, `course_type`) 
//             VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

//     $stmt = $conn->prepare($sql);
//     $stmt->bind_param(
//         "sssssssssssssssssssss",
//         $new_ref_num,
//         $course_title_en,
//         $course_title_cn,
//         $course_short_title_en,
//         $course_short_title_cn,
//         $course_subtitle_en,
//         $course_subtitle_cn,
//         $course_description_en,
//         $course_description_cn,
//         $thumbnail_tag_en,
//         $thumbnail_tag_cn,
//         $suitable_for_en,
//         $suitable_for_cn,
//         $course_start_date_en,
//         $course_start_date_cn,
//         $class_hours_en,
//         $class_hours_cn,
//         $age_group,
//         $language,
//         $course_package,
//         $course_type
//     );

// if ($stmt->execute()) {
//     $course_img = $_FILES['addCourseImg'];
//     $course_list_img = $_FILES['addCourseListImg'];
//     if (isset($course_img) && $course_img['error'] !== UPLOAD_ERR_NO_FILE)
//         uploadImage($conn, $new_ref_num, $tablename, $course_img, 'course_img');
//     if (isset($course_list_img) && $course_list_img['error'] !== UPLOAD_ERR_NO_FILE)
//         uploadImage($conn, $new_ref_num, $tablename, $course_list_img, 'course_list_img');
//     echo "success|$new_ref_num";
// } else {
//     echo "error|Execution failed: " . $stmt->error;
// }
// }

// Close connection
// mysqli_close($conn);
?>