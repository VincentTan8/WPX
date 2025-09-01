<?php
include "../connections/dbname.php";


$tablename = $database . ".`teachers`";
$sql = "SELECT * FROM $tablename";  //limit this next time
$result = $conn->query($sql);
$result->data_seek(0); // reset pointer if already used in a loop

$teachers = [];
if ($result && $result->num_rows > 0) {
    $result->data_seek(0);
    while ($row = $result->fetch_assoc()) {
        $teachers[] = $row;
    }
}


//for setting the language data to be edited
if (isset($_SESSION['dataLang']) and $_SESSION['dataLang'] == '_cn') {
    $dataLang = '_cn';
} else {
    $_SESSION['dataLang'] = '_en';
    $dataLang = '_en';
}
?>
<?php include "../includes/header.php"; ?>

<head>
    <title>Teacher List</title>

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
            <div style="display: flex; gap: 1rem;">
                <h2>Teacher List</h2>
                <select id="dataLanguage" class="form-dropdown" name="dataLanguage">
                    <option value="_en" <?= $dataLang === '_en' ? 'selected' : '' ?>>English</option>
                    <option value="_cn" <?= $dataLang === '_cn' ? 'selected' : '' ?>>Chinese</option>
                </select>
            </div>

            <div style="text-align: center;">
                <a class="button" id="openAdd">
                    Add Teacher <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>

        <table id="teacherTable" class="display nowrap" style="width:100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Full Name</th>
                    <th>Category Details</th>
                    <th>Gender</th>
                    <th>Active</th>
                    <th></th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php $result->data_seek(0);
                    while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['id'] ?? '' ?></td>
                            <td><?= $row['fullname_en'] ?? '' ?></td>
                            <td><?= $row['category_details'] ?? '' ?></td>
                            <td><?= $row['gender'] ?? '' ?></td>
                            <td><?= $row['show_teacher'] ?? '' ?></td>
                            <td>
                                <a class="button editTeachers" data-refnum="<?= $row['id'] ?>">
                                    Edit <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a class="button deleteTeachers" data-refnum="<?= $row['id'] ?>">
                                    Delete <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No Teacher found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div id="addTeacherModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('addTeacherModal')">&times;</span>
            <h2>Add Teacher</h2>
            <div class="formContainer" style="justify-content: center">
                <form id="addTeacherForm" class="addForm">
                    <label for="addTeacherNameEN">Teacher Name</label>
                    <textarea id="addTeacherNameEN" name="addTeacherNameEN" required></textarea>
                    <div style="text-align: right">
                        <button class="button" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div id="addResult"></div>
        </div>
    </div>

    <div id="editTeacherModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('editTeacherModal')">&times;</span>
            <h2>Edit Teacher</h2>
            <h4 id="editTeacherModalTitle">Edit Info</h4>
            <div class="formContainer">
                <form id="editTeacherForm" class="editForm" enctype="multipart/form-data">
                    <input type="hidden" id="editId" name="id">
                    <input id="editDataLang" type="hidden" name="lang" required>

                    <label for="editCategory">Category</label>
                    <select id="editCategory" name="editCategory" onchange="updateCategoryDetails()">
                        <option value="">-- Select --</option>
                        <option value="SCIENCE">Science Teacher</option>
                        <option value="TRADITIONAL">Traditional Chinese Teacher</option>
                        <option value="CHINESE">Chinese Language Teacher</option>
                        <option value="CONTRIBUTING">Contributing Teacher</option>
                        <option value="ENGLISH">English Teacher</option>
                    </select>
                    <input type="hidden" id="editCategoryDetails" name="editCategoryDetails">



                    <label for="editFullName">Full Name </label>
                    <input type="text" id="editFullName" name="editFullName">

                    <label for="editPhone">Phone Number</label>
                    <input type="text" id="editPhone" name="editPhone">

                    <label for="editEmail">Email Address</label>
                    <input type="email" id="editEmail" name="editEmail">

                    <label for="editLanguage">Common Language</label>
                    <input type="text" id="editLanguage" name="editLanguage">

                    <label for="editTimeZone">Time Zone</label>
                    <input type="text" id="editTimeZone" name="editTimeZone">

                    <label for="editThumbnail">Thumbnail</label>
                    <div style="display:flex; flex-direction:column; gap:0.5rem;">
                        <small style="color:red; font-size:12px;">Recommended size: 440×300px</small>
                        <div style="display:flex; align-items:center; gap:1rem;">
                            <input type="file" id="editThumbnail" name="editThumbnail" accept="image/*">
                            <img id="currentThumbnail" src="" alt="Current Thumbnail"
                                style="max-height:60px; display:none;">
                        </div>

                    </div>

                    <label for="editGender">Gender</label>
                    <select id="editGender" name="editGender">
                        <option value="">-- Select --</option>
                        <option value="MALE">MALE</option>
                        <option value="FEMALE">FEMALE</option>
                    </select>

                    <label for="editBirthdate">Birthdate</label>
                    <input type="date" id="editBirthdate" name="editBirthdate">

                    <label for="editTalkcloudId">TalkCloud ID</label>
                    <input type="text" id="editTalkcloudId" name="editTalkcloudId">

                    <label for="editLabelDetails">Label Details </label>
                    <textarea id="editLabelDetails" name="editLabelDetails"></textarea>

                    <label for="editIntro">Introduction </label>
                    <textarea id="editIntro" name="editIntro"></textarea>

                    <label for="editBirthplace">Birthplace </label>
                    <input type="text" id="editBirthplace" name="editBirthplace">

                    <label for="editEducation">Education </label>
                    <textarea id="editEducation" name="editEducation"></textarea>

                    <label for="editMotto">Motto </label>
                    <textarea id="editMotto" name="editMotto"></textarea>

                    <label for="editPhilosophy">Philosophy </label>
                    <textarea id="editPhilosophy" name="editPhilosophy"></textarea>

                    <h4>Digital Labels</h4>
                    <label>A1–A3</label>
                    <input type="text" name="editLabelA1" id="editLabelA1">
                    <input type="text" name="editLabelA2" id="editLabelA2">
                    <input type="text" name="editLabelA3" id="editLabelA3">

                    <label>B1–B3</label>
                    <input type="text" name="editLabelB1" id="editLabelB1">
                    <input type="text" name="editLabelB2" id="editLabelB2">
                    <input type="text" name="editLabelB3" id="editLabelB3">

                    <label>C1–C3</label>
                    <input type="text" name="editLabelC1" id="editLabelC1">
                    <input type="text" name="editLabelC2" id="editLabelC2">
                    <input type="text" name="editLabelC3" id="editLabelC3">

                    <label for="editShowTeacher">Active</label>
                    <select id="editShowTeacher" name="editShowTeacher">
                        <option value="Y">Yes</option>
                        <option value="">No</option>
                    </select>

                    <div style="float:right; margin-top:1rem;">
                        <button class="button" type="submit">Save</button>
                    </div>
                </form>
            </div>
            <div id="editTeacherResult"></div>
        </div>
    </div>


    <div id="deleteTeacherModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('deleteTeacherModal')">&times;</span>
            <h2>Delete Teacher</h2>
            <h4>Are you sure you want to delete this teacher?</h4>
            <div style="display: flex; padding-top: 1rem; justify-content: center;">
                <form id="deleteTeacherForm">
                    <input id="deleteId" type="hidden" name="id" required>
                    <button class="button" type="submit">Confirm</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        function updateCategoryDetails() {
            const select = document.getElementById("editCategory");
            document.getElementById("editCategoryDetails").value =
                select.options[select.selectedIndex]?.text || "";
        }


        const teacherData = <?= json_encode(
            array_column($teachers, null, 'id'),
            JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT
        ) ?>;
        // START JS for stuff in the MODAL
        function showModal(id) {
            document.getElementById(id).style.display = "flex";
        }

        function closeModal(id) {
            document.getElementById(id).style.display = "none";
        }

        function prefillTeacher(row) {
            const lang = document.getElementById('dataLanguage').value;
            document.getElementById('editDataLang').value = lang;
            document.getElementById('editTeacherModalTitle').innerHTML = row['fullname' + lang] || '';
            document.getElementById('editId').value = row.id || '';
            document.getElementById('editCategory').value = row.category || '';
            document.getElementById('editCategoryDetails').value = row.category_details || '';
            document.getElementById('editFullName').value = row['fullname' + lang] || '';
            document.getElementById('editPhone').value = row.phone_number || '';
            document.getElementById('editEmail').value = row.email_address || '';
            document.getElementById('editLanguage').value = row.common_language || '';
            document.getElementById('editTimeZone').value = row.time_zone || '';
            document.getElementById('editGender').value = row.gender || '';
            document.getElementById('editBirthdate').value = row.birthdate || '';
            document.getElementById('editTalkcloudId').value = row.talkcloud_id || '';
            document.getElementById('editLabelDetails').value = row['label_details' + lang] || '';
            document.getElementById('editIntro').value = row['introduction' + lang] || '';
            document.getElementById('editBirthplace').value = row['birthplace' + lang] || '';
            document.getElementById('editEducation').value = row['education' + lang] || '';
            document.getElementById('editMotto').value = row['motto' + lang] || '';
            document.getElementById('editPhilosophy').value = row['philosophy' + lang] || '';
            document.getElementById('editLabelA1').value = row.digital_label_a1 || '';
            document.getElementById('editLabelA2').value = row.digital_label_a2 || '';
            document.getElementById('editLabelA3').value = row.digital_label_a3 || '';
            document.getElementById('editLabelB1').value = row.digital_label_b1 || '';
            document.getElementById('editLabelB2').value = row.digital_label_b2 || '';
            document.getElementById('editLabelB3').value = row.digital_label_b3 || '';
            document.getElementById('editLabelC1').value = row.digital_label_c1 || '';
            document.getElementById('editLabelC2').value = row.digital_label_c2 || '';
            document.getElementById('editLabelC3').value = row.digital_label_c3 || '';
            document.getElementById('editShowTeacher').value = row.show_teacher || '';

            // show current thumbnail
            const currentThumb = document.getElementById('currentThumbnail');
            if (row.thumbnails) {
                currentThumb.src = `../teachers/img/thumbnails/${row.thumbnails}`;
                currentThumb.style.display = 'block';
            } else {
                currentThumb.style.display = 'none';
            }
        }

        $(document).ready(function () {
            $('#teacherTable').DataTable({
                responsive: true,
                order: [[0, 'desc']],
                columnDefs: [
                    { targets: [0, 1], width: "50px" },
                    { targets: [3, 4], searchable: false, orderable: false, width: "10px" },
                    {
                        targets: 2,
                        searchable: true,
                        orderable: true,
                        createdCell: function (td, cellData) {
                            td.title = cellData;
                        }
                    }
                ]
            });

            // Open Add Teacher
            document.getElementById('openAdd').addEventListener('click', () => {
                showModal('addTeacherModal');
                document.getElementById("addTeacherNameEN").focus();
            });

            document.addEventListener('click', (e) => {
                // Open Edit Teacher
                const editButton = e.target.closest('.editTeachers');
                if (editButton) {
                    const ref = editButton.dataset.refnum;
                    const row = teacherData[ref];
                    if (!row) return alert('Teacher data not found.');

                    prefillTeacher(row);
                    showModal('editTeacherModal');
                }

                // Open Delete Teacher
                const deleteButton = e.target.closest('.deleteTeachers');
                if (deleteButton) {
                    const ref = deleteButton.dataset.refnum;
                    document.getElementById('deleteId').value = ref;
                    showModal('deleteTeacherModal');
                }
            });
        });

        // Submit Add Teacher Form
        document.getElementById('addTeacherForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const resultDiv = document.getElementById('addResult');

            const response = await fetch('../teachers/scripts/add-teacher.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            const [status, message] = text.trim().split('|');

            if (status === 'success') {
                alert('Teacher added successfully!');
                form.reset();
                closeModal('addTeacherModal');
                location.reload();
            } else {
                resultDiv.innerHTML = `<p style="color:red;">${message}</p>`;
            }
        });

        // Submit Edit Teacher Form
        document.getElementById('editTeacherForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const resultDiv = document.getElementById('editTeacherResult');

            const response = await fetch('../teachers/scripts/edit-teacher.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            const [status, message] = text.trim().split('|');

            if (status === 'success') {
                alert('Teacher edited successfully!');
                form.reset();
                closeModal('editTeacherModal');
                location.reload();
            } else {
                resultDiv.innerHTML = `<p style="color:red;">${message}</p>`;
            }
        });

        // Submit Delete Teacher Form
        document.getElementById('deleteTeacherForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);

            const response = await fetch('../teachers/scripts/delete-teacher.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            console.log("Delete Response:", text);
            const [status, message] = text.trim().split('|');


            if (status === 'success') {
                alert('Teacher deleted successfully!');
                form.reset();
                closeModal('deleteTeacherModal');
                location.reload();
            } else {
                alert('Failed to delete teacher');
            }
        });

        // Close modal when clicking outside
        window.addEventListener('click', function (event) {
            ['addTeacherModal', 'editTeacherModal', 'deleteTeacherModal'].forEach(id => {
                const modal = document.getElementById(id);
                if (event.target === modal) {
                    modal.style.display = "none";
                }
            });
        });

        // Handle language selector
        document.getElementById('dataLanguage').addEventListener('change', function () {
            const selectedLang = this.value;
            fetch('../teachers/scripts/set-language-data.php', {
                method: 'POST',
                headers: { 'Content-Type': 'application/x-www-form-urlencoded' },
                body: 'dataLang=' + encodeURIComponent(selectedLang)
            });
        });
    </script>

</body>

<?php //include "../includes/footer.php"; ?>