<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);

//jb756 12/14/2023

$user_id = get_user_id(); // Retrieve user ID

// Handle form submission for filters
$filter = $_GET['filter'] ?? '';
$sort = $_GET['sort'] ?? 'created';
$limit = $_GET['limit'] ?? 10;
$source = $_GET['source'] ?? '';

// Fetch the user's favorite words based on filters
$favorites = getUserFavorites($user_id, $filter, $sort, $limit, $source);

// Handle deletion of a favorite
if (isset($_GET['delete_id'])) {
    $slang_id = $_GET['delete_id'];
    if (deleteUserFavorite($user_id, $slang_id)) {
        echo "<p style='color: green;'>Favorite word deleted.</p>";
    } else {
        echo "<p style='color: red;'>Error deleting favorite word.</p>";
    }
    // Fetch updated favorites list after deletion
    $favorites = getUserFavorites($user_id, $filter, $sort, $limit, $source);
}

if (isset($_GET['delete_all'])) {
    $stmt = $db->prepare("DELETE FROM user_favorites WHERE user_id = :user_id");
    $stmt->execute([":user_id" => $user_id]);
    if ($stmt->rowCount() > 0) {
        echo "<p style='color: green;'>All favorite words deleted.</p>";
    } else {
        echo "<p style='color: red;'>Error deleting favorite words.</p>";
    }
    // Refresh the favorites list
    $favorites = getUserFavorites($user_id, $filter, $sort, $limit, $source);
}



?>

<h2>Your Favorite Words</h2>

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
    <button type="button" onclick="window.location.href='favorites.php'">Clear Filters</button>
    <input type="submit" name="delete_all" value="Delete All Favorites" onclick="return confirm('Are you sure you want to delete all favorite words?');">
</form>

<!-- Favorites Terms Table -->
<?php if (empty($favorites)) : ?>
    <p>There are no favorite words based on this filter.</p>
<?php else : ?>
    <p>Showing <?= count($favorites) ?> of <?= getTotalFavoritesCount($user_id) ?> terms.</p>
    <table class='slang-terms-table'>
        <tr><th>Term</th><th>Source</th><th>Actions</th></tr>
        <?php foreach ($favorites as $word): ?>
    <tr>
        <td><?= htmlspecialchars($word['term']) ?></td>
        <td><?= htmlspecialchars($word['source']) ?></td>
        <td>
            <a href='view_slang.php?id=<?= $word['id'] ?>'>View Details</a> |
            <a href='favorites.php?delete_id=<?= $word['id'] ?>&<?= http_build_query(['filter' => $filter, 'sort' => $sort, 'limit' => $limit, 'source' => $source]) ?>' onclick='return confirm("Are you sure you want to remove this word from favorites?");'>Remove from Favorites</a>
        </td>
    </tr>
<?php endforeach; ?>
    </table>
<?php endif; ?>
