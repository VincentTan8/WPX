<?php
include "../index/config/conf.php";

$tablename = $database . ".`wt_quotes`";
$sql = "SELECT ref_num, quote_date, author, en, cn FROM $tablename ORDER BY quote_date DESC";
$result = $conn->query($sql);
?>
<?php include "../includes/header.php"; ?>

<head>
    <title>Quote List</title>

    <!-- DataTables + Responsive CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

    <!-- jQuery + DataTables + Responsive JS -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <style>
        .quote-table {
            padding: 60px;
            margin-top: 8rem;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            padding: 0.75rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        th {
            background-color: #f4f4f4;
        }



        @media screen and (max-width: 768px) {
            .quote-table {
                padding: 20px;
            }
        }
    </style>
</head>

<body>
    <div class="quote-table">
        <h2 style="margin-bottom:2rem;">Quote of the Day</h2>

        <table id="quoteTable" class="display nowrap" style="width:100%;">
            <thead>
                <tr>
                    <th>Ref #</th>
                    <th>Date</th>
                    <th>Author</th>
                    <th>English</th>
                    <th>Chinese</th>
                </tr>
            </thead>
            <tbody>
                <?php if ($result && $result->num_rows > 0): ?>
                    <?php while ($row = $result->fetch_assoc()): ?>
                        <tr>
                            <td><?= $row['ref_num'] ?? '' ?></td>
                            <td><?= $row['quote_date'] ?? '' ?></td>
                            <td><?= $row['author'] ?? '' ?></td>
                            <td><?= $row['en'] ?? '' ?></td>
                            <td><?= $row['cn'] ?? '' ?></td>
                        </tr>
                    <?php endwhile; ?>
                <?php else: ?>
                    <tr>
                        <td colspan="5">No quotes found.</td>
                    </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>

    <script>
        $(document).ready(function () {
            $('#quoteTable').DataTable({
                responsive: true
            });
        });
    </script>
</body>

<?php include "../includes/footer.php"; ?>