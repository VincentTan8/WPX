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

    // Fields that have translations
    $news_category = $_POST['editNewsCategory'];
    $news_title = $_POST['editNewsTitle'];
    $news_description = $_POST['editNewsDescription'];
    $date_posted = $_POST['editDatePosted'];
    $date = $_POST['editDate'];
    $story_source = $_POST['editStorySource'];
    $news_id = $_POST['editNewsId'];
    $news_lang = $_POST['editNewsLang'];

    // Column names with translations
    $col_news_title = "news_title" . $lang;
    $col_news_description = "news_description" . $lang;

    $tablename = $database . ".`wt_news`";

    // Get uploaded files
    $news_thumbnail_file = $_FILES['editNewsThumbnail'] ?? null;
    $news_video_file = $_FILES['editVideoFile'] ?? null;

    // Start SQL (without thumbnail/video initially)
    $sql = "UPDATE $tablename SET 
            `news_category` = ?,
            `$col_news_title` = ?,
            `$col_news_description` = ?,
            `date_posted` = ?,
            `date` = ?,
            `story_source` = ?,
            `news_id` = ?,
            `news_lang` = ?";

    // Params and types
    $params = [
        $news_category,
        $news_title,
        $news_description,
        $date_posted,
        $date,
        $story_source,
        $news_id,
        $news_lang
    ];
    $types = "ssssssss"; // 8 strings

    // Add thumbnail column only if uploaded
    if ($news_thumbnail_file && $news_thumbnail_file['error'] !== UPLOAD_ERR_NO_FILE) {
        $thumbnail_name = basename($news_thumbnail_file['name']);
        $sql .= ", `news_thumbnail` = ?";
        $params[] = $thumbnail_name;
        $types .= "s";
    }

    // Add video column only if uploaded
    if ($news_video_file && $news_video_file['error'] !== UPLOAD_ERR_NO_FILE) {
        $video_name = basename($news_video_file['name']);
        $sql .= ", `video_file` = ?";
        $params[] = $video_name;
        $types .= "s";
    }

    // Finish SQL
    $sql .= " WHERE `ref_num` = ?";
    $params[] = $ref_num;
    $types .= "s";

    // Prepare statement
    $stmt = $conn->prepare($sql);
    $stmt->bind_param($types, ...$params);

    // Execute main update
    if ($stmt->execute()) {
        // Upload files after DB update
        if ($news_thumbnail_file && $news_thumbnail_file['error'] !== UPLOAD_ERR_NO_FILE) {
            uploadImage($conn, $ref_num, $tablename, $news_thumbnail_file, 'news_thumbnail');
        }
        if ($news_video_file && $news_video_file['error'] !== UPLOAD_ERR_NO_FILE) {
            uploadImage($conn, $ref_num, $tablename, $news_video_file, 'video_file');
        }

        // Continue with updating course sections
        if (isset($_POST['news_section_ref_num'])) {
            $ref_num_array = $_POST['news_section_ref_num'];
            $news_section_array = $_POST['editNewsSection'];
            $news_detail_array = $_POST['editNewsDetail'];
            $col_news_section = "section_title" . $lang;
            $col_news_detail = "section_detail" . $lang;
            $photo_array = $_FILES['editSectionPhoto'];

            $tablename = $database . ".`wt_news_section`";
            $entryCount = count($ref_num_array);

            for ($i = 0; $i < $entryCount; $i++) {
                $file = [
                    'name' => $photo_array['name'][$i],
                    'type' => $photo_array['type'][$i],
                    'tmp_name' => $photo_array['tmp_name'][$i],
                    'error' => $photo_array['error'][$i],
                    'size' => $photo_array['size'][$i]
                ];
                if ($ref_num_array[$i] !== '') {
                    // Update section title/detail
                    $sql = "UPDATE $tablename SET `$col_news_section` = ?, `$col_news_detail` = ? WHERE `ref_num` = ?";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("sss", $news_section_array[$i], $news_detail_array[$i], $ref_num_array[$i]);
                    if (!$stmt->execute()) {
                        $errors[$ref_num_array[$i]] = $stmt->error;
                    }

                    // Upload image if one is selected
                    if ($file['error'] !== UPLOAD_ERR_NO_FILE) {
                        $photo_col = ($lang === '_cn') ? 'photo_cn' : 'photo';

                        uploadImage($conn, $ref_num_array[$i], $tablename, $file, $photo_col);
                    }
                } else {
                    // New section
                    $ref_num_prefix = 'NS-';
                    $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

                    $sql = "INSERT INTO $tablename (`ref_num`, `news_ref_num`, `$col_news_section`, `$col_news_detail`) VALUES (?, ?, ?, ?)";
                    $stmt = $conn->prepare($sql);
                    $stmt->bind_param("ssss", $new_ref_num, $ref_num, $news_section_array[$i], $news_detail_array[$i]);
                    if ($stmt->execute()) {
                        if ($file['error'] !== UPLOAD_ERR_NO_FILE) {
                            $photo_col = ($lang === '_cn') ? 'photo_cn' : 'photo';

                            uploadImage($conn, $new_ref_num, $tablename, $file, $photo_col);

                        }
                    } else {
                        $errors[$new_ref_num] = $stmt->error;
                    }
                }
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