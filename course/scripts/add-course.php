<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<?php
// Database connection
include "../../connections/dbname.php";
include '../utils/generateRefNum.php';

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get input values and sanitize them
    $course_title_en = $_POST['course_title_en'];
    //todo insert more entries

    $coursestable = $database . ".`wt_courses`";
    $activitiestable = $database . ".`wt_course_activities`";
    $featurestable = $database . ".`wt_course_features`";
    $learninggoalstable = $database . ".`wt_course_learning_goals`";
    $materialstable = $database . ".`wt_course_materials`";
    $objectivestable = $database . ".`wt_course_objectives`";
    $teacherstable = $database . ".`wt_course_teachers`";

    //WeTalk Courses reference num generate
    $ref_num_prefix = 'WTC-';
    $new_ref_num = generateRefNum($conn, $ref_num_prefix, $scheduletable);

    $sql = "INSERT INTO $scheduletable (`ref_num`, `scheddate`, `schedstarttime`, `schedendtime`, `teacher_ref_num`, `platform`, `language_id`) 
                VALUES (?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssssii", $new_ref_num, $scheddate, $schedstarttime, $schedendtime, $teacher_ref_num, $platform, $language_id);
    if (!$stmt->execute()) {
        echo "<script type='text/javascript'>alert('Error adding schedule: " . addslashes($stmt->error) . "'); window.location.href='schedule.php';</script>";
    }

    echo "<script type='text/javascript'>alert('Schedule added successfully!'); window.location.href='schedule.php';</script>";

}

// Close connection
mysqli_close($conn);
?>