<?php
include "../connections/dbname.php";

$tablename = $database . ".`wt_courses`";
$sql = "SELECT * FROM $tablename ORDER BY `course_title_en` ASC";
$result = $conn->query($sql);
$result->data_seek(0); // reset pointer if already used in a loop
$courseDataArray = [];
while ($row = $result->fetch_assoc()) {
    $ref = $row['ref_num'];
    $courseDataArray[$ref] = $row;
}
?>
<?php include "../includes/header.php"; ?>

<head>
    <title>Course List</title>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

    <!-- JS libraries -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <style>
        .table-container {
            padding: 60px;
            margin-top: 8rem;
        }

        #courseTable {
            border-collapse: collapse;
        }

        h2 {
            font-family: 'Poppins', sans-serif;
            color: #0ca83e;
            text-align: center;
            font-weight: 900;
            border-radius: 8px;
        }

        /* Table header (th) styling */
        #courseTable thead th {
            background-color: #0ca83e;
            color: white;
            font-weight: bold;
            text-align: left;
            padding: 0.75rem;
        }

        /* Table body (td) styling */
        #courseTable tbody td {
            background-color: rgba(255, 176, 0, 0.25);
            color: black;
            padding: 0.75rem;
        }

        #courseTable th,
        #courseTable td {
            border: 1px solid grey;
        }

        @media screen and (max-width: 768px) {
            .table-container {
                padding: 20px;
            }
        }

        /* Modal Styles */
        .modal {
            display: none;
            position: fixed;
            z-index: 999;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            background: rgba(0, 0, 0, 0.5);
            justify-content: center;
            align-items: center;
        }

        .modal-content {
            background: #fff;
            padding: 2rem;
            border-radius: 8px;
            width: 90%;
            max-width: 600px;
            max-height: 90vh;
            overflow-y: auto;
            position: relative;
        }

        .modal-close {
            position: absolute;
            top: 10px;
            right: 15px;
            font-size: 1.5rem;
            cursor: pointer;
        }

        form label {
            display: block;
            margin: 0.5rem 0 0.25rem;
            font-weight: bold;
        }

        form input,
        form textarea {
            width: 100%;
            padding: 0.5rem;
            margin-bottom: 1rem;
            border: 1px solid #ccc;
            border-radius: 4px;
        }

        .button {
            display: inline-block;
            padding: 0.75rem 1.5rem;
            background-color: #ffb000;
            color: white !important;
            text-decoration: none;
            border-radius: 5px;
            font-weight: bold;
            border: none;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.5);
            cursor: pointer;
        }
    </style>
</head>

