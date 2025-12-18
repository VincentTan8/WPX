<?php
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

if (!isset($_SESSION)) {
    session_start();
    ob_start();
}

if (isset($_SESSION['lang']) and $_SESSION['lang'] == 'CN') {
    $lang = '_cn';
} else {
    $_SESSION['lang'] = 'EN';
    $lang = '_en';
}

// include "../includes/menu_bar_reset.php";
// $menu_bar4 = "active";  //change to which header item

$_SESSION['active_page'] = 'wine-list';  //change to whichever page name

// include "../includes/header.php";
include "../connections/dbname.php";

$limit = 10;
$page = isset($_GET['page']) ? max(1, (int) $_GET['page']) : 1;
$offset = ($page - 1) * $limit;

$search = $_GET['search'] ?? '';
$searchSql = '';
$params = [];
$types = '';

if ($search) {
    $searchSql = "WHERE pr.full_name LIKE ? OR pr.email LIKE ? OR pr.order_id LIKE ? OR pr.intent_id LIKE ?";
    $like = "%$search%";
    $params = [$like, $like, $like, $like];
    $types = "ssss";
}

// Count total rows
$countSql = "SELECT COUNT(*) FROM wt_payment_records pr $searchSql";
$stmt = $conn->prepare($countSql);
if ($search)
    $stmt->bind_param($types, ...$params);
$stmt->execute();
$stmt->bind_result($totalRows);
$stmt->fetch();
$stmt->close();

$totalPages = ceil($totalRows / $limit);

// Fetch paginated records
$idSql = "
    SELECT pr.intent_id
    FROM wt_payment_records pr
    $searchSql
    ORDER BY pr.id DESC
    LIMIT ? OFFSET ?
";

$stmt = $conn->prepare($idSql);
if ($search) {
    $bindTypes = $types . "ii";
    $bindValues = array_merge($params, [$limit, $offset]);
    $stmt->bind_param($bindTypes, ...$bindValues);
} else {
    $stmt->bind_param("ii", $limit, $offset);
}
$stmt->execute();
$stmt->bind_result($intent_id);

$ids = [];
while ($stmt->fetch()) {
    $ids[] = $intent_id;
}
$stmt->close();

$placeholders = implode(',', array_fill(0, count($ids), '?'));

$sql = "
    SELECT
        pr.*,
        wg.full_name AS guest_name,
        wg.email AS guest_email,
        wg.mobile_number AS guest_mobile,
        wg.referred_by,
        woi.kid_number,
        woi.dietary
    FROM wt_payment_records pr
    LEFT JOIN wt_wine_guest wg ON wg.intent_id = pr.intent_id
    LEFT JOIN wt_wine_other_info woi ON woi.intent_id = pr.intent_id
    WHERE pr.intent_id IN ($placeholders)
    ORDER BY pr.id DESC
";

$stmt = $conn->prepare($sql);
$types = str_repeat('s', count($ids));
$stmt->bind_param($types, ...$ids);

$stmt->execute();
$result = $stmt->get_result();

$data = [];
while ($row = $result->fetch_assoc()) {
    $id = $row['intent_id'];
    if (!isset($data[$id])) {
        $data[$id] = [
            'main' => $row,
            'guests' => [],
            'other' => [
                'kid_number' => $row['kid_number'],
                'dietary' => $row['dietary']
            ]
        ];
    }

    if ($row['guest_name']) {
        $data[$id]['guests'][] = [
            'name' => $row['guest_name'],
            'email' => $row['guest_email'],
            'mobile' => $row['guest_mobile']
        ];
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="style.css" />
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<body>
    <form method="GET" class="search-box">
        <input type="text" name="search" placeholder="Search name, email, order ID..."
            value="<?= htmlspecialchars($search) ?>">
        <button type="submit">Search</button>
    </form>

    <div class="table-wrapper">
        <table class="data-table">
            <thead>
                <tr>
                    <th>Order ID</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Mobile</th>
                    <th>Amount</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($data as $row):
                    $p = $row['main']; ?>
                    <tr>
                        <td class="custom-td" data-label="Order ID"><?= $p['order_id'] ?></td>
                        <td class="custom-td" data-label="Name"><?= htmlspecialchars($p['full_name']) ?></td>
                        <td class="custom-td" data-label="Email"><?= htmlspecialchars($p['email']) ?></td>
                        <td class="custom-td" data-label="Mobile"><?= $p['mobile_number'] ?></td>
                        <td class="custom-td" data-label="Amount"><?= $p['currency'] ?>
                            <?= number_format($p['amount'], 0) ?>
                        </td>
                        <td class="custom-td"><button onclick="toggle('<?= $p['intent_id'] ?>')">View</button></td>
                    </tr>

                    <tr class="details" id="<?= $p['intent_id'] ?>">
                        <td class="details-td" colspan="6">
                            <div class="details-card">
                                <div class="details-section">
                                    <h4>Guests</h4>
                                    <ul class="guest-list">
                                        <?php foreach ($row['guests'] as $g): ?>
                                            <li>
                                                <span class="guest-name"><?= htmlspecialchars($g['name']) ?></span>
                                                <span class="guest-meta">
                                                    <?= htmlspecialchars($g['email']) ?> • <?= htmlspecialchars($g['mobile']) ?>
                                                </span>
                                            </li>
                                        <?php endforeach;
                                        if (empty($row['guests']))
                                            echo '<li class="empty">None</li>'; ?>
                                    </ul>
                                </div>

                                <div class="details-grid">
                                    <div>
                                        <strong>Transaction Date</strong>
                                        <p><?= htmlspecialchars($p['transaction_date'] ?: '-') ?></p>
                                    </div>

                                    <div>
                                        <strong>Referred By</strong>
                                        <p><?= htmlspecialchars($p['referred_by'] ?: '-') ?></p>
                                    </div>

                                    <div>
                                        <strong>Kids</strong>
                                        <p><?= $row['other']['kid_number'] ?? '-' ?></p>
                                    </div>

                                    <div>
                                        <strong>Dietary Restriction</strong>
                                        <p><?= htmlspecialchars($row['other']['dietary'] ?? '-') ?></p>
                                    </div>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>

    <div class="pagination">
        <?php for ($i = 1; $i <= $totalPages; $i++): ?>
            <a class="<?= $i == $page ? 'active' : '' ?>"
                href="?page=<?= $i ?>&search=<?= urlencode($search) ?>"><?= $i ?></a>
        <?php endfor; ?>
    </div>

    <script src="scripts/list.js"></script>

    <div id="page-data" data-page="wine-list" data-lang="<?php echo $lang; ?>"></div> <!-- change to current page -->
</body>

</html>