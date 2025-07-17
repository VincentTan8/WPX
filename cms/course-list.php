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
            <h4 id="editCourseModalTitle">Title</h4>
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
                        <select id="editAgeGroup" name="editAgeGroup">
                            <option value="">N/A</option>
                            <option value="Kids">Kids</option>
                            <option value="Adults">Adults</option>
                            <option value="Teens">Teens/Youth</option>
                        </select>

                        <label>Course Language</label>
                        <select id="editLanguage" name="editLanguage">
                            <option value="English">English</option>
                            <option value="Chinese">Chinese</option>
                        </select>

                        <label>Course Package</label>
                        <input list="coursePackageList" id="editCoursePackage" name="editCoursePackage">
                        <datalist id="coursePackageList">
                            <option value="Family">Family Package (WK Chinese)</option>
                            <option value="School">School Package (Exam Oriented Course)</option>
                        </datalist>

                        <label>Course Type</label>
                        <input list="courseTypeList" id="editCourseType" name="editCourseType">
                        <datalist id="courseTypeList">
                            <option value="WeTalk Kids Chinese">WeTalk Kids Chinese</option>
                            <option value="BuBianBan">BuBianBan</option>
                            <option value="MOE">MOE</option>
                            <option value="YCT">YCT</option>
                            <option value="HSK">HSK</option>
                            <option value="ESTC">ESTC</option>
                        </datalist>

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

                    <div id="learningGoalsContainer" class="tab">
                    </div>

                    <div id="activitiesContainer" class="tab">
                    </div>

                    <div id="featuresContainer" class="tab">
                    </div>

                    <div id="materialsContainer" class="tab">
                    </div>

                    <div id="teachersContainer" class="tab">
                    </div>

                    <a class="button" id="addBtn">
                        Add Entry <i class="fas fa-plus"></i>
                    </a>
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
                document.getElementById("addBtn").style.display = "none";
                document.getElementById("prevBtn").style.display = "none";
            } else {
                document.getElementById("addBtn").style.display = "inline-block";
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

        //START Modal JS
        function showModal(id) {
            document.getElementById(id).style.display = "flex";
        }

        function closeModal(id) {
            document.getElementById(id).style.display = "none";
        }

        function addBlock() {
            //currentTab is from Multipage Form JS
            switch (currentTab) {
                case 1:
                    learningGoalsContainer.insertAdjacentElement('beforeend', createBlock(learningGoalIndex++, 1));
                    break;
                case 2:
                    activitiesContainer.insertAdjacentElement('beforeend', createBlock(activityIndex++, 2));
                    break;
                case 3:
                    featuresContainer.insertAdjacentElement('beforeend', createBlock(featureIndex++, 3));
                    break;
                case 4:
                    materialsContainer.insertAdjacentElement('beforeend', createBlock(materialIndex++, 4));
                    break;
                case 5:
                    teachersContainer.insertAdjacentElement('beforeend', createBlock(teacherIndex++, 5));
                    break;
                default:
            }
        }

        function createBlock(index, tab, row = null) {
            const wrapper = document.createElement('div');
            switch (tab) {
                case 1:
                    wrapper.innerHTML = `
                        <input type="hidden" name="learning_goal_ref_num[]" value="${row?.ref_num || ''}" required>

                        <label>Learning Goal EN</label>
                        <textarea name="editLearningGoalEN[]">${row?.learning_goal_en || ''}</textarea>

                        <button type="button" class="button remove-block">Remove</button>
                    `;
                    break;
                case 2:
                    wrapper.innerHTML = `
                        <input type="hidden" name="activity_ref_num[]" value="${row?.ref_num || ''}" required>

                        <label>Activity EN</label>
                        <textarea name="editActivityEN[]">${row?.activity_en || ''}</textarea>

                        <button type="button" class="button remove-block">Remove</button>
                    `;
                    break;
                case 3:
                    wrapper.innerHTML = `
                        <input type="hidden" name="feature_ref_num[]" value="${row?.ref_num || ''}" required>

                        <label>Feature EN</label>
                        <textarea name="editFeatureEN[]">${row?.feature_en || ''}</textarea>

                        <label>Feature Bold EN</label>
                        <textarea name="editFeatureBoldEN[]">${row?.feature_bold_en || ''}</textarea>
                        
                        <button type="button" class="button remove-block">Remove</button>
                    `;
                    break;
                case 4:
                    wrapper.innerHTML = `
                        <input type="hidden" name="material_ref_num[]" value="${row?.ref_num || ''}" required>

                        <label>Material EN</label>
                        <textarea name="editMaterialEN[]">${row?.material_en || ''}</textarea>

                        <button type="button" class="button remove-block">Remove</button>
                    `;
                    break;
                case 5:
                    wrapper.innerHTML = `
                        <input type="hidden" name="techer_ref_num[]" value="${row?.ref_num || ''}" required>

                        <label>Teacher EN</label>
                        <textarea name="editTeacherEN[]">${row?.teacher_en || ''}</textarea>

                        <button type="button" class="button remove-block">Remove</button>
                    `;
                    break;
                default:
            }
            wrapper.className = 'entry-block';
            wrapper.dataset.index = index;
            // Add remove logic (this will throw an error if tab is 0 but that should never happen anyway)
            wrapper.querySelector('.remove-block').addEventListener('click', function () {
                //todo create remove function here
                wrapper.remove();
            });
            return wrapper;
        }

        function prefillInfo(row) {
            document.getElementById('editCourseRefNum').value = row.ref_num;
            document.getElementById('editCourseModalTitle').innerHTML = row.course_title_en || '';

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
        }

        function prefillTab(ref, tab, rows, container) {
            //reset index form
            let index = 1;

            //Clear previous blocks
            container.querySelectorAll('.entry-block').forEach((block) => {
                block.remove();
            });

            Object.values(rows).forEach(row => {
                container.insertAdjacentElement('beforeend', createBlock(index++, tab, row));
            });
            return index;
        }

        const addButton = document.getElementById('addBtn');
        const activitiesContainer = document.getElementById('activitiesContainer');
        const learningGoalsContainer = document.getElementById('learningGoalsContainer');
        const featuresContainer = document.getElementById('featuresContainer');
        const materialsContainer = document.getElementById('materialsContainer');
        const teachersContainer = document.getElementById('teachersContainer');
        let activityIndex = 1;
        let learningGoalIndex = 1;
        let featureIndex = 1;
        let materialIndex = 1;
        let teacherIndex = 1;

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

                    const learningGoalRows = courseData[ref]['learningGoals'];  //list of learning goals
                    const activityRows = courseData[ref]['activities'];  //list of activities
                    const featureRows = courseData[ref]['features']; //list of features
                    const materialRows = courseData[ref]['materials'];  //list of materials
                    const teacherRows = courseData[ref]['teachers'];  //list of teachers

                    prefillInfo(row);
                    learningGoalIndex = prefillTab(ref, 1, learningGoalRows, learningGoalsContainer);
                    activityIndex = prefillTab(ref, 2, activityRows, activitiesContainer);
                    featureIndex = prefillTab(ref, 3, featureRows, featuresContainer);
                    materialIndex = prefillTab(ref, 4, materialRows, materialsContainer);
                    teacherIndex = prefillTab(ref, 5, teacherRows, teachersContainer);

                    showModal('editCourseModal');
                });
            });

            // Handle Add Block Button In Edit Course Modal
            addButton.addEventListener('click', addBlock);

            //Open Delete Course
            document.querySelectorAll('.deleteCourse').forEach((deleteButton) => {
                deleteButton.addEventListener('click', () => {
                    const ref = deleteButton.dataset.refnum;
                    document.getElementById('deleteCourseRefNum').value = ref;
                    showModal('deleteCourseModal');
                });
            });
        });

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
            // e.preventDefault();
            // const form = e.target;
            // const formData = new FormData(form);

            // const allData = {};
            // for (const key of formData.keys()) {
            //     allData[key] = formData.getAll(key); // get *all* values
            // }

            // console.log(allData); // Full array data

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

        // Close modal when clicking outside the modal content
        window.addEventListener('click', function (event) {
            const addCourseModal = document.getElementById('addCourseModal');
            const editCourseModal = document.getElementById('editCourseModal');
            const deleteCourseModal = document.getElementById('deleteCourseModal');

            if (event.target === addCourseModal) {
                addCourseModal.style.display = "none";
            }
            if (event.target === editCourseModal) {
                editCourseModal.style.display = "none";
            }
            if (event.target === deleteCourseModal) {
                deleteCourseModal.style.display = "none";
            }
        });
    </script>
</body>

<?php //include "../includes/footer.php"; ?>