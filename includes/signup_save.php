<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>


<?php

ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

include "../connections/dbname.php";
$my_series_search = '10001';
$presentdate = date('Y-m-d');

if (isset($_POST['first_name'])) {
    $_SESSION['first_name'] = $_POST['first_name'];
}
if (isset($_POST['last_name'])) {
    $_SESSION['last_name'] = $_POST['last_name'];
}
if (isset($_POST['message'])) {
    $_SESSION['message'] = $_POST['message'];
}
if (isset($_POST['email'])) {
    $_SESSION['email'] = $_POST['email'];
}
if (isset($_POST['course'])) {
    $_SESSION['course'] = $_POST['course'];
}
if (isset($_POST['contact'])) {
    $_SESSION['contact'] = $_POST['contact'];
}
if (isset($_POST['date_class'])) {
    $_SESSION['date_class'] = $_POST['date_class'];
}
if (isset($_POST['time_class'])) {
    $_SESSION['time_class'] = $_POST['time_class'];
}

do {
    $my_reference = 'WT-' . (string) $my_series_search;

    $result_trans90 = mysqli_query($db_connection, "SELECT ref_number FROM booking 
											 WHERE ref_number='" . $my_reference . "'   LIMIT 1");
    $my_total_records_series = mysqli_num_rows($result_trans90);

    if ($my_total_records_series > 0) {

        $my_series_search = (float) $my_series_search + 1;

    } else {
        break;
    }

} while (true);

$page_reference_number = $my_reference;

$my_flag = 0;

if (!isset($_POST['voucher']) or $_POST['voucher'] == '') {
    $my_flag = 1;
}

if (isset($_POST['voucher']) and $my_flag == 0) {

    $result_trans90 = mysqli_query($db_connection, "SELECT voucher FROM booking 
    WHERE voucher='" . $_POST['voucher'] . "' LIMIT 1");
    $my_total_records_series = mysqli_num_rows($result_trans90);

    if ($my_total_records_series > 0) {
        echo "<script> alert('Voucher code already used!');
                                            </script>";



    } else {
        if ((float) $_POST['voucher'] >= 24001 and (float) $_POST['voucher'] <= 24100) {

            $my_flag = 1;
        } else {
            if ((float) $_POST['voucher'] >= 25011 and (float) $_POST['voucher'] <= 25111) {

                $my_flag = 1;
            } else {
                $my_flag = 0;
                echo "<script> alert('Invalid Voucher Code!!');
                                                  </script>";



            }

        }



    }



}


if ($my_flag == 1) {

    $query = "INSERT INTO booking SET ";


    if (isset($page_reference_number)) {
        $query .= "ref_number= '" . $page_reference_number . "', ";
    }
    if (isset($presentdate)) {
        $query .= "date= '" . $presentdate . "', ";
    }
    if (isset($_POST['first_name'])) {
        $query .= "first_name='" . $_POST['first_name'] . "', ";
    }
    if (isset($_POST['last_name'])) {
        $query .= "last_name='" . $_POST['last_name'] . "', ";
    }
    if (isset($_POST['message'])) {
        $query .= "message='" . $_POST['message'] . "', ";
    }
    if (isset($_POST['email'])) {
        $query .= "email= '" . $_POST['email'] . "', ";
    }
    if (isset($_POST['course'])) {
        $query .= "course='" . $_POST['course'] . "', ";
    }
    if (isset($_POST['contact'])) {
        $query .= "contact='" . $_POST['contact'] . "', ";
    }
    if (isset($_POST['voucher'])) {
        $query .= "voucher='" . $_POST['voucher'] . "', ";
    }
    if (isset($_POST['date_class'])) {
        $query .= "date_class='" . $_POST['date_class'] . "', ";
    }
    if (isset($_POST['time_class'])) {
        $query .= "time_class='" . $_POST['time_class'] . "' ";
    }
    $result = mysqli_query($conn, $query); //query executes


    $_SESSION['your_email'] = $_POST['email'];
    $_SESSION['customer'] = $_POST['first_name'] . ' ' . $_POST['last_name'];
    $_SESSION['contact'] = $_POST['contact'];
    $_SESSION['course'] = $_POST['course'];
    $_SESSION['message'] = $_POST['message'];


    //  include "../includes/send_email.php";


    if (isset($_POST['voucher'])) {

        // echo "<script>window.location = '../signup/success.php'</script>";
    } else {
        echo "<script> alert('Thank you for reaching out! We appreciate your interest and the time you`ve taken to connect with us. A Customer Sales Representative will reach out to you soon. 感谢您的购买。客户代表会立刻联系您。 ');
                                                                </script>";

    }
    echo "<script>window.location = '../signup/index.php'</script>";
} else {


    echo "<script>window.location = '../signup/'</script>";

}



?>