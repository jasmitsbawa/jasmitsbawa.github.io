<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

// Display success or error messages
if (isset($_GET['success'])) {
    echo "<p style='color: green;'>" . htmlspecialchars($_GET['success']) . "</p>";
}

if (isset($_GET['error'])) {
    echo "<p style='color: red;'>" . htmlspecialchars($_GET['error']) . "</p>";
}

// Handle form submission
if ($_SERVER["REQUEST_METHOD"] == "GET") {
    $filter = $_GET['filter'] ?? '';
    $sort = $_GET['sort'] ?? 'created';
    $limit = $_GET['limit'] ?? 10;
    $source = $_GET['source'] ?? '';

    // Get slang terms based on filters
    $slangTerms = getSlangTerms($filter, $sort, $limit, $source);
    $totalSlangTerms = getTotalSlangTermsCount($filter, $source);
}

?>

<!-- Filter Form -->
<form method="get" action="">
    <label for="filter">Search Term:</label>
    <input type="text" name="filter" id="filter" value="<?= htmlspecialchars($filter) ?>">

    <label for="limit">Show:</label>
    <input type="number" name="limit" id="limit" value="<?= $limit ?>" min="1" max="100">

    <label for="source">Source:</label>
    <select name="source" id="source">
        <option value="">All</option>
        <option value="manual" <?= $filter == 'manual' ? 'selected' : '' ?>>Manual</option>
        <option value="API" <?= $filter == 'API' ? 'selected' : '' ?>>API</option>
    </select>

    <button type="submit">Filter</button>
    <button type="button" onclick="window.location.href='?'">Clear Filters</button>
</form>


<!-- Slang Terms Table -->
<?php if (empty($slangTerms)) : ?>
    <p>There are no terms based on this filter.</p>
<?php else : ?>
    <p>Showing <?= count($slangTerms) ?> of <?= $totalSlangTerms ?> terms.</p>
    <table class='slang-terms-table'>
        <tr><th>Term</th><th>Source</th><th>Actions</th></tr> <!-- Table headers -->
        <?php
        foreach ($slangTerms as $term) {
            echo "<tr>";
            echo "<td>" . htmlspecialchars($term['term']) . "</td>";
            echo "<td>" . htmlspecialchars($term['source']) . "</td>";
            echo "<td>";

            // Link to view details, accessible to everyone
            echo "<a href='view_slang.php?id=" . $term['id'] . "'>View Details</a>";
            
            echo " | <a href='add_to_favorites.php?slang_id=" . $term['id'] . "'>Add to Favorites</a>";
            
            // Edit and Delete links for admin users
            if (has_role("Admin")) {
                echo " | <a href='edit_slang.php?id=" . $term['id'] . "'>Edit</a>";
                //echo " | <a onclick= href='list_slang.php?delete_id=" . $term['id'] . "' onclick='return confirm(\"Are you sure you want to delete this term?\");'>Delete</a>";
                echo " | <button onclick='delete_slang(" . $term['id'] . ")'>Delete</button>";
            }

            echo "</td>";
            echo "</tr>";
        }
        ?>
    </table>
<?php endif; ?>

<script>
   function delete_slang(id) {
        const confirmDelete = confirm("Are you sure you want to delete this term?");
        if (confirmDelete) {
            const form = document.getElementsByTagName('form')[0]
            const formData = new FormData(form);
            let hrefLink = `delete_slang.php?delete_id=${id}`
            formData.forEach(function(value, key){
                hrefLink+= `&${key}=${value}`
            });

            window.location.href = hrefLink;
        } else {
            console.log("Deletion canceled");
        }
    }
</script>
