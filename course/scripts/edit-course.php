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

    $course_title_en = $_POST['editCourseTitleEN'];
    $course_title_cn = $_POST['editCourseTitleCN'];

    $course_short_title_en = $_POST['editCourseShortTitleEN'];
    $course_short_title_cn = $_POST['editCourseShortTitleCN'];

    $course_subtitle_en = $_POST['editCourseSubtitleEN'];
    $course_subtitle_cn = $_POST['editCourseSubtitleCN'];

    $course_description_en = $_POST['editCourseDescriptionEN'];
    $course_description_cn = $_POST['editCourseDescriptionCN'];

    $thumbnail_tag_en = $_POST['editThumbnailTagEN'];
    $thumbnail_tag_cn = $_POST['editThumbnailTagCN'];

    $suitable_for_en = $_POST['editSuitableForEN'];
    $suitable_for_cn = $_POST['editSuitableForCN'];

    $course_start_date_en = $_POST['editCourseStartDateEN'];
    $course_start_date_cn = $_POST['editCourseStartDateCN'];

    $class_hours_en = $_POST['editClassHoursEN'];
    $class_hours_cn = $_POST['editClassHoursCN'];

    $age_group = $_POST['editAgeGroup'];
    $language = $_POST['editLanguage'];
    $course_package = $_POST['editCoursePackage'];
    $course_type = $_POST['editCourseType'];

    $coursestable = $database . ".`wt_courses`";

    $sql = "UPDATE $coursestable SET 
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

    if ($stmt->execute()) {
        echo "success|$ref_num";
    } else {
        echo "error|Execution failed: " . $stmt->error;
    }
}

// Close connection
mysqli_close($conn);
?>