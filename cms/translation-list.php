<?php
include "../connections/dbname.php";

$tablename = $database . ".`wt_translations`";
$sql = "SELECT * FROM $tablename";
$result = $conn->query($sql);
$result->data_seek(0); // reset pointer if already used in a loop
$translationDataArray = [];
while ($row = $result->fetch_assoc()) {
    $ref = $row['ref_num'];
    $translationDataArray[$ref] = $row;
}
?>
<?php include "../includes/header.php"; ?>

<head>
    <title>Translations List</title>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

    <!-- JS libraries -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <style>
        .data-table {
            padding: 60px;
            margin-top: 8rem;
        }

        #dataTable {
            border-collapse: collapse;
        }

        /* Quote section title */
        h2 {
            font-family: 'Poppins', sans-serif;
            color: #0ca83e;
            text-align: center;
            font-weight: 900;
            border-radius: 8px;
        }

        /* Table header (th) styling */
        #dataTable thead th {
            background-color: #0ca83e;
            color: white;
            font-weight: bold;
            text-align: left;
            padding: 0.75rem;
        }

        /* Table body (td) styling */
        #dataTable tbody td {
            background-color: rgba(255, 176, 0, 0.25);
            color: black;

            padding: 0.75rem;
        }

        #dataTable th,
        #dataTable td {
            border: 1px solid grey;
        }


        @media screen and (max-width: 768px) {
            .data-table {
                padding: 20px;
            }
        }

        /* Allow wrapping only for English and Chinese (columns 5 and 6) */
        #dataTable td:nth-child(5),
        #dataTable td:nth-child(6) {
            white-space: normal !important;
            word-wrap: break-word;
            width: 30%;
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

        .formContainer {
            display: flex;
            width: 100%;
            height: 90%;
            background-color: #ffffff;
            font-family: 'Poppins';
            border: 1px solid #ddd;
            overflow-y: auto;
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
    <div class="data-table">
        <div style="display: flex; justify-content: space-between; margin-bottom:2rem;">
            <h2>Translations</h2>

            <div style="text-align: center;">
                <a class="button" id="openAddTranslation">
                    Add Translation
                </a>
            </div>
        </div>

        <table id="dataTable" class="display nowrap" style="width:100%;">
            <thead>
                <tr>
                    <th></th>
                    <th>Ref Num</th>
                    <th>Web Page</th>
                    <th>Element ID</th>
                    <th>EN</th>
                    <th>CN</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php $result->data_seek(0);
                    while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td>
                                <a class="button edit" data-refnum="<?= $row['ref_num'] ?>">
                                    Edit <i class="fas fa-edit"></i>
                                </a>
                            </td>
                            <td><?= $row['ref_num'] ?? '' ?></td>
                            <td><?= $row['web_page'] ?? '' ?></td>
                            <td><?= $row['element_id'] ?? '' ?></td>
                            <td><?= $row['en'] ?? '' ?></td>
                            <td><?= $row['cn'] ?? '' ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No translations found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
    <div id="addModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('addModal')">&times;</span>
            <h2>Add Translation</h2>
            <div class="formContainer" style="justify-content: center">
                <form id="addForm">
                    <label for="web_page">Page Data Name:</label>
                    <input type="text" name="web_page">

                    <label for="element_id">Element ID:</label>
                    <input type="text" name="element_id" required>

                    <label for="en">English (en):</label>
                    <textarea name="en"></textarea>

                    <label for="cn">Chinese (cn):</label>
                    <textarea name="cn"></textarea>

                    <label for="kr">Korean (kr):</label>
                    <textarea name="kr"></textarea>

                    <label for="jp">Japanese (jp):</label>
                    <textarea name="jp"></textarea>

                    <div class="button-group">
                        <button class="button" type="submit">Add Translation</button>
                    </div>
                    <div id="entryResult" class="result"></div>
                </form>
            </div>
        </div>
    </div>

    <div id="editModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('editModal')">&times;</span>
            <h2>Edit Translation</h2>
            <div class="formContainer" style="justify-content: center">
                <form id="editForm">
                    <input id="editRefNum" type="hidden" name="ref_num" required>

                    <label for="web_page">Page Data Name:</label>
                    <input id="editWebPage" type="text" name="web_page">

                    <label for="element_id">Element ID:</label>
                    <input id="editElementID" type="text" name="element_id" required>

                    <label for="en">English (en):</label>
                    <textarea id="editEN" name="en"></textarea>

                    <label for="cn">Chinese (cn):</label>
                    <textarea id="editCN" name="cn"></textarea>

                    <label for="kr">Korean (kr):</label>
                    <textarea id="editKR" name="kr"></textarea>

                    <label for="jp">Japanese (jp):</label>
                    <textarea id="editJP" name="jp"></textarea>

                    <button class="button" type="submit">Submit</button>
                </form>
            </div>
            <div id="editResult"></div>
        </div>
    </div>

    <script>
        //pass php courses array object into js
        const translationData = <?= json_encode($translationDataArray, JSON_HEX_TAG | JSON_HEX_AMP | JSON_HEX_APOS | JSON_HEX_QUOT) ?>;

        $(document).ready(function () {
            $('#dataTable').DataTable({
                responsive: true,
                columnDefs: [
                    {
                        targets: 0, //target first column
                        searchable: false,
                        orderable: false
                    }
                ]
            });

            document.getElementById('openAddTranslation').addEventListener('click', () => {
                document.getElementById('addModal').style.display = 'flex';
            });

            document.addEventListener('click', (e) => {
                //Open Edit Translation Info
                const editButton = e.target.closest('.edit');
                if (editButton) {
                    const ref = editButton.dataset.refnum;
                    const row = translationData[ref];
                    if (!row) return alert('Translation data not found.');

                    document.getElementById('editModal').style.display = 'flex';
                    document.getElementById('editRefNum').value = row.ref_num;
                    document.getElementById('editWebPage').value = row.web_page;
                    document.getElementById('editElementID').value = row.element_id;
                    document.getElementById('editEN').value = row.en;
                    document.getElementById('editCN').value = row.cn;
                    document.getElementById('editKR').value = row.kr;
                    document.getElementById('editJP').value = row.jp;
                }
            });
        });

        function closeModal(id) {
            document.getElementById(id).style.display = "none";
        }

        // Submit Add Form
        document.getElementById('addForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const resultDiv = document.getElementById('entryResult');

            const response = await fetch('add-translation.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            const [status, message] = text.trim().split('|');

            if (status === 'success') {
                alert(' Translation added successfully! ');
                form.reset();
                closeModal('addModal');
                location.reload();
            } else {
                // Clear previous errors
                resultDiv.innerHTML = '';

                if (status === 'error') {
                    resultDiv.innerHTML = "<p style='color:red;'>" + message + "</p>";
                }
            }
        });

        // Submit Edit Form
        document.getElementById('editForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const resultDiv = document.getElementById('editResult');

            const response = await fetch('edit-translation.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            const [status, message] = text.trim().split('|');

            if (status === 'success') {
                alert(' Translation edited successfully! ');
                form.reset();
                closeModal('editModal');
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

        // Close modal when clicking outside the modal content
        window.addEventListener('click', function (event) {
            const addModal = document.getElementById('addModal');
            const editModal = document.getElementById('editModal');

            if (event.target === addModal) {
                addModal.style.display = "none";
            }
            if (event.target === editModal) {
                editModal.style.display = "none";
            }
        });

    </script>
</body>

<?php include "../includes/footer.php"; ?>