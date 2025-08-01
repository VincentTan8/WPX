<?php
if (!isset($_SESSION)) {
    session_start();
    ob_start();
}
?>

<style>
    .thumbnail_teacher {
        width: 300px;
        /* Set the desired width */
        height: 300px;
        /* Set the desired height */
        object-fit: cover;
        /* Ensure the image covers the dimensions without stretching */
        border: 2px solid #DBEBFF;
        background-color: #E3F0FF;
        border-radius: 25px;



    }

    .thumbnail_teacher.bg-color-1 {
        background-color: #E3F0FF;
        /* First background color */
    }

    .thumbnail_teacher.bg-color-2 {
        background-color: #FFECB3;
        /* Second background color */
    }

    .thumbnail_teacher.bg-color-3 {
        background-color: #D9F2E5;
        /* Third background color */
    }

    .thumbnail_teacher.bg-color-4 {
        background-color: #E2E6FA;
        /* Fourth background color */
    }

    @media (min-width: 768px) {
        #teacherCarousel {
            display: none;
        }
    }

    /* Hide grid on small screens */
    @media (max-width: 767px) {
        #teacherGrid {
            display: none;
        }
    }

    .thumbnail_teacher {
        width: 250px;
        height: 250px;
        object-fit: cover;
        border-radius: 15px;
        margin: 0 auto;
    }
</style>

<?php
$where = " WHERE UPPER(category)='" . $category . "'";
if ($category == '') {
    $where = '';
}

$query = "SELECT * FROM teachers " . $where;
$result = mysqli_query($db_connection, $query);

$bg_classes = ['bg-color-1', 'bg-color-2', 'bg-color-3', 'bg-color-4'];
$index = 0;
?>

<div id="teacherGrid" class="scrollable-teacher-section">
    <div class="column-container">
        <?php
        mysqli_data_seek($result, 0);
        while ($row = mysqli_fetch_array($result)) {
            $bg_class = $bg_classes[$index % 4];
            $index++;
            echo '<div class="column-item_teacher">
                    <a href="../teacher-info/main.php?id=' . $row['id'] . '" target="_blank">
                        <div class="thumbnail-container">
                            <img class="thumbnail thumbnail_teacher ' . $bg_class . '" src="../teacher/img/thumbnails/' . $row['thumbnails'] . '">
                        </div>
                        <p class="text-capitalize menu-heading mb-10">' . $row['fullname' . $lang] . '</p>
                        <p class="mb-4">' . str_replace(",", " / ", $row['label_details' . $lang]) . '</p>
                    </a>
                  </div>';
        }
        ?>
    </div>
</div>

<div id="teacherCarousel" class="carousel slide" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
        <?php
        mysqli_data_seek($result, 0);
        $index = 0;
        // Count total slides to generate indicators
        $total_slides = 0;
        while ($row = mysqli_fetch_array($result)) {
            $total_slides++;
        }
        // Reset result pointer after counting
        mysqli_data_seek($result, 0);
        for ($i = 0; $i < $total_slides; $i++) {
            $active_class = ($i === 0) ? ' class="active"' : '';
            echo '<li data-target="#teacherCarousel" data-slide-to="' . $i . '"' . $active_class . '></li>';
        }
        ?>
    </ol>

    <div class="carousel-inner"
        style=" box-shadow:0 0 10px rgba(0, 0, 0, 0.1); border:1px solid #ddd; padding:20px;  height:55vh;">
        <?php
        mysqli_data_seek($result, 0);
        $index = 0;
        while ($row = mysqli_fetch_array($result)) {
            $active = ($index === 0) ? 'active' : '';
            $bg_class = $bg_classes[$index % 4];
            $index++;
            echo '<div class="carousel-item ' . $active . '" >
                    <a href="../teacher-info/main.php?id=' . $row['id'] . '" target="_blank">
                        <img class="thumbnail_teacher d-block" src="../teacher/img/thumbnails/' . $row['thumbnails'] . '">
                        <div class="carousel-caption" style=" right:0px; left:0px; bottom:0px; position:relative;" >
                            <h5>' . $row['fullname' . $lang] . '</h5>
                            <p>' . str_replace(",", " / ", $row['label_details' . $lang]) . '</p>
                        </div>
                    </a>
                  </div>';
        }
        ?>
    </div>


</div>