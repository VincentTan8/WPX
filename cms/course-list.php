<?php
include "../connections/dbname.php";

function getActvities($conn, $database, $ref_num)
{
    $tablename = $database . ".`wt_course_activities`";
    $sql = "SELECT * FROM $tablename WHERE `courses_ref_num` = '$ref_num'";
    $result = $conn->query($sql);
    $activityArray = [];
    while ($row = $result->fetch_assoc()) {
        $ref = $row['ref_num'];
        $activityArray[$ref] = $row;
    }
    return $activityArray;
}

function getFeatures($conn, $database, $ref_num)
{
    $tablename = $database . ".`wt_course_features`";
    $sql = "SELECT * FROM $tablename WHERE `courses_ref_num` = '$ref_num'";
    $result = $conn->query($sql);
    $featureArray = [];
    while ($row = $result->fetch_assoc()) {
        $ref = $row['ref_num'];
        $featureArray[$ref] = $row;
    }
    return $featureArray;
}

function getLearningGoals($conn, $database, $ref_num)
{
    $tablename = $database . ".`wt_course_learning_goals`";
    $sql = "SELECT * FROM $tablename WHERE `courses_ref_num` = '$ref_num'";
    $result = $conn->query($sql);
    $learningGoalArray = [];
    while ($row = $result->fetch_assoc()) {
        $ref = $row['ref_num'];
        $learningGoalArray[$ref] = $row;
    }
    return $learningGoalArray;
}

function getMaterials($conn, $database, $ref_num)
{
    $tablename = $database . ".`wt_course_materials`";
    $sql = "SELECT * FROM $tablename WHERE `courses_ref_num` = '$ref_num'";
    $result = $conn->query($sql);
    $materialArray = [];
    while ($row = $result->fetch_assoc()) {
        $ref = $row['ref_num'];
        $materialArray[$ref] = $row;
    }
    return $materialArray;
}

function getTeachers($conn, $database, $ref_num)
{
    $tablename = $database . ".`wt_course_teachers`";
    $sql = "SELECT * FROM $tablename WHERE `courses_ref_num` = '$ref_num'";
    $result = $conn->query($sql);
    $teacherArray = [];
    while ($row = $result->fetch_assoc()) {
        $ref = $row['ref_num'];
        $teacherArray[$ref] = $row;
    }
    return $teacherArray;
}

$tablename = $database . ".`wt_courses`";
$sql = "SELECT * FROM $tablename ORDER BY `course_title_en` ASC";  //limit this next time
$result = $conn->query($sql);
$result->data_seek(0); // reset pointer if already used in a loop
$courseDataArray = [];
while ($row = $result->fetch_assoc()) {
    $ref = $row['ref_num'];
    $courseDataArray[$ref] = $row;
    $courseDataArray[$ref]['activities'] = getActvities($conn, $database, $ref);
    $courseDataArray[$ref]['features'] = getFeatures($conn, $database, $ref);
    $courseDataArray[$ref]['learningGoals'] = getLearningGoals($conn, $database, $ref);
    $courseDataArray[$ref]['materials'] = getMaterials($conn, $database, $ref);
    $courseDataArray[$ref]['teachers'] = getTeachers($conn, $database, $ref);
}
?>
<?php include "../includes/header.php"; ?>

