<?php
include "../connections/dbname.php";

function getSection($conn, $database, $ref_num)
{
    $tablename = $database . ".`wt_news_section`";
    $sql = "SELECT * FROM $tablename WHERE `news_ref_num` = '$ref_num'";
    $result = $conn->query($sql);
    $sectionArray = [];
    while ($row = $result->fetch_assoc()) {
        $ref = $row['ref_num'];
        $sectionArray[$ref] = $row;
    }
    return $sectionArray;
}

$tablename = $database . ".`wt_news`";
$sql = "SELECT * FROM $tablename";  //limit this next time
$result = $conn->query($sql);
$result->data_seek(0); // reset pointer if already used in a loop
$newsDataArray = [];
while ($row = $result->fetch_assoc()) {
    $ref = $row['ref_num'];
    $newsDataArray[$ref] = $row;
    $newsDataArray[$ref]['newsSection'] = getSection($conn, $database, $ref);

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
    <title>News List</title>

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
                <h2>News List</h2>
                <select id="dataLanguage" class="form-dropdown" name="dataLanguage">
                    <option value="_en" <?= $dataLang === '_en' ? 'selected' : '' ?>>English</option>
                    <option value="_cn" <?= $dataLang === '_cn' ? 'selected' : '' ?>>Chinese</option>
                </select>
            </div>

            <div style="text-align: center;">
                <a class="button" id="openAdd">
                    Add News <i class="fas fa-plus"></i>
                </a>
            </div>
        </div>

        <table id="newsTable" class="display nowrap" style="width:100%;">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>Reference Number</th>
                    <th>News Title</th>
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
                            <td><?= $row['ref_num'] ?? '' ?></td>
                            <td><?= $row['news_title_en'] ?? '' ?></td>
                            <td>
                                <a class="button editNews" data-refnum="<?= $row['ref_num'] ?>">
                                    Edit <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td>
                                <a class="button deleteNews" data-refnum="<?= $row['ref_num'] ?>">
                                    Delete <i class="fas fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No News found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div id="addNewsModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('addNewsModal')">&times;</span>
            <h2>Add News</h2>
            <div class="formContainer" style="justify-content: center">
                <form id="addNewsForm" class="addForm">
                    <label for="addNewsTitleEN">News Title</label>
                    <textarea id="addNewsTitleEN" name="addNewsTitleEN" required></textarea>
                    <div style="text-align: right">
                        <button class="button" type="submit">Submit</button>
                    </div>
                </form>
            </div>
            <div id="addResult"></div>
        </div>
    </div>

    <div id="editNewsModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('editNewsModal')">&times;</span>
            <h2>Edit News</h2>
            <h4 id="editNewsModalTitle">Title</h4>
            <div class="formContainer">
                <div id="stepNav" style="text-align:center;">
                    <button type="button" class="button step-label" onclick="goToTab(0)">General Info</button>
                    <button type="button" class="button step-label" onclick="goToTab(1)">News Section</button>
                </div>
                <form id="editNewsForm" class="editForm">
                    <div class="tab">
                        <input id="editNewsRefNum" type="hidden" name="ref_num" required>
                        <input id="editDataLang" type="hidden" name="lang" required>

                        <label for="editNewsCategory">News Category</label>
                        <textarea id="editNewsCategory" name="editNewsCategory"></textarea>

                        <label for="editNewsTitle">News Title</label>
                        <textarea id="editNewsTitle" name="editNewsTitle" required></textarea>

                        <label for="editNewsDescription">News Description</label>
                        <textarea id="editNewsDescription" name="editNewsDescription"></textarea>

                        <label for="editDatePosted">Date Posted</label>
                        <textarea id="editDatePosted" name="editDatePosted"></textarea>

                        <label for="editDate">Date</label>
                        <input type="date" id="editDate" name="editDate"></textarea>

                        <label>Thumbnail</label>
                        <div style="display: inline-flex; gap: 1rem; align-items:center;">
                            <input id="editNewsThumbnailInput" type="file" name="editNewsThumbnail">
                            <img id="currentThumbnail" src="" alt="Current Thumbnail"
                                style="max-height: 60px; display:none;">
                        </div>

                        <label for="editStorySource">Story Source</label>
                        <textarea id="editStorySource" name="editStorySource"></textarea>


                        <label>Video File</label>
                        <div style="display: inline-flex; gap: 1rem;">
                            <input id="editVideoFile" type="file" name="editVideoFile">
                            <span id="editVideoFile"></span>
                        </div>

                        <label for="editNewsId">News ID</label>
                        <textarea id="editNewsId" name="editNewsId"></textarea>

                        <label for="editNewsLang">News Lang</label>
                        <textarea id="editNewsLang" name="editNewsLang"></textarea>
                    </div>

                    <div id="newsSectionContainer" class="tab">
                    </div>

                    <a class="button" id="addBtn">
                        Add Entry <i class="fas fa-plus"></i>
                    </a>
                    <div style="float:right;">
                        <button class="button" type="button" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
                        <button class="button" type="button" id="nextBtn" onclick="nextPrev(1)">Next</button>
                        <button class="button" type="submit" id="submitBtn">Save</button>
                    </div>
                </form>
            </div>
            <div id="editNewsResult"></div>
        </div>
    </div>

    <div id="deleteNewsModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('deleteNewsModal')">&times;</span>
            <h2>Delete News</h2>
            <h4>Are you sure you want to delete this news?</h4>
            <div style="display: flex; padding-top: 1rem; justify-content: center;">
                <form id="deleteNewsForm">
                    <input id="deleteNewsRefNum" type="hidden" name="ref_num" required>
                    <button class="button" type="submit">Confirm</button>
                </form>
            </div>
        </div>
    </div>

    <script>
        //pass php news array object into js
        const newsData = <?= json_encode($newsDataArray, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;

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
                document.getElementById("nextBtn").style.display = "none";
            } else {
                document.getElementById("nextBtn").style.display = "inline";
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

        //START JS for stuff in the MODAL
        function showModal(id) {
            document.getElementById(id).style.display = "flex";
        }

        function closeModal(id) {
            document.getElementById(id).style.display = "none";
        }

        async function deleteEntry(ref_num, tab) {
            //Entry is an element of a news section (activities, features, materials, etc.)
            const response = await fetch("../news-details/scripts/delete-entry.php", {
                method: "POST",
                headers: {
                    "Content-Type": "application/x-www-form-urlencoded"
                },
                body: `ref_num=${encodeURIComponent(ref_num)}` +
                    `&tab=${encodeURIComponent(tab)}`
            });

            const text = await response.text();
            const [status, message] = text.trim().split('|');

            if (status === 'success') {
                return true;
            } else {
                alert('Failed to delete ');
                return false;
            }
        }

        function addBlock() {
            //currentTab is from Multipage Form JS
            switch (currentTab) {
                case 1:
                    newsSectionContainer.insertAdjacentElement('beforeend', createBlock(newsSectionIndex++, 1));
                    break;
                default:
            }
        }

        function createBlock(index, tab, row = null) {
            const lang = document.getElementById('dataLanguage').value;
            const wrapper = document.createElement('div');
            switch (tab) {
                case 1:
                    wrapper.innerHTML = `
                        <input type="hidden" name="news_section_ref_num[]" value="${row?.ref_num || ''}" required>

                        <label>News Section</label>
                        <textarea name="editNewsSection[]">${row?.['section_title' + lang] || ''}</textarea>

                        <label>Section Photo</label>
                        <input type="file" name="editSectionPhoto[]" accept="image/*">

                        <label>News Detail</label>
                        <textarea name="editNewsDetail[]">${row?.['section_detail' + lang] || ''}</textarea>

                        <button type="button" class="button remove-block">Remove</button>
                    `;
                    break;

                default:
            }
            wrapper.className = 'entry-block';
            wrapper.dataset.index = index;
            // Add remove logic (this will throw an error if tab is 0 but that should never happen anyway)
            wrapper.querySelector('.remove-block').addEventListener('click', async function () {
                if (row) {
                    if (confirm("Are you sure?") && await deleteEntry(row.ref_num, tab)) {
                        wrapper.remove();
                        location.reload();
                    }
                } else {
                    wrapper.remove();
                }
            });
            return wrapper;
        }

        function prefillInfo(row) {
            const lang = document.getElementById('dataLanguage').value;
            document.getElementById('editDataLang').value = lang;
            document.getElementById('editNewsRefNum').value = row.ref_num;

            document.getElementById('editNewsModalTitle').innerHTML = row['news_title' + lang] || '';

            document.getElementById('editNewsCategory').value = row.news_category || '';
            document.getElementById('editNewsTitle').value = row['news_title' + lang] || '';
            document.getElementById('editNewsDescription').value = row['news_description' + lang] || '';
            document.getElementById('editDatePosted').value = row.date_posted || '';
            document.getElementById('editDate').value = row.date || '';

            const currentThumb = document.getElementById('currentThumbnail');
            if (row.news_thumbnail) {
                currentThumb.src = `../resources/img/news/${row.news_thumbnail}`;
                currentThumb.style.display = 'block';
            } else {
                currentThumb.style.display = 'none';
            }

            document.getElementById('editStorySource').value = row.story_source || '';
            document.getElementById('editVideoFile').textContent = row.video_file || '';

            document.getElementById('editNewsId').value = row.news_id || '';
            document.getElementById('editNewsLang').value = row.news_lang || '';
        }

        function prefillTab(ref, tab, rows, container) {
            //reset index form

            console.log("Container:", container);
            console.log("Rows:", rows);
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
        const newsSectionContainer = document.getElementById('newsSectionContainer');

        let newsSectionIndex = 1;
        //END JS for stuff in MODAL

        $(document).ready(function () {
            $('#newsTable').DataTable({
                responsive: true,
                order: [[0, 'desc']],
                columnDefs: [
                    {
                        targets: [0, 1],
                        width: "50px"
                    },
                    {
                        targets: [3, 4],
                        searchable: false,
                        orderable: false,
                        width: "10px"
                    },
                    {
                        targets: 2,
                        searchable: true,
                        orderable: true,
                        createdCell: function (td, cellData, rowData, row, col) {
                            td.title = cellData;
                        }
                    }
                ]
            });

            //Open Add News
            document.getElementById('openAdd').addEventListener('click', () => {
                showModal('addNewsModal');
                document.getElementById("addNewsTitleEN").focus();
            });

            document.addEventListener('click', (e) => {
                //Open Edit News Info
                const editButton = e.target.closest('.editNews');
                if (editButton) {
                    const ref = editButton.dataset.refnum;
                    const row = newsData[ref];
                    if (!row) return alert('News data not found.');
                    console.log("News Section:", row['newsSection']);

                    const newsSectionRows = row['newsSection'];

                    prefillInfo(row);
                    newsSectionIndex = prefillTab(ref, 1, newsSectionRows, newsSectionContainer);

                    showModal('editNewsModal');
                }
                //Open Delete News
                const deleteButton = e.target.closest('.deleteNews');
                if (deleteButton) {
                    const ref = deleteButton.dataset.refnum;
                    document.getElementById('deleteNewsRefNum').value = ref;
                    showModal('deleteNewsModal');
                }
            });

            // Handle Add Block Button In Edit News Modal
            addButton.addEventListener('click', addBlock);
        });

        // Submit Add News Form
        document.getElementById('addNewsForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const resultDiv = document.getElementById('addResult');

            const response = await fetch('../news-details/scripts/add-news.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            const [status, message] = text.trim().split('|');

            if (status === 'success') {
                alert(' News added successfully! ');
                form.reset();
                closeModal('addNewsModal');
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
        document.getElementById('editNewsForm').addEventListener('submit', async function (e) {
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
            const resultDiv = document.getElementById('editNewsResult');

            const response = await fetch('../news-details/scripts/edit-news.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            const [status, message] = text.trim().split('|');

            if (status === 'success') {
                alert(' News edited successfully! ');
                form.reset();
                closeModal('editNewsModal');
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
        document.getElementById('deleteNewsForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);

            const response = await fetch('../news-details/scripts/delete-news.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            const [status, message] = text.trim().split('|');

            if (status === 'success') {
                alert(' News deleted successfully! ');
                form.reset();
                closeModal('deleteNewsModal');
                location.reload();
            } else {
                alert('Failed to delete ');
            }
        });

        // Close modal when clicking outside the modal content
        window.addEventListener('click', function (event) {
            const addNewsModal = document.getElementById('addNewsModal');
            const editNewsModal = document.getElementById('editNewsModal');
            const deleteNewsModal = document.getElementById('deleteNewsModal');

            if (event.target === addNewsModal) {
                addNewsModal.style.display = "none";
            }
            if (event.target === editNewsModal) {
                editNewsModal.style.display = "none";
            }
            if (event.target === deleteNewsModal) {
                deleteNewsModal.style.display = "none";
            }
        });

        document.getElementById('dataLanguage').addEventListener('change', function () {
            const selectedLang = this.value;

            fetch('../news-details/scripts/set-language-data.php', {
                method: 'POST',
                headers: {
                    'Content-Type': 'application/x-www-form-urlencoded'
                },
                body: 'dataLang=' + encodeURIComponent(selectedLang)
            })
        });
    </script>
</body>

<?php //include "../includes/footer.php"; ?>