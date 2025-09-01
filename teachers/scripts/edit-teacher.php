<?php
// Database connection
include "../../connections/dbname.php";
include "uploadImage.php";

// Check connection
if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$errors = [];

// Check if form is submitted
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = $_POST['id'];
    $lang = $_POST['lang'];
    // Fields that have translations (matching JS row['field' + lang])
    $fullname = $_POST['editFullName'];
    $label_details = $_POST['editLabelDetails'];
    $introduction = $_POST['editIntro'];
    $birthplace = $_POST['editBirthplace'];
    $education = $_POST['editEducation'];
    $motto = $_POST['editMotto'];
    $philosophy = $_POST['editPhilosophy'];

    // Column names with translations
    $col_fullname = "fullname" . $lang;
    $col_label_details = "label_details" . $lang;
    $col_introduction = "introduction" . $lang;
    $col_birthplace = "birthplace" . $lang;
    $col_education = "education" . $lang;
    $col_motto = "motto" . $lang;
    $col_philosophy = "philosophy" . $lang;

    // Non-translated fields
    $thumbnail = $_FILES['editThumbnail'];

    $category = $_POST['editCategory'];
    $category_details = $_POST['editCategoryDetails'];
    $phone_number = $_POST['editPhone'];
    $email_address = $_POST['editEmail'];
    $common_language = $_POST['editLanguage'];
    $time_zone = $_POST['editTimeZone'];
    $gender = $_POST['editGender'];
    $birthdate = $_POST['editBirthdate'];
    $talkcloud_id = $_POST['editTalkcloudId'];
    $digital_label_a1 = $_POST['editLabelA1'];
    $digital_label_a2 = $_POST['editLabelA2'];
    $digital_label_a3 = $_POST['editLabelA3'];
    $digital_label_b1 = $_POST['editLabelB1'];
    $digital_label_b2 = $_POST['editLabelB2'];
    $digital_label_b3 = $_POST['editLabelB3'];
    $digital_label_c1 = $_POST['editLabelC1'];
    $digital_label_c2 = $_POST['editLabelC2'];
    $digital_label_c3 = $_POST['editLabelC3'];
    $show_teacher = $_POST['editShowTeacher'];

    $tablename = $database . ".`teachers`";

    $sql = "UPDATE $tablename SET 
            `$col_fullname` = ?,
            `$col_label_details` = ?,
            `$col_introduction` = ?,
            `$col_birthplace` = ?,
            `$col_education` = ?,
            `$col_motto` = ?,
            `$col_philosophy` = ?,
            `category` = ?,
            `category_details` = ?,
            `phone_number` = ?,
            `email_address` = ?,
            `common_language` = ?,
            `time_zone` = ?,
            `gender` = ?,
            `birthdate` = ?,
            `talkcloud_id` = ?,
            `digital_label_a1` = ?,
            `digital_label_a2` = ?,
            `digital_label_a3` = ?,
            `digital_label_b1` = ?,
            `digital_label_b2` = ?,
            `digital_label_b3` = ?,
            `digital_label_c1` = ?,
            `digital_label_c2` = ?,
            `digital_label_c3` = ?,
            `show_teacher` = ?
          
            
        WHERE `id` = ?";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssssssssssssssssssssssssi",
        $fullname,
        $label_details,
        $introduction,
        $birthplace,
        $education,
        $motto,
        $philosophy,
        $category,
        $category_details,
        $phone_number,
        $email_address,
        $common_language,
        $time_zone,
        $gender,
        $birthdate,
        $talkcloud_id,
        $digital_label_a1,
        $digital_label_a2,
        $digital_label_a3,
        $digital_label_b1,
        $digital_label_b2,
        $digital_label_b3,
        $digital_label_c1,
        $digital_label_c2,
        $digital_label_c3,
        $show_teacher,
        $id
    );

    //If general info successfully updates, continue with images
    if ($stmt->execute()) {
        if ($thumbnail && $thumbnail['error'] !== UPLOAD_ERR_NO_FILE) {
            uploadImage($conn, $id, $tablename, $thumbnail, 'thumbnails');
        }

        echo "success|$id";
    } else {
        echo "error|Execution failed: " . $stmt->error;
    }
}

// Close connection
mysqli_close($conn);
?>