<body>
    <div class="table-container">
        <div style="display: flex; justify-content: space-between; margin-bottom:2rem;">
            <h2>Course List</h2>

            <div style="text-align: center;">
                <a class="button" id="openAdd">
                    Add Course
                </a>
            </div>
        </div>

        <table id="courseTable" class="display nowrap" style="width:100%;">
            <thead>
                <tr>
                    <th>Course Title</th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php $result->data_seek(0);
                    while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['course_title_en'] ?? '' ?></td>
                            <td>
                                <a class="button editCourse" data-refnum="<?= $row['ref_num'] ?>">
                                    Edit Info <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a class="button " data-refnum="<?= $row['ref_num'] ?>">
                                    Edit Activities <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a class="button " data-refnum="<?= $row['ref_num'] ?>">
                                    Edit Features <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a class="button " data-refnum="<?= $row['ref_num'] ?>">
                                    Edit Learning Goals <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a class="button " data-refnum="<?= $row['ref_num'] ?>">
                                    Edit Materials <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a class="button " data-refnum="<?= $row['ref_num'] ?>">
                                    Edit Teachers <i class="fas fa-edit"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No courses found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div id="courseModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('courseModal')">&times;</span>
            <h2>Add Course</h2>
            <form id="quoteForm">
                <label for="addCourseTitleEN">Course Title EN</label>
                <textarea id="addCourseTitleEN" name="addCourseTitleEN" required></textarea>

                <label for="addCourseTitleCN">Course Title CN</label>
                <textarea id="addCourseTitleCN" name="addCourseTitleCN"></textarea>

                <label for="addCourseShortTitleEN">Course Short Title EN</label>
                <textarea id="addCourseShortTitleEN" name="addCourseShortTitleEN"></textarea>

                <label for="addCourseShortTitleCN">Course Short Title CN</label>
                <textarea id="addCourseShortTitleCN" name="addCourseShortTitleCN"></textarea>

                <label for="addCourseSubtitleEN">Course Subtitle EN</label>
                <textarea id="addCourseSubtitleEN" name="addCourseSubtitleEN"></textarea>

                <label for="addCourseSubtitleCN">Course Subtitle CN</label>
                <textarea id="addCourseSubtitleCN" name="addCourseSubtitleCN"></textarea>

                <label for="addCourseDescriptionEN">Course Description EN</label>
                <textarea id="addCourseDescriptionEN" name="addCourseDescriptionEN"></textarea>

                <label for="addCourseDescriptionCN">Course Description CN</label>
                <textarea id="addCourseDescriptionCN" name="addCourseDescriptionCN"></textarea>

                <label>Thumbnail Tag EN</label>
                <input id="addThumbnailTagEN" type="text" name="addThumbnailTagEN">

                <label>Thumbnail Tag CN</label>
                <input id="addThumbnailTagCN" type="text" name="addThumbnailTagCN">

                <label for="addSuitableForEN">Suitable For EN</label>
                <textarea id="addSuitableForEN" name="addSuitableForEN"></textarea>

                <label for="addSuitableForCN">Suitable For CN</label>
                <textarea id="addSuitableForCN" name="addSuitableForCN"></textarea>

                <label>Course Start Date EN</label>
                <input id="addCourseStartDateEN" type="text" name="addCourseStartDateEN">

                <label>Course Start Date CN</label>
                <input id="addCourseStartDateCN" type="text" name="addCourseStartDateCN">

                <label>Class Hours EN</label>
                <input id="addClassHoursEN" type="text" name="addClassHoursEN">

                <label>Class Hours CN</label>
                <input id="addClassHoursCN" type="text" name="addClassHoursCN">

                <label>Age Group</label>
                <input id="addAgeGroup" type="text" name="addAgeGroup">

                <label>Language</label>
                <input id="addLanguage" type="text" name="addLanguage">

                <label>Course Package</label>
                <input id="addCoursePackage" type="text" name="addCoursePackage">

                <label>Course Type</label>
                <input id="addCourseType" type="text" name="addCourseType">

                <button class="button" type="submit">Submit</button>
            </form>
            <div id="quoteResult"></div>
        </div>
    </div>

    <div id="editCourseModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('editCourseModal')">&times;</span>
            <h2>Edit Course</h2>
            <form id="editCourseForm">
                <input id="editCourseRefNum" type="hidden" name="ref_num" required>

                <label for="editCourseTitleEN">Course Title EN</label>
                <textarea id="editCourseTitleEN" name="editCourseTitleEN" required></textarea>

                <label for="editCourseTitleCN">Course Title CN</label>
                <textarea id="editCourseTitleCN" name="editCourseTitleCN"></textarea>

                <label for="editCourseShortTitleEN">Course Short Title EN</label>
                <textarea id="editCourseShortTitleEN" name="editCourseShortTitleEN"></textarea>

                <label for="editCourseShortTitleCN">Course Short Title CN</label>
                <textarea id="editCourseShortTitleCN" name="editCourseShortTitleCN"></textarea>

                <label for="editCourseSubtitleEN">Course Subtitle EN</label>
                <textarea id="editCourseSubtitleEN" name="editCourseSubtitleEN"></textarea>

                <label for="editCourseSubtitleCN">Course Subtitle CN</label>
                <textarea id="editCourseSubtitleCN" name="editCourseSubtitleCN"></textarea>

                <label for="editCourseDescriptionEN">Course Description EN</label>
                <textarea id="editCourseDescriptionEN" name="editCourseDescriptionEN"></textarea>

                <label for="editCourseDescriptionCN">Course Description CN</label>
                <textarea id="editCourseDescriptionCN" name="editCourseDescriptionCN"></textarea>

                <label>Thumbnail Tag EN</label>
                <input id="editThumbnailTagEN" type="text" name="editThumbnailTagEN">

                <label>Thumbnail Tag CN</label>
                <input id="editThumbnailTagCN" type="text" name="editThumbnailTagCN">

                <label for="editSuitableForEN">Suitable For EN</label>
                <textarea id="editSuitableForEN" name="editSuitableForEN"></textarea>

                <label for="editSuitableForCN">Suitable For CN</label>
                <textarea id="editSuitableForCN" name="editSuitableForCN"></textarea>

                <label>Course Start Date EN</label>
                <input id="editCourseStartDateEN" type="text" name="editCourseStartDateEN">

                <label>Course Start Date CN</label>
                <input id="editCourseStartDateCN" type="text" name="editCourseStartDateCN">

                <label>Class Hours EN</label>
                <input id="editClassHoursEN" type="text" name="editClassHoursEN">

                <label>Class Hours CN</label>
                <input id="editClassHoursCN" type="text" name="editClassHoursCN">

                <label>Age Group</label>
                <input id="editAgeGroup" type="text" name="editAgeGroup">

                <label>Language</label>
                <input id="editLanguage" type="text" name="editLanguage">

                <label>Course Package</label>
                <input id="editCoursePackage" type="text" name="editCoursePackage">

                <label>Course Type</label>
                <input id="editCourseType" type="text" name="editCourseType">

                <button class="button" type="submit">Submit</button>
            </form>
            <div id="editCourseResult"></div>
        </div>
    </div>

    <script>
        //pass php courses array object into js
        const courseData = <?= json_encode($courseDataArray, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;

        $(document).ready(function () {
            $('#courseTable').DataTable({
                responsive: true,
                columnDefs: [
                    {
                        targets: function (idx) {
                            return idx !== 0;
                        },      //target everything except first column which is 0
                        searchable: false,
                        orderable: false,
                        width: '10px'
                    }
                ]
            });

            document.getElementById('openAdd').addEventListener('click', () => {
                document.getElementById('courseModal').style.display = 'flex';
            });

            document.querySelectorAll('.editCourse').forEach((editButton) => {
                editButton.addEventListener('click', () => {
                    //fetch course details and display them
                    const ref = editButton.dataset.refnum;
                    const row = courseData[ref];
                    if (!row) return alert('Course data not found.');

                    document.getElementById('editCourseModal').style.display = 'flex';
                    document.getElementById('editCourseTitleEN').value = row.course_title_en || '';
                    document.getElementById('editCourseTitleCN').value = row.course_title_cn || '';

                    document.getElementById('editCourseShortTitleEN').value = row.course_short_title_en || '';
                    document.getElementById('editCourseShortTitleCN').value = row.course_short_title_cn || '';

                    document.getElementById('editCourseSubtitleEN').value = row.course_subtitle_en || '';
                    document.getElementById('editCourseSubtitleCN').value = row.course_subtitle_cn || '';

                    document.getElementById('editCourseDescriptionEN').value = row.course_description_en || '';
                    document.getElementById('editCourseDescriptionCN').value = row.course_description_cn || '';

                    document.getElementById('editThumbnailTagEN').value = row.thumbnail_tag_en || '';
                    document.getElementById('editThumbnailTagCN').value = row.thumbnail_tag_cn || '';

                    document.getElementById('editSuitableForEN').value = row.suitable_for_en || '';
                    document.getElementById('editSuitableForCN').value = row.suitable_for_cn || '';

                    document.getElementById('editCourseStartDateEN').value = row.course_start_date_en || '';
                    document.getElementById('editCourseStartDateCN').value = row.course_start_date_cn || '';

                    document.getElementById('editClassHoursEN').value = row.class_hours_en || '';
                    document.getElementById('editClassHoursCN').value = row.class_hours_cn || '';

                    document.getElementById('editAgeGroup').value = row.age_group || '';
                    document.getElementById('editLanguage').value = row.language || '';
                    document.getElementById('editCoursePackage').value = row.course_package || '';
                    document.getElementById('editCourseType').value = row.course_type || '';
                });
            });
        });

        function closeModal(id) {
            document.getElementById(id).style.display = "none";
        }

        // Submit Add Quote Form
        document.getElementById('quoteForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const resultDiv = document.getElementById('quoteResult');

            const response = await fetch('../index/scripts/add-quote.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            const [status, message] = text.trim().split('|');

            if (status === 'success') {
                alert(' Quote added successfully! ');
                form.reset();
                closeModal('courseModal');
                location.reload();
            } else {
                // Clear previous errors
                document.getElementById('enError').textContent = '';
                document.getElementById('cnError').textContent = '';
                resultDiv.innerHTML = '';

                if (status === 'error') {
                    try {
                        const errors = JSON.parse(message); // `field` now contains JSON string
                        if (errors.en) document.getElementById('enError').textContent = errors.en;
                        if (errors.cn) document.getElementById('cnError').textContent = errors.cn;
                    } catch (e) {
                        resultDiv.innerHTML = "<p style='color:red;'>" + field + "</p>";
                    }
                } else {
                    resultDiv.innerHTML = "<p style='color:red;'>" + msg + "</p>";
                }
            }
        });

        // Submit Edit Quote Form
        document.getElementById('editCourseForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const resultDiv = document.getElementById('editCourseResult');

            const response = await fetch('../index/scripts/edit-quote.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            const [status, message] = text.trim().split('|');

            if (status === 'success') {
                alert(' Quote edited successfully! ');
                form.reset();
                closeModal('editCourseModal');
                location.reload();
            } else {
                alert('Failed to edit ');
                // Clear previous errors
                document.getElementById('editENError').textContent = '';
                document.getElementById('editCNError').textContent = '';
                resultDiv.innerHTML = '';

                if (status === 'error') {
                    try {
                        const errors = JSON.parse(message); // `field` now contains JSON string
                        if (errors.en) document.getElementById('editENError').textContent = errors.en;
                        if (errors.cn) document.getElementById('editCNError').textContent = errors.cn;
                    } catch (e) {
                        resultDiv.innerHTML = "<p style='color:red;'>" + e + "</p>";
                    }
                } else {
                    resultDiv.innerHTML = "<p style='color:red;'>" + status + "</p>";
                }
            }
        });

        // Close modal when clicking outside the modal content
        window.addEventListener('click', function (event) {
            const courseModal = document.getElementById('courseModal');
            const editCourseModal = document.getElementById('editCourseModal');

            if (event.target === courseModal) {
                courseModal.style.display = "none";
            }
            if (event.target === editCourseModal) {
                editCourseModal.style.display = "none";
            }
        });

    </script>
</body>

<?php //include "../includes/footer.php"; ?>