<?php
include "../index/config/conf.php";

$tablename = $database . ".`wt_quotes`";
$sql = "SELECT ref_num, quote_date, author, en, cn FROM $tablename ORDER BY quote_date DESC";
$result = $conn->query($sql);
?>
<?php include "../includes/header.php"; ?>

<head>
    <title>Quote List</title>

    <!-- DataTables CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.6/css/jquery.dataTables.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/responsive/2.5.0/css/responsive.dataTables.min.css">

    <!-- JS libraries -->
    <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.6/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/responsive/2.5.0/js/dataTables.responsive.min.js"></script>

    <style>
        .quote-table {
            padding: 60px;
            margin-top: 8rem;

        }


        @media screen and (max-width: 768px) {
            .quote-table {
                padding: 20px;
            }
        }

        /* Allow wrapping only for English and Chinese (columns 4 and 5) */
        #quoteTable td:nth-child(4),
        #quoteTable td:nth-child(5) {
            white-space: normal !important;
            word-wrap: break-word;
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