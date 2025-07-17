<?php
// Database connection
include "../../connections/dbname.php";
include 'generateRefNum.php';
include "uploadImage.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$errors = [];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $ref_num = $_POST['ref_num'];

    $course_title_en = $_POST['editCourseTitleEN'];
    // $course_title_cn = $_POST['editCourseTitleCN'];

    $course_short_title_en = $_POST['editCourseShortTitleEN'];
    // $course_short_title_cn = $_POST['editCourseShortTitleCN'];

    $course_subtitle_en = $_POST['editCourseSubtitleEN'];
    // $course_subtitle_cn = $_POST['editCourseSubtitleCN'];

    $course_description_en = $_POST['editCourseDescriptionEN'];
    // $course_description_cn = $_POST['editCourseDescriptionCN'];

    $thumbnail_tag_en = $_POST['editThumbnailTagEN'];
    // $thumbnail_tag_cn = $_POST['editThumbnailTagCN'];

    $suitable_for_en = $_POST['editSuitableForEN'];
    // $suitable_for_cn = $_POST['editSuitableForCN'];

    $course_start_date_en = $_POST['editCourseStartDateEN'];
    // $course_start_date_cn = $_POST['editCourseStartDateCN'];

    $class_hours_en = $_POST['editClassHoursEN'];
    // $class_hours_cn = $_POST['editClassHoursCN'];

    $age_group = $_POST['editAgeGroup'];
    $language = $_POST['editLanguage'];
    $course_package = $_POST['editCoursePackage'];
    $course_type = $_POST['editCourseType'];

    $tablename = $database . ".`wt_courses`";

    $sql = "UPDATE $tablename SET 
            `course_title_en` = ?,
            `course_title_cn` = ?,
            `course_short_title_en` = ?,
            `course_short_title_cn` = ?,
            `course_subtitle_en` = ?,
            `course_subtitle_cn` = ?,
            `course_description_en` = ?,
            `course_description_cn` = ?,
            `thumbnail_tag_en` = ?,
            `thumbnail_tag_cn` = ?,
            `suitable_for_en` = ?,
            `suitable_for_cn` = ?,
            `course_start_date_en` = ?,
            `course_start_date_cn` = ?,
            `class_hours_en` = ?,
            `class_hours_cn` = ?,
            `age_group` = ?,
            `language` = ?,
            `course_package` = ?,
            `course_type` = ?
        WHERE `ref_num` = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssssssssssssssssss",
        $course_title_en,
        $course_title_cn,
        $course_short_title_en,
        $course_short_title_cn,
        $course_subtitle_en,
        $course_subtitle_cn,
        $course_description_en,
        $course_description_cn,
        $thumbnail_tag_en,
        $thumbnail_tag_cn,
        $suitable_for_en,
        $suitable_for_cn,
        $course_start_date_en,
        $course_start_date_cn,
        $class_hours_en,
        $class_hours_cn,
        $age_group,
        $language,
        $course_package,
        $course_type,
        $ref_num
    );

    //If general info successfully updates, continue with images
    if ($stmt->execute()) {
        $course_img = $_FILES['editCourseImg'];
        $course_list_img = $_FILES['editCourseListImg'];
        if (isset($course_img) && $course_img['error'] !== UPLOAD_ERR_NO_FILE)
            uploadImage($conn, $ref_num, $tablename, $course_img, 'course_img');
        if (isset($course_list_img) && $course_list_img['error'] !== UPLOAD_ERR_NO_FILE)
            uploadImage($conn, $ref_num, $tablename, $course_list_img, 'course_list_img');

        //Continue with updating course sections
        //First up is Learning Goals
        if (isset($_POST['learning_goal_ref_num'])) {
            $ref_num_array = $_POST['learning_goal_ref_num'];  //an array of ref nums 
            $learning_goal_en_array = $_POST['editLearningGoalEN']; //all of these post values are arrays
            // $learning_goal_cn_array = $_POST['editLearningGoalCN'];

            $tablename = $database . ".`wt_course_learning_goals`";

            $entryCount = count($ref_num_array); // assuming all arrays are same length

            for ($i = 0; $i < $entryCount; $i++) {
                if ($ref_num_array[$i] !== '') {
                    $sql = "UPDATE $tablename SET 
                            `learning_goal_en` = ?,
                            `learning_goal_cn` = ?
                        WHERE `ref_num` = ?";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "sss",
                        $learning_goal_en_array[$i],
                        $learning_goal_cn_array[$i],
                        $ref_num_array[$i]
                    );

                    if (!$stmt->execute()) {
                        $errors[`$ref_num_array[$i]`] = $stmt->error;
                    }
                } else {
                    //If learning goal does not exist yet
                    //WeTalk Course Learning Goals reference num generate
                    $ref_num_prefix = 'CLG-';
                    $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

                    $sql = "INSERT INTO $tablename 
                        (`ref_num`, `courses_ref_num`, 
                        `learning_goal_en`)
                        VALUES (?, ?, ?)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "sss",
                        $new_ref_num,
                        $ref_num,
                        $learning_goal_en_array[$i]
                    );

                    if (!$stmt->execute()) {
                        $errors[`$new_ref_num`] = $stmt->error;
                    }
                }
            }
        }

        //Second one is activities
        if (isset($_POST['activity_ref_num'])) {
            $ref_num_array = $_POST['activity_ref_num'];  //an array of ref nums 
            $activity_en_array = $_POST['editActivityEN']; //all of these post values are arrays
            // $activity_cn_array = $_POST['editActivityCN'];

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
                                `activity_en`)
                            VALUES (?, ?, ?)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "sss",
                        $new_ref_num,
                        $ref_num,
                        $activity_en_array[$i]
                    );

                    if (!$stmt->execute()) {
                        $errors[`$new_ref_num`] = $stmt->error;
                    }
                }
            }
            if (!empty($errors)) {
                echo "error|" . json_encode($errors);
                exit;
            }
        }

        //3rd one is features
        if (isset($_POST['feature_ref_num'])) {
            $ref_num_array = $_POST['feature_ref_num'];  //an array of ref nums 
            $feature_bold_en_array = $_POST['editFeatureBoldEN']; //all of these post values are arrays
            // $feature_bold_cn_array = $_POST['editFeatureBoldCN'];
            $feature_en_array = $_POST['editFeatureEN'];
            // $feature_cn_array = $_POST['editFeatureCN'];

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
                            `feature_bold_en`,
                            `feature_en`)
                            VALUES (?, ?, ?, ?)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "ssss",
                        $new_ref_num,
                        $ref_num,
                        $feature_bold_en_array[$i],
                        $feature_en_array[$i]
                    );

                    if (!$stmt->execute()) {
                        $errors[`$new_ref_num`] = $stmt->error;
                    }
                }
            }

            if (!empty($errors)) {
                echo "error|" . json_encode($errors);
                exit;
            }
        }

        //4th is materials
        if (isset($_POST['material_ref_num'])) {
            $ref_num_array = $_POST['material_ref_num'];  //an array of ref nums 
            $material_en_array = $_POST['editMaterialEN']; //all of these post values are arrays
            // $material_cn_array = $_POST['editMaterialCN'];

            $tablename = $database . ".`wt_course_materials`";

            $entryCount = count($ref_num_array); // assuming all arrays are same length

            for ($i = 0; $i < $entryCount; $i++) {
                if ($ref_num_array[$i] !== '') {
                    $sql = "UPDATE $tablename SET 
                                `material_en` = ?,
                                `material_cn` = ?
                            WHERE `ref_num` = ?";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "sss",
                        $material_en_array[$i],
                        $material_cn_array[$i],
                        $ref_num_array[$i]
                    );

                    if (!$stmt->execute()) {
                        $errors[`$ref_num_array[$i]`] = $stmt->error;
                    }
                } else {
                    //If material does not exist yet
                    //WeTalk Course Materials reference num generate
                    $ref_num_prefix = 'CA-';
                    $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

                    $sql = "INSERT INTO $tablename 
                            (`ref_num`, `courses_ref_num`, 
                            `material_en`)
                            VALUES (?, ?, ?)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "sss",
                        $new_ref_num,
                        $ref_num,
                        $material_en_array[$i]
                    );

                    if (!$stmt->execute()) {
                        $errors[`$new_ref_num`] = $stmt->error;
                    }
                }
            }

            if (!empty($errors)) {
                echo "error|" . json_encode($errors);
                exit;
            }
        }

        //5th and last is teachers
        if (isset($_POST['teacher_ref_num'])) {
            $ref_num_array = $_POST['teacher_ref_num'];  //an array of ref nums 
            $teacher_en_array = $_POST['editTeacherEN']; //all of these post values are arrays
            // $teacher_cn_array = $_POST['editTeacherCN'];

            $tablename = $database . ".`wt_course_teachers`";

            $entryCount = count($ref_num_array); // assuming all arrays are same length

            for ($i = 0; $i < $entryCount; $i++) {
                if ($ref_num_array[$i] !== '') {
                    $sql = "UPDATE $tablename SET 
                                `teacher_en` = ?,
                                `teacher_cn` = ?
                            WHERE `ref_num` = ?";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "sss",
                        $teacher_en_array[$i],
                        $teacher_cn_array[$i],
                        $ref_num_array[$i]
                    );

                    if (!$stmt->execute()) {
                        $errors[`$ref_num_array[$i]`] = $stmt->error;
                    }
                } else {
                    //If teacher does not exist yet
                    //WeTalk Course Teachers reference num generate
                    $ref_num_prefix = 'CA-';
                    $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

                    $sql = "INSERT INTO $tablename 
                            (`ref_num`, `courses_ref_num`, 
                            `teacher_en`)
                            VALUES (?, ?, ?)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "sss",
                        $new_ref_num,
                        $ref_num,
                        $teacher_en_array[$i]
                    );

                    if (!$stmt->execute()) {
                        $errors[`$new_ref_num`] = $stmt->error;
                    }
                }
            }

            if (!empty($errors)) {
                echo "error|" . json_encode($errors);
                exit;
            }
        }

        echo "success|$ref_num";
    } else {
        echo "error|Execution failed: " . $stmt->error;
    }
}

// Close connection
mysqli_close($conn);
?>