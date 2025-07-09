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
    $course_title_cn = $_POST['addCourseTitleCN'];

    $course_short_title_en = $_POST['addCourseShortTitleEN'];
    $course_short_title_cn = $_POST['addCourseShortTitleCN'];

    $course_subtitle_en = $_POST['addCourseSubtitleEN'];
    $course_subtitle_cn = $_POST['addCourseSubtitleCN'];

    $course_description_en = $_POST['addCourseDescriptionEN'];
    $course_description_cn = $_POST['addCourseDescriptionCN'];

    $thumbnail_tag_en = $_POST['addThumbnailTagEN'];
    $thumbnail_tag_cn = $_POST['addThumbnailTagCN'];

    $suitable_for_en = $_POST['addSuitableForEN'];
    $suitable_for_cn = $_POST['addSuitableForCN'];

    $course_start_date_en = $_POST['addCourseStartDateEN'];
    $course_start_date_cn = $_POST['addCourseStartDateCN'];

    $class_hours_en = $_POST['addClassHoursEN'];
    $class_hours_cn = $_POST['addClassHoursCN'];

    $age_group = $_POST['addAgeGroup'];
    $language = $_POST['addLanguage'];
    $course_package = $_POST['addCoursePackage'];
    $course_type = $_POST['addCourseType'];


    $coursestable = $database . ".`wt_courses`";
    $activitiestable = $database . ".`wt_course_activities`";
    $featurestable = $database . ".`wt_course_features`";
    $learninggoalstable = $database . ".`wt_course_learning_goals`";
    $materialstable = $database . ".`wt_course_materials`";
    $objectivestable = $database . ".`wt_course_objectives`";
    $teacherstable = $database . ".`wt_course_teachers`";

    //WeTalk Courses reference num generate
    $ref_num_prefix = 'WTC-';
    $new_ref_num = generateRefNum($conn, $ref_num_prefix, $coursestable);

    $sql = "INSERT INTO $coursestable (`ref_num`, `course_title_en`, `course_title_cn`,
                `course_short_title_en`, `course_short_title_cn`,
                `course_subtitle_en`, `course_subtitle_cn`,
                `course_description_en`, `course_description_cn`,
                `thumbnail_tag_en`, `thumbnail_tag_cn`,
                `suitable_for_en`, `suitable_for_cn`,
                `course_start_date_en`, `course_start_date_cn`,
                `class_hours_en`, `class_hours_cn`,
                `age_group`, `language`, `course_package`, `course_type`) 
            VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "sssssssssssssssssssss",
        $new_ref_num,
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
        $course_type
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