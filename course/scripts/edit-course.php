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
    $lang = $_POST['lang'];

    //Fields that have translations
    $course_title = $_POST['editCourseTitle'];
    $course_short_title = $_POST['editCourseShortTitle'];
    $course_subtitle = $_POST['editCourseSubtitle'];
    $course_description = $_POST['editCourseDescription'];
    $thumbnail_tag = $_POST['editThumbnailTag'];
    $suitable_for = $_POST['editSuitableFor'];
    $course_start_date = $_POST['editCourseStartDate'];
    $class_hours = $_POST['editClassHours'];

    //Column names with translations
    $col_course_title = "course_title" . $lang;
    $col_course_short_title = "course_short_title" . $lang;
    $col_course_subtitle = "course_subtitle" . $lang;
    $col_course_description = "course_description" . $lang;
    $col_thumbnail_tag = "thumbnail_tag" . $lang;
    $col_suitable_for = "suitable_for" . $lang;
    $col_course_start_date = "course_start_date" . $lang;
    $col_class_hours = "class_hours" . $lang;

    $age_group = $_POST['editAgeGroup'];
    $language = $_POST['editLanguage'];
    $course_package = $_POST['editCoursePackage'];
    $course_type = $_POST['editCourseType'];

    $tablename = $database . ".`wt_courses`";

    $sql = "UPDATE $tablename SET 
            `$col_course_title` = ?,
            `$col_course_short_title` = ?,
            `$col_course_subtitle` = ?,
            `$col_course_description` = ?,
            `$col_thumbnail_tag` = ?,
            `$col_suitable_for` = ?,
            `$col_course_start_date` = ?,
            `$col_class_hours` = ?,
            `age_group` = ?,
            `language` = ?,
            `course_package` = ?,
            `course_type` = ?
        WHERE `ref_num` = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssssssssss",
        $course_title,
        $course_short_title,
        $course_subtitle,
        $course_description,
        $thumbnail_tag,
        $suitable_for,
        $course_start_date,
        $class_hours,
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
            $learning_goal_array = $_POST['editLearningGoal']; //all of these post values are arrays
            $col_learning_goal = "learning_goal" . $lang;

            $tablename = $database . ".`wt_course_learning_goals`";

            $entryCount = count($ref_num_array); // assuming all arrays are same length

            for ($i = 0; $i < $entryCount; $i++) {
                if ($ref_num_array[$i] !== '') {
                    $sql = "UPDATE $tablename SET 
                            `$col_learning_goal` = ?
                        WHERE `ref_num` = ?";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "ss",
                        $learning_goal_array[$i],
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
                        `$col_learning_goal`)
                        VALUES (?, ?, ?)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "sss",
                        $new_ref_num,
                        $ref_num,
                        $learning_goal_array[$i]
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
            $activity_array = $_POST['editActivity']; //all of these post values are arrays
            $col_activity = "activity" . $lang;

            $tablename = $database . ".`wt_course_activities`";

            $entryCount = count($ref_num_array); // assuming all arrays are same length

            for ($i = 0; $i < $entryCount; $i++) {
                if ($ref_num_array[$i] !== '') {
                    $sql = "UPDATE $tablename SET 
                                `$col_activity` = ?
                            WHERE `ref_num` = ?";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "ss",
                        $activity_array[$i],
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
                                `$col_activity`)
                            VALUES (?, ?, ?)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "sss",
                        $new_ref_num,
                        $ref_num,
                        $activity_array[$i]
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
            $feature_bold_array = $_POST['editFeatureBold']; //all of these post values are arrays
            $feature_array = $_POST['editFeature'];
            $col_feature_bold = "feature_bold" . $lang;
            $col_feature = "feature" . $lang;

            $tablename = $database . ".`wt_course_features`";

            $entryCount = count($ref_num_array); // assuming all arrays are same length

            for ($i = 0; $i < $entryCount; $i++) {
                if ($ref_num_array[$i] !== '') {
                    $sql = "UPDATE $tablename SET 
                                `$col_feature_bold` = ?,
                                `$col_feature` = ?
                            WHERE `ref_num` = ?";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "sss",
                        $feature_bold_array[$i],
                        $feature_array[$i],
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
                            `$col_feature_bold`,
                            `$col_feature`)
                            VALUES (?, ?, ?, ?)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "ssss",
                        $new_ref_num,
                        $ref_num,
                        $feature_bold_array[$i],
                        $feature_array[$i]
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
            $material_array = $_POST['editMaterial']; //all of these post values are arrays
            $col_material = "material" . $lang;

            $tablename = $database . ".`wt_course_materials`";

            $entryCount = count($ref_num_array); // assuming all arrays are same length

            for ($i = 0; $i < $entryCount; $i++) {
                if ($ref_num_array[$i] !== '') {
                    $sql = "UPDATE $tablename SET 
                                `$col_material` = ?
                            WHERE `ref_num` = ?";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "ss",
                        $material_array[$i],
                        $ref_num_array[$i]
                    );

                    if (!$stmt->execute()) {
                        $errors[`$ref_num_array[$i]`] = $stmt->error;
                    }
                } else {
                    //If material does not exist yet
                    //WeTalk Course Materials reference num generate
                    $ref_num_prefix = 'CM-';
                    $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

                    $sql = "INSERT INTO $tablename 
                            (`ref_num`, `courses_ref_num`, 
                            `$col_material`)
                            VALUES (?, ?, ?)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "sss",
                        $new_ref_num,
                        $ref_num,
                        $material_array[$i]
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
            $teacher_array = $_POST['editTeacher']; //all of these post values are arrays
            $col_teacher = "teacher" . $lang;

            $tablename = $database . ".`wt_course_teachers`";

            $entryCount = count($ref_num_array); // assuming all arrays are same length

            for ($i = 0; $i < $entryCount; $i++) {
                if ($ref_num_array[$i] !== '') {
                    $sql = "UPDATE $tablename SET 
                                `$col_teacher` = ?
                            WHERE `ref_num` = ?";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "ss",
                        $teacher_array[$i],
                        $ref_num_array[$i]
                    );

                    if (!$stmt->execute()) {
                        $errors[`$ref_num_array[$i]`] = $stmt->error;
                    }
                } else {
                    //If teacher does not exist yet
                    //WeTalk Course Teachers reference num generate
                    $ref_num_prefix = 'CT-';
                    $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

                    $sql = "INSERT INTO $tablename 
                            (`ref_num`, `courses_ref_num`, 
                            `$col_teacher`)
                            VALUES (?, ?, ?)";

                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param(
                        "sss",
                        $new_ref_num,
                        $ref_num,
                        $teacher_array[$i]
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