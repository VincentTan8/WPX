<?php
session_start();
if (!isset($_SESSION['user_id'])) {
    header("Location: login.php");
    exit;
}
?>
<?php include "../includes/header.php"; ?>

<head>
    <title>Dashboard</title>
    <style>
        .dash-modal {
            justify-self: center;
            align-items: center;
        }

        .dashboard {
            margin-top: 8rem;
            padding: 2rem;
            border-radius: 10px;
            width: 90%;
            max-width: 400px;
            text-align: center;
            justify-content: center;
        }

        .dashboard h2 {
            margin-bottom: 1.5rem;
            color: #333;
        }

        .dashboard a {
            display: block;
            margin: 0.5rem 0;
            padding: 0.75rem;
            background-color: #4a90e2;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            transition: background-color 0.3s ease;
            cursor: pointer;
        }

        .dashboard a:hover {
            background-color: #357ab7;
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

        form button {
            padding: 0.5rem 1rem;
            background-color: #4a90e2;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        form button:hover {
            background-color: #357ab7;
        }

        @media (max-width: 500px) {
            .dashboard {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="dash-modal">
        <div class="dashboard">
            <h2>Welcome, <?= htmlspecialchars($_SESSION['username']) ?></h2>
            <a id="openAddQuote">Add Quote</a>
            <a id="openAddEntry">Add Entry</a>
            <a href="logout.php">Logout</a>
        </div>
    </div>
    <!-- Quote Modal -->
    <div id="quoteModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('quoteModal')">&times;</span>
            <h2>Add Quote</h2>
            <form id="quoteForm">
                <label>Quote Date</label>
                <input type="date" name="quote_date" required>

                <label>Author</label>
                <input type="text" name="author">

                <label>English Quote</label>
                <textarea name="en" required></textarea>

                <label>Chinese Quote</label>
                <textarea name="cn"></textarea>

                <button type="submit">Submit</button>
            </form>
            <div id="quoteResult"></div>
        </div>
    </div>

    <!-- Add Entry Modal -->
    <div id="entryModal" class="modal">
        <div class="modal-content">
            <span class="modal-close" onclick="closeModal('entryModal')">&times;</span>
            <h2>Add Translation Entry</h2>
            <form id="entryForm">
                <label for="web_page">Web Page:</label>
                <input type="text" name="web_page" value="philosophers.php" required>

                <label for="element_id">Element ID:</label>
                <input type="text" name="element_id" required>

                <label for="en">English (en):</label>
                <textarea name="en" required></textarea>

                <label for="cn">Chinese (cn):</label>
                <textarea name="cn" required></textarea>

                <label for="kr">Korean (kr):</label>
                <textarea name="kr" required></textarea>

                <label for="jp">Japanese (jp):</label>
                <textarea name="jp" required></textarea>

                <div class="button-group">
                    <button type="submit">Add Entry</button>
                </div>
                <div id="entryResult" class="result"></div>
            </form>
        </div>
    </div>


    <script>
        function closeModal(id) {
            document.getElementById(id).style.display = "none";
        }

        document.getElementById('openAddQuote').addEventListener('click', () => {
            document.getElementById('quoteModal').style.display = 'flex';
        });

        document.getElementById('openAddEntry').addEventListener('click', () => {
            document.getElementById('entryModal').style.display = 'flex';
        });

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
            if (text.trim() === 'success') {
                resultDiv.innerHTML = "<p style='color:green;'>Quote added successfully!</p>";
                form.reset();
            } else {
                resultDiv.innerHTML = "<p style='color:red;'>" + text + "</p>";
            }
        });

        // Submit Add Entry Form
        document.getElementById('entryForm').addEventListener('submit', async function (e) {
            e.preventDefault();
            const form = e.target;
            const formData = new FormData(form);
            const resultDiv = document.getElementById('entryResult');

            const response = await fetch('../index/scripts/add-entry.php', {
                method: 'POST',
                body: formData
            });

            const text = await response.text();
            console.log('Response text:', text);
            if (text.trim() === 'success') {
                alert('Quote added successfully!');
                form.reset();
            } else {
                resultDiv.innerHTML = "<p style='color:red;'>" + text + "</p>";
            }
        });
        // Close modal when clicking outside the modal content
        window.addEventListener('click', function (event) {
            const quoteModal = document.getElementById('quoteModal');
            const entryModal = document.getElementById('entryModal');

            if (event.target === quoteModal) {
                quoteModal.style.display = "none";
            }

            if (event.target === entryModal) {
                entryModal.style.display = "none";
            }
        });

    </script>
</body>

<?php include "../includes/footer.php"; ?>