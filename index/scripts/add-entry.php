<?php
// Database connection
include "../config/conf.php";
include 'generateRefNum.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $web_page = $_POST['web_page'];
    $element_id = $_POST['element_id'];
    $en = $_POST['en'];
    $cn = $_POST['cn'];
    $kr = $_POST['kr'];
    $jp = $_POST['jp'];

    $tablename = $database . ".`translations`";

    //Language set reference num generate
    //LS-{count}
    $ref_num_prefix = 'LS-';
    $new_ref_num = generateRefNum($conn, $ref_num_prefix, $tablename);

    $sql = "INSERT INTO $tablename (`ref_num`, `web_page`, `element_id`, `en`, `cn`, `kr`, `jp`) 
            VALUES ('$new_ref_num', '$web_page', '$element_id', '$en', '$cn', '$kr', '$jp');";
    $conn->query($sql);
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Translation Form</title>
</head>

<body>
    <div class="form-container">
        <form action=" " method="POST">
            <h1> Add Entry</h1>
            <label for="web_page">Web Page:</label>
            <input type="text" id="web_page" name="web_page">
            <br>

            <label for="element_id">Element ID:</label>
            <input type="text" id="element_id" name="element_id">
            <br>

            <label for="en">English (en):</label>
            <input type="text" id="en" name="en">
            <br>

            <label for="cn">Chinese (cn):</label>
            <input type="text" id="cn" name="cn">
            <br>

            <label for="kr">Korean (kr):</label>
            <input type="text" id="kr" name="kr">
            <br>

            <label for="jp">Japanese (jp):</label>
            <input type="text" id="jp" name="jp">
            <br>

            <button type="submit">Submit</button>
        </form>
    </div>
</body>

</html>