<?php
function uploadImage($conn, $id, $tablename, $image, $column)
{
    $uploads_dir = '../../teachers/img/thumbnails/';
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
            $stmt = $conn->prepare("SELECT `$column` FROM $tablename WHERE `id` = ?");
            $stmt->bind_param("s", $id);
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
                $stmt = $conn->prepare("UPDATE $tablename SET `$column` = ? WHERE `id` = ?");
                $stmt->bind_param("ss", $newFileName, $id);
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
?>