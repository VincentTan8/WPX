<?php
$ref = $_GET['ref'] ?? null;
if (!$ref) {
    echo "No news reference provided.";
    exit;
}
?>

<!-- Your HTML structure -->
<div id="page-data" data-lang="_en" data-ref="<?php echo htmlspecialchars($ref); ?>">
</div>

<!-- Page content -->
<section>
    <h1 id="news-title"></h1>
    <p id="news-description"></p>
    <p id="news-category"></p>
    <p id="news-date-posted"></p>

    <img id="news-thumbnail" alt="News Thumbnail" />
</section>

<!-- Dynamically rendered sections -->
<div id="news-container" class="news-sections"></div>

<!-- Include your script -->
<script src="scripts/news.js"></script>