<head>
    <title>Course List</title>

    <link rel="stylesheet" href="../course/styles/course.css">

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

    <!-- JS libraries -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>
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
                                    Edit <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a class="button deleteCourse" data-refnum="<?= $row['ref_num'] ?>">
                                    Delete <i class="fas fa-trash"></i>
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
    <div id="addCourseModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('addCourseModal')">&times;</span>
            <h2>Add Course</h2>
            <div class="formContainer" style="justify-content: center">
                <form id="addCourseForm" class="addForm">
                    <label for="addCourseTitleEN">Course Title</label>
                    <textarea id="addCourseTitleEN" name="addCourseTitleEN" required></textarea>
                    <div style="text-align: right">
                        <button class="button" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div id="addResult"></div>
        </div>
    </div>

    <div id="editCourseModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('editCourseModal')">&times;</span>
            <h2>Edit Course</h2>
            <div class="formContainer">
                <div id="stepNav" style="text-align:center;">
                    <button type="button" class="button step-label" onclick="goToTab(0)">General Info</button>
                    <button type="button" class="button step-label" onclick="goToTab(1)">Learning
                        Goals/Objectives</button>
                    <button type="button" class="button step-label" onclick="goToTab(2)">Activities</button>
                    <button type="button" class="button step-label" onclick="goToTab(3)">Features</button>
                    <button type="button" class="button step-label" onclick="goToTab(4)">Materials</button>
                    <button type="button" class="button step-label" onclick="goToTab(5)">Teachers</button>
                </div>

                <form id="editCourseForm" class="editForm">
                    <div class="tab">
                        <input id="editCourseRefNum" type="hidden" name="ref_num" required>

                        <label for="editCourseTitleEN">Course Title EN</label>
                        <textarea id="editCourseTitleEN" name="editCourseTitleEN" required></textarea>

                        <label>Age Group</label>
                        <input id="editAgeGroup" type="text" name="editAgeGroup">

                        <label>Language</label>
                        <input id="editLanguage" type="text" name="editLanguage">

                        <label>Course Package</label>
                        <input id="editCoursePackage" type="text" name="editCoursePackage">

                        <label>Course Type</label>
                        <input id="editCourseType" type="text" name="editCourseType">

                        <label for="editCourseShortTitleEN">Course Short Title EN</label>
                        <textarea id="editCourseShortTitleEN" name="editCourseShortTitleEN"></textarea>

                        <label for="editCourseSubtitleEN">Course Subtitle EN</label>
                        <textarea id="editCourseSubtitleEN" name="editCourseSubtitleEN"></textarea>

                        <label for="editCourseDescriptionEN">Course Description EN</label>
                        <textarea id="editCourseDescriptionEN" name="editCourseDescriptionEN"></textarea>

                        <label>Course Image</label>
                        <div style="display: inline-flex; gap: 1rem;">
                            <input id="editCourseImg" type="file" name="editCourseImg">
                            <span id="courseImgName"></span>
                        </div>

                        <label>Course List Image</label>
                        <div style="display: inline-flex; gap: 1rem;">
                            <input id="editCourseListImg" type="file" name="editCourseListImg">
                            <span id="courseListImgName"></span>
                        </div>

                        <label>Thumbnail Tag EN</label>
                        <input id="editThumbnailTagEN" type="text" name="editThumbnailTagEN">

                        <label for="editSuitableForEN">Suitable For EN</label>
                        <textarea id="editSuitableForEN" name="editSuitableForEN"></textarea>

                        <label>Course Start Date EN</label>
                        <input id="editCourseStartDateEN" type="text" name="editCourseStartDateEN">

                        <label>Class Hours EN</label>
                        <input id="editClassHoursEN" type="text" name="editClassHoursEN">
                    </div>

                    <div class="tab">

                    </div>

                    <div class="tab">

                    </div>

                    <div class="tab">

                    </div>

                    <div class="tab">

                    </div>

                    <div class="tab">

                    </div>

                    <div style="float:right;">
                        <button class="button" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button class="button" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                    </div>
                </form>
            </div>
            <div id="editCourseResult"></div>
        </div>
    </div>

    <div id="deleteCourseModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('deleteCourseModal')">&times;</span>
            <h2>Delete Course</h2>
            <h4>Are you sure you want to delete this course?</h4>
            <div style="display: flex; padding-top: 1rem; justify-content: center;">
                <form id="deleteCourseForm">
                    <input id="deleteCourseRefNum" type="hidden" name="ref_num" required>
                    <button class="button" type="submit">Confirm</button>
                </form>
            </div>
        </div>
    </div>

    <!-- only cn left to get from here -->
    <!-- <div id="editCourseModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('editCourseModal')">&times;</span>
            <h2>Edit Course</h2>
            <form id="editCourseForm">
                <input id="editCourseRefNum" type="hidden" name="ref_num" required>

                <label for="editCourseTitleEN">Course Title EN</label>
                <textarea id="editCourseTitleEN" name="editCourseTitleEN" required></textarea>

                <label>Age Group</label>
                <input id="editAgeGroup" type="text" name="editAgeGroup">

                <label>Language</label>
                <input id="editLanguage" type="text" name="editLanguage">

                <label>Course Package</label>
                <input id="editCoursePackage" type="text" name="editCoursePackage">

                <label>Course Type</label>
                <input id="editCourseType" type="text" name="editCourseType">

                <label for="editCourseShortTitleEN">Course Short Title EN</label>
                <textarea id="editCourseShortTitleEN" name="editCourseShortTitleEN"></textarea>

                <label for="editCourseSubtitleEN">Course Subtitle EN</label>
                <textarea id="editCourseSubtitleEN" name="editCourseSubtitleEN"></textarea>

                <label for="editCourseDescriptionEN">Course Description EN</label>
                <textarea id="editCourseDescriptionEN" name="editCourseDescriptionEN"></textarea>

                <label>Course Image</label>
                <div style="display: inline-flex; gap: 1rem;">
                    <input id="editCourseImg" type="file" name="editCourseImg">
                    <span id="courseImgName"></span>
                </div>

                <label>Course List Image</label>
                <div style="display: inline-flex; gap: 1rem;">
                    <input id="editCourseListImg" type="file" name="editCourseListImg">
                    <span id="courseListImgName"></span>
                </div>

                <label>Thumbnail Tag EN</label>
                <input id="editThumbnailTagEN" type="text" name="editThumbnailTagEN">

                <label for="editSuitableForEN">Suitable For EN</label>
                <textarea id="editSuitableForEN" name="editSuitableForEN"></textarea>

                <label>Course Start Date EN</label>
                <input id="editCourseStartDateEN" type="text" name="editCourseStartDateEN">

                <label>Class Hours EN</label>
                <input id="editClassHoursEN" type="text" name="editClassHoursEN">

                <label for="editCourseTitleCN">Course Title CN</label>
                <textarea id="editCourseTitleCN" name="editCourseTitleCN"></textarea>

                <label for="editCourseShortTitleCN">Course Short Title CN</label>
                <textarea id="editCourseShortTitleCN" name="editCourseShortTitleCN"></textarea>

                <label for="editCourseSubtitleCN">Course Subtitle CN</label>
                <textarea id="editCourseSubtitleCN" name="editCourseSubtitleCN"></textarea>

                <label for="editCourseDescriptionCN">Course Description CN</label>
                <textarea id="editCourseDescriptionCN" name="editCourseDescriptionCN"></textarea>

                <label>Thumbnail Tag CN</label>
                <input id="editThumbnailTagCN" type="text" name="editThumbnailTagCN">

                <label for="editSuitableForCN">Suitable For CN</label>
                <textarea id="editSuitableForCN" name="editSuitableForCN"></textarea>

                <label>Course Start Date CN</label>
                <input id="editCourseStartDateCN" type="text" name="editCourseStartDateCN">

                <label>Class Hours CN</label>
                <input id="editClassHoursCN" type="text" name="editClassHoursCN">

                <button class="button" type="submit">Submit</button>
            </form>
            <div id="editCourseResult"></div>
        </div>
    </div> -->

    <div id="editActivitiesModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('editActivitiesModal')">&times;</span>
            <h2>Edit Activities</h2>
            <div id="editActivitiesFormContainer">
                <form id="editActivitiesForm">
                </form>
            </div>
            <div id="editActivitiesResult"></div>
        </div>
    </div>

    <div id="editFeaturesModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('editFeaturesModal')">&times;</span>
            <h2>Edit Features</h2>
            <div id="editFeaturesFormContainer">
                <form id="editFeaturesForm">
                </form>
            </div>
            <div id="editFeaturesResult"></div>
        </div>
    </div>

    <div id="editLearningGoalsModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('editLearningGoalsModal')">&times;</span>
            <h2>Edit Learning Goals</h2>
            <div id="editLearningGoalsFormContainer">
                <form id="editLearningGoalsForm">
                </form>
            </div>
            <div id="editLearningGoalsResult"></div>
        </div>
    </div>

    <div id="editMaterialsModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('editMaterialsModal')">&times;</span>
            <h2>Edit Materials</h2>
            <div id="editMaterialsFormContainer">
                <form id="editMaterialsForm">
                </form>
            </div>
            <div id="editMaterialsResult"></div>
        </div>
    </div>

    <div id="editTeachersModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('editTeachersModal')">&times;</span>
            <h2>Edit Teachers</h2>
            <div id="editTeachersFormContainer">
                <form id="editTeachersForm">
                </form>
            </div>
            <div id="editTeachersResult"></div>
        </div>
    </div>

    <script>
        //pass php courses array object into js
        const courseData = <?= json_encode($courseDataArray, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;

        // START Multipage Form JS
        var currentTab = 0; // Current tab is set to be the first tab (0)
        showTab(currentTab); // Display the current tab

        function showTab(n) {
            // This function will display the specified tab of the form...
            var x = document.getElementsByClassName("tab");
            x[n].style.display = "block";
            //... and fix the Previous/Next buttons:
            if (n == 0) {
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("prevBtn").style.display = "inline";
            }
            if (n == (x.length - 1)) {
                document.getElementById("nextBtn").innerHTML = "Submit";
                //do not put the type=submit here or else form will get submitted a tab too early
            } else {
                document.getElementById("nextBtn").innerHTML = "Next";
                document.getElementById("nextBtn").type = "button";
            }
            //... and run a function that will display the correct step indicator:
            fixStepIndicator(n)
        }

        function nextPrev(n) {
            // This function will figure out which tab to display
            var x = document.getElementsByClassName("tab");
            // Exit the function if any field in the current tab is invalid:
            // if (n == 1 && !validateForm()) return false;
            // Hide the current tab:
            x[currentTab].style.display = "none";
            // Increase or decrease the current tab by 1:
            currentTab = currentTab + n;
            // if you have reached the end of the form...
            if (currentTab >= x.length) {
                // ... the form gets submitted
                document.getElementById("nextBtn").type = "submit";
                // Submit event is overriden in this file below
                return false;
            }
            // Otherwise, display the correct tab:
            showTab(currentTab);
        }

        function goToTab(n) {
            var x = document.getElementsByClassName("tab");
            // Optional: validate current tab before jumping
            // if (!validateForm()) return;

            // Hide current tab
            x[currentTab].style.display = "none";
            currentTab = n;
            showTab(currentTab);
        }

        function validateForm() {
            // This function deals with validation of the form fields
            // var x, y, i, valid = true;
            // x = document.getElementsByClassName("tab");
            // y = x[currentTab].getElementsByTagName("input");
            // // A loop that checks every input field in the current tab:
            // for (i = 0; i < y.length; i++) {
            //     // If a field is empty...
            //     if (y[i].value == "") {
            //         // add an "invalid" class to the field:
            //         y[i].className += " invalid";
            //         // and set the current valid status to false
            //         valid = false;
            //     }
            // }
            // // If the valid status is true, mark the step as finished and valid:
            // if (valid) {
            //     document.getElementsByClassName("step")[currentTab].className += " finish";
            // }
            // return valid; // return the valid status
        }

        function fixStepIndicator(n) {
            var i, x = document.getElementsByClassName("step-label");
            for (i = 0; i < x.length; i++) {
                x[i].classList.remove("active");
            }
            x[n].classList.add("active");
        }
        // END Mutipage Form JS

        $(document).ready(function () {
            $('#courseTable').DataTable({
                responsive: true,
                columnDefs: [
                    {
                        targets: [1, 2],
                        searchable: false,
                        orderable: false,
                        width: "10px"
                    },
                    {
                        targets: 0,
                        searchable: true,
                        orderable: true,
                        createdCell: function (td, cellData, rowData, row, col) {
                            td.title = cellData;
                        }
                    }
                ]
            });

            //Open Add Course
            document.getElementById('openAdd').addEventListener('click', () => {
                showModal('addCourseModal');
                document.getElementById("addCourseTitleEN").focus();
            });

            //Open Edit Course Info
            document.querySelectorAll('.editCourse').forEach((editButton) => {
                editButton.addEventListener('click', () => {
                    //fetch course details and display them
                    const ref = editButton.dataset.refnum;
                    const row = courseData[ref];
                    if (!row) return alert('Course data not found.');

                    document.getElementById('editCourseRefNum').value = ref;

                    document.getElementById('editCourseTitleEN').value = row.course_title_en || '';
                    // document.getElementById('editCourseTitleCN').value = row.course_title_cn || '';

                    document.getElementById('editCourseShortTitleEN').value = row.course_short_title_en || '';
                    // document.getElementById('editCourseShortTitleCN').value = row.course_short_title_cn || '';

                    document.getElementById('editCourseSubtitleEN').value = row.course_subtitle_en || '';
                    // document.getElementById('editCourseSubtitleCN').value = row.course_subtitle_cn || '';

                    document.getElementById('editCourseDescriptionEN').value = row.course_description_en || '';
                    // document.getElementById('editCourseDescriptionCN').value = row.course_description_cn || '';

                    document.getElementById('courseImgName').textContent = row.course_img || '';
                    document.getElementById('courseListImgName').textContent = row.course_list_img || '';

                    document.getElementById('editThumbnailTagEN').value = row.thumbnail_tag_en || '';
                    // document.getElementById('editThumbnailTagCN').value = row.thumbnail_tag_cn || '';

                    document.getElementById('editSuitableForEN').value = row.suitable_for_en || '';
                    // document.getElementById('editSuitableForCN').value = row.suitable_for_cn || '';

                    document.getElementById('editCourseStartDateEN').value = row.course_start_date_en || '';
                    // document.getElementById('editCourseStartDateCN').value = row.course_start_date_cn || '';

                    document.getElementById('editClassHoursEN').value = row.class_hours_en || '';
                    // document.getElementById('editClassHoursCN').value = row.class_hours_cn || '';

                    document.getElementById('editAgeGroup').value = row.age_group || '';
                    document.getElementById('editLanguage').value = row.language || '';
                    document.getElementById('editCoursePackage').value = row.course_package || '';
                    document.getElementById('editCourseType').value = row.course_type || '';

                    showModal('editCourseModal');
                });
            });

            //Open Delete Course
            document.querySelectorAll('.deleteCourse').forEach((deleteButton) => {
                deleteButton.addEventListener('click', () => {
                    const ref = deleteButton.dataset.refnum;
                    document.getElementById('deleteCourseRefNum').value = ref;
                    showModal('deleteCourseModal');
                });
            });

            //Open Edit Activities
            // document.querySelectorAll('.editActivities').forEach((editActivityButton) => {
            //     editActivityButton.addEventListener('click', () => {
            //         const activitiesForm = document.getElementById('editActivitiesForm');
            //         const ref = editActivityButton.dataset.refnum;
            //         const rows = courseData[ref]['activities'];  //list of activities

            //         //reset index form
            //         let activityIndex = 1;
            //         activitiesForm.innerHTML = `
            //             <input type="hidden" name="courses_ref_num" value="${ref}" required>
            //             <a class="button addActivities">
            //                 Add Activities <i class="fas fa-plus"></i>
            //             </a>
            //             <button class="button" type="submit">Submit</button>
            //         `;
            //         const addActivitiesButton = activitiesForm.querySelector('.addActivities');

            //         //Clear previous activity blocks
            //         document.querySelectorAll('.activity-block').forEach((block) => {
            //             block.remove();
            //         });

            //         function createActivityBlock(index, row = null) {
            //             const wrapper = document.createElement('div');
            //             wrapper.className = 'activity-block';
            //             wrapper.dataset.index = index;

            //             wrapper.innerHTML = `
            //                 <input type="hidden" name="ref_num[]" value="${row?.ref_num || ''}" required>

            //                 <label>Activity EN</label>
            //                 <textarea name="editActivityEN[]">${row?.activity_en || ''}</textarea>

            //                 <label>Activity CN</label>
            //                 <textarea name="editActivityCN[]">${row?.activity_cn || ''}</textarea>

            //                 <button type="button" class="button remove-activity">Remove</button>
            //             `;
            //             // Add remove logic
            //             wrapper.querySelector('.remove-activity').addEventListener('click', function () {
            //                 wrapper.remove();
            //             });
            //             return wrapper;
            //         }

            //         Object.values(rows).forEach(row => {
            //             activitiesForm.insertBefore(createActivityBlock(activityIndex++, row), addActivitiesButton);
            //         });

            //         // Handle + Add Activity button
            //         addActivitiesButton.addEventListener('click', function () {
            //             activitiesForm.insertBefore(createActivityBlock(activityIndex++), addActivitiesButton);
            //         });

            //         showModal('editActivitiesModal');
            //     });
            // });

            //Open Edit Features 
            // document.querySelectorAll('.editFeatures').forEach((editFeatureButton) => {
            //     editFeatureButton.addEventListener('click', () => {
            //         const featuresForm = document.getElementById('editFeaturesForm');
            //         const ref = editFeatureButton.dataset.refnum;
            //         const rows = courseData[ref]['features'];  //list of features

            //         //reset index form
            //         let featureIndex = 1;
            //         featuresForm.innerHTML = `
            //             <input type="hidden" name="courses_ref_num" value="${ref}" required>
            //             <a class="button addFeatures">
            //                 Add Features <i class="fas fa-plus"></i>
            //             </a>
            //             <button class="button" type="submit">Submit</button>
            //         `;
            //         const addFeaturesButton = featuresForm.querySelector('.addFeatures');

            //         //Clear previous feature blocks
            //         document.querySelectorAll('.feature-block').forEach((block) => {
            //             block.remove();
            //         });

            //         function createFeatureBlock(index, row = null) {
            //             const wrapper = document.createElement('div');
            //             wrapper.className = 'feature-block';
            //             wrapper.dataset.index = index;

            //             wrapper.innerHTML = `
            //                 <input type="hidden" name="ref_num[]" value="${row?.ref_num || ''}" required>

            //                 <label>Feature Bold EN</label>
            //                 <textarea name="editFeatureBoldEN[]">${row?.feature_bold_en || ''}</textarea>

            //                 <label>Feature Bold CN</label>
            //                 <textarea name="editFeatureBoldCN[]">${row?.feature_bold_cn || ''}</textarea>

            //                 <label>Feature EN</label>
            //                 <textarea name="editFeatureEN[]">${row?.feature_en || ''}</textarea>

            //                 <label>Feature CN</label>
            //                 <textarea name="editFeatureCN[]">${row?.feature_cn || ''}</textarea>

            //                 <button type="button" class="button remove-feature">Remove</button>
            //             `;
            //             // Add remove logic
            //             wrapper.querySelector('.remove-feature').addEventListener('click', function () {
            //                 wrapper.remove();
            //             });
            //             return wrapper;
            //         }

            //         Object.values(rows).forEach(row => {
            //             featuresForm.insertBefore(createFeatureBlock(featureIndex++, row), addFeaturesButton);
            //         });

            //         // Handle + Add Feature button
            //         addFeaturesButton.addEventListener('click', function () {
            //             featuresForm.insertBefore(createFeatureBlock(featureIndex++), addFeaturesButton);
            //         });

            //         // For debugging
            //         // featuresForm.addEventListener('submit', function (e) {
            //         //     e.preventDefault();
            //         //     const formData = new FormData(featuresForm);

            //         //     const allData = {};
            //         //     for (const key of formData.keys()) {
            //         //         allData[key] = formData.getAll(key); // get *all* values
            //         //     }

            //         //     console.log(allData); // Full array data
            //         // });

            //         showModal('editFeaturesModal');
            //     });
            // });

            //Open Edit Learning Goals
            // document.querySelectorAll('.editLearningGoals').forEach((editLearningGoalButton) => {
            //     editLearningGoalButton.addEventListener('click', () => {
            //         const learningGoalsForm = document.getElementById('editLearningGoalsForm');
            //         const ref = editLearningGoalButton.dataset.refnum;
            //         const rows = courseData[ref]['learningGoals'];  //list of learning goals

            //         //reset index form
            //         let learningGoalIndex = 1;
            //         learningGoalsForm.innerHTML = `
            //             <input type="hidden" name="courses_ref_num" value="${ref}" required>
            //             <a class="button addLearningGoals">
            //                 Add Learning Goals <i class="fas fa-plus"></i>
            //             </a>
            //             <button class="button" type="submit">Submit</button>
            //         `;
            //         const addLearningGoalsButton = learningGoalsForm.querySelector('.addLearningGoals');

            //         //Clear previous learning goal blocks
            //         document.querySelectorAll('.learning-goal-block').forEach((block) => {
            //             block.remove();
            //         });

            //         function createLearningGoalBlock(index, row = null) {
            //             const wrapper = document.createElement('div');
            //             wrapper.className = 'learning-goal-block';
            //             wrapper.dataset.index = index;

            //             wrapper.innerHTML = `
            //                 <input type="hidden" name="ref_num[]" value="${row?.ref_num || ''}" required>

            //                 <label>Learning Goal EN</label>
            //                 <textarea name="editLearningGoalEN[]">${row?.learning_goal_en || ''}</textarea>

            //                 <label>Learning Goal CN</label>
            //                 <textarea name="editLearningGoalCN[]">${row?.learning_goal_cn || ''}</textarea>

            //                 <button type="button" class="button remove-learning-goal">Remove</button>
            //             `;
            //             // Add remove logic
            //             wrapper.querySelector('.remove-learning-goal').addEventListener('click', function () {
            //                 wrapper.remove();
            //             });
            //             return wrapper;
            //         }

            //         Object.values(rows).forEach(row => {
            //             learningGoalsForm.insertBefore(createLearningGoalBlock(learningGoalIndex++, row), addLearningGoalsButton);
            //         });

            //         // Handle + Add Learning Goal button
            //         addLearningGoalsButton.addEventListener('click', function () {
            //             learningGoalsForm.insertBefore(createLearningGoalBlock(learningGoalIndex++), addLearningGoalsButton);
            //         });

            //         showModal('editLearningGoalsModal');
            //     });
            // });

            //Open Edit Materials
            // document.querySelectorAll('.editMaterials').forEach((editMaterialButton) => {
            //     editMaterialButton.addEventListener('click', () => {
            //         const materialsForm = document.getElementById('editMaterialsForm');
            //         const ref = editMaterialButton.dataset.refnum;
            //         const rows = courseData[ref]['materials'];  //list of materials

            //         //reset index form
            //         let materialIndex = 1;
            //         materialsForm.innerHTML = `
            //             <input type="hidden" name="courses_ref_num" value="${ref}" required>
            //             <a class="button addMaterials">
            //                 Add Materials <i class="fas fa-plus"></i>
            //             </a>
            //             <button class="button" type="submit">Submit</button>
            //         `;
            //         const addMaterialsButton = materialsForm.querySelector('.addMaterials');

            //         //Clear previous material blocks
            //         document.querySelectorAll('.material-block').forEach((block) => {
            //             block.remove();
            //         });

            //         function createMaterialBlock(index, row = null) {
            //             const wrapper = document.createElement('div');
            //             wrapper.className = 'material-block';
            //             wrapper.dataset.index = index;

            //             wrapper.innerHTML = `
            //                 <input type="hidden" name="ref_num[]" value="${row?.ref_num || ''}" required>

            //                 <label>Material EN</label>
            //                 <textarea name="editMaterialEN[]">${row?.material_en || ''}</textarea>

            //                 <label>Material CN</label>
            //                 <textarea name="editMaterialCN[]">${row?.material_cn || ''}</textarea>

            //                 <button type="button" class="button remove-material">Remove</button>
            //             `;
            //             // Add remove logic
            //             wrapper.querySelector('.remove-material').addEventListener('click', function () {
            //                 wrapper.remove();
            //             });
            //             return wrapper;
            //         }

            //         Object.values(rows).forEach(row => {
            //             materialsForm.insertBefore(createMaterialBlock(materialIndex++, row), addMaterialsButton);
            //         });

            //         // Handle + Add Material button
            //         addMaterialsButton.addEventListener('click', function () {
            //             materialsForm.insertBefore(createMaterialBlock(materialIndex++), addMaterialsButton);
            //         });

            //         showModal('editMaterialsModal');
            //     });
            // });

            //Open Edit Teachers
            // document.querySelectorAll('.editTeachers').forEach((editTeacherButton) => {
            //     editTeacherButton.addEventListener('click', () => {
            //         const teachersForm = document.getElementById('editTeachersForm');
            //         const ref = editTeacherButton.dataset.refnum;
            //         const rows = courseData[ref]['teachers'];  //list of teachers

            //         //reset index form
            //         let teacherIndex = 1;
            //         teachersForm.innerHTML = `
            //             <input type="hidden" name="courses_ref_num" value="${ref}" required>
            //             <a class="button addTeachers">
            //                 Add Teachers <i class="fas fa-plus"></i>
            //             </a>
            //             <button class="button" type="submit">Submit</button>
            //         `;
            //         const addTeachersButton = teachersForm.querySelector('.addTeachers');

            //         //Clear previous teacher blocks
            //         document.querySelectorAll('.teacher-block').forEach((block) => {
            //             block.remove();
            //         });

            //         function createTeacherBlock(index, row = null) {
            //             const wrapper = document.createElement('div');
            //             wrapper.className = 'teacher-block';
            //             wrapper.dataset.index = index;

            //             wrapper.innerHTML = `
            //                 <input type="hidden" name="ref_num[]" value="${row?.ref_num || ''}" required>

            //                 <label>Teacher EN</label>
            //                 <textarea name="editTeacherEN[]">${row?.teacher_en || ''}</textarea>

            //                 <label>Teacher CN</label>
            //                 <textarea name="editTeacherCN[]">${row?.teacher_cn || ''}</textarea>

            //                 <button type="button" class="button remove-teacher">Remove</button>
            //             `;
            //             // Add remove logic
            //             wrapper.querySelector('.remove-teacher').addEventListener('click', function () {
            //                 wrapper.remove();
            //             });
            //             return wrapper;
            //         }

            //         Object.values(rows).forEach(row => {
            //             teachersForm.insertBefore(createTeacherBlock(teacherIndex++, row), addTeachersButton);
            //         });

            //         // Handle + Add Teacher button
            //         addTeachersButton.addEventListener('click', function () {
            //             teachersForm.insertBefore(createTeacherBlock(teacherIndex++), addTeachersButton);
            //         });

            //         showModal('editTeachersModal');
            //     });
            // });

        });

        function showModal(id) {
            document.getElementById(id).style.display = "flex";
        }

        function closeModal(id) {
            document.getElementById(id).style.display = "none";
        }

        // Submit Add Course Form
        document.getElementById('addCourseForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const resultDiv = document.getElementById('addResult');

            const response = await fetch('../course/scripts/add-course.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            const [status, message] = text.trim().split('|');

            if (status === 'success') {
                alert(' Course added successfully! ');
                form.reset();
                closeModal('addCourseModal');
                location.reload();
            } else {
                // Clear previous errors
                resultDiv.innerHTML = '';
                if (status === 'error') {
                    resultDiv.innerHTML = "<p style='color:red;'>" + message + "</p>";
                }
            }
        });

        // Submit Edit Course Form
        document.getElementById('editCourseForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const resultDiv = document.getElementById('editCourseResult');

            const response = await fetch('../course/scripts/edit-course.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            const [status, message] = text.trim().split('|');

            if (status === 'success') {
                alert(' Course edited successfully! ');
                form.reset();
                closeModal('editCourseModal');
                location.reload();
            } else {
                alert('Failed to edit ');
                // Clear previous errors
                resultDiv.innerHTML = '';
                if (status === 'error') {
                    resultDiv.innerHTML = "<p style='color:red;'>" + message + "</p>";
                }
            }
        });

        // Submit Delete Course Form
        document.getElementById('deleteCourseForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);

            const response = await fetch('../course/scripts/delete-course.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            const [status, message] = text.trim().split('|');

            if (status === 'success') {
                alert(' Course deleted successfully! ');
                form.reset();
                closeModal('deleteCourseModal');
                location.reload();
            } else {
                alert('Failed to delete ');
            }
        });

        //Submit Edit Activities Form
        // document.getElementById('editActivitiesForm').addEventListener('submit', async function (e) {
        //     e.preventDefault();
        //     const form = e.target;
        //     const formData = new FormData(form);
        //     const resultDiv = document.getElementById('editActivitiesResult');

        //     const response = await fetch('../course/scripts/edit-activities.php', {
        //         method: 'POST',
        //         body: formData
        //     });

        //     const text = await response.text();
        //     const [status, message] = text.trim().split('|');

        //     if (status === 'success') {
        //         alert(' Activities edited successfully! ');
        //         form.reset();
        //         closeModal('editActivitiesModal');
        //         location.reload();
        //     } else {
        //         alert('Failed to edit ');
        //         // Clear previous errors
        //         resultDiv.innerHTML = '';

        //         if (status === 'error') {
        //             resultDiv.innerHTML = "<p style='color:red;'>" + message + "</p>";
        //         }
        //     }
        // });

        // // Submit Edit Features Form
        // document.getElementById('editFeaturesForm').addEventListener('submit', async function (e) {
        //     e.preventDefault();
        //     const form = e.target;
        //     const formData = new FormData(form);
        //     const resultDiv = document.getElementById('editFeaturesResult');

        //     const response = await fetch('../course/scripts/edit-features.php', {
        //         method: 'POST',
        //         body: formData
        //     });

        //     const text = await response.text();
        //     const [status, message] = text.trim().split('|');

        //     if (status === 'success') {
        //         alert(' Features edited successfully! ');
        //         form.reset();
        //         closeModal('editFeaturesModal');
        //         location.reload();
        //     } else {
        //         alert('Failed to edit ');
        //         // Clear previous errors
        //         resultDiv.innerHTML = '';

        //         if (status === 'error') {
        //             resultDiv.innerHTML = "<p style='color:red;'>" + message + "</p>";
        //         }
        //     }
        // });

        // //Submit Learning Goals Form
        // document.getElementById('editLearningGoalsForm').addEventListener('submit', async function (e) {
        //     e.preventDefault();
        //     const form = e.target;
        //     const formData = new FormData(form);
        //     const resultDiv = document.getElementById('editLearningGoalsResult');

        //     const response = await fetch('../course/scripts/edit-learning-goals.php', {
        //         method: 'POST',
        //         body: formData
        //     });

        //     const text = await response.text();
        //     const [status, message] = text.trim().split('|');

        //     if (status === 'success') {
        //         alert(' Learning Goals edited successfully! ');
        //         form.reset();
        //         closeModal('editLearningGoalsModal');
        //         location.reload();
        //     } else {
        //         alert('Failed to edit ');
        //         // Clear previous errors
        //         resultDiv.innerHTML = '';

        //         if (status === 'error') {
        //             resultDiv.innerHTML = "<p style='color:red;'>" + message + "</p>";
        //         }
        //     }
        // });

        // //Submit Materials Form
        // document.getElementById('editMaterialsForm').addEventListener('submit', async function (e) {
        //     e.preventDefault();
        //     const form = e.target;
        //     const formData = new FormData(form);
        //     const resultDiv = document.getElementById('editMaterialsResult');

        //     const response = await fetch('../course/scripts/edit-materials.php', {
        //         method: 'POST',
        //         body: formData
        //     });

        //     const text = await response.text();
        //     const [status, message] = text.trim().split('|');

        //     if (status === 'success') {
        //         alert(' Materials edited successfully! ');
        //         form.reset();
        //         closeModal('editMaterialsModal');
        //         location.reload();
        //     } else {
        //         alert('Failed to edit ');
        //         // Clear previous errors
        //         resultDiv.innerHTML = '';

        //         if (status === 'error') {
        //             resultDiv.innerHTML = "<p style='color:red;'>" + message + "</p>";
        //         }
        //     }
        // });

        // //Submit Teachers Form
        // document.getElementById('editTeachersForm').addEventListener('submit', async function (e) {
        //     e.preventDefault();
        //     const form = e.target;
        //     const formData = new FormData(form);
        //     const resultDiv = document.getElementById('editTeachersResult');

        //     const response = await fetch('../course/scripts/edit-teachers.php', {
        //         method: 'POST',
        //         body: formData
        //     });

        //     const text = await response.text();
        //     const [status, message] = text.trim().split('|');

        //     if (status === 'success') {
        //         alert(' Teachers edited successfully! ');
        //         form.reset();
        //         closeModal('editTeachersModal');
        //         location.reload();
        //     } else {
        //         alert('Failed to edit ');
        //         // Clear previous errors
        //         resultDiv.innerHTML = '';

        //         if (status === 'error') {
        //             resultDiv.innerHTML = "<p style='color:red;'>" + message + "</p>";
        //         }
        //     }
        // });

        // Close modal when clicking outside the modal content
        window.addEventListener('click', function (event) {
            const addCourseModal = document.getElementById('addCourseModal');
            const editCourseModal = document.getElementById('editCourseModal');

            if (event.target === addCourseModal) {
                addCourseModal.style.display = "none";
            }
            if (event.target === editCourseModal) {
                editCourseModal.style.display = "none";
            }
        });

    </script>
</body>

<?php //include "../includes/footer.php"; ?>