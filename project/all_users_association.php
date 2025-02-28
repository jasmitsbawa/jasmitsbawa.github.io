<?php
require_once(__DIR__ . "/../../partials/nav.php");
if (!has_role("Admin")) {
    echo "You do not have permission to perform this action.";
    exit;
}
//jb756 12/14/23
// Fetch data
$db = getDB();
$query = "SELECT slang_terms.term, GROUP_CONCAT(Users.username SEPARATOR ', ') AS usernames, COUNT(user_favorites.user_id) AS user_count 
          FROM user_favorites 
          JOIN slang_terms ON user_favorites.slang_id = slang_terms.id 
          JOIN Users ON user_favorites.user_id = Users.id 
          GROUP BY slang_terms.term";
$stmt = $db->prepare($query);
$stmt->execute();
$results = $stmt->fetchAll(PDO::FETCH_ASSOC);

// Count the total number of associations
$totalAssociations = count($results);
?>

<h2>All Users Associations</h2>
<p>Showing <?= count($results) ?> of <?= $totalAssociations ?> associations.</p>
<table class='admin-associations-table'>
    <tr>
        <th>Term</th>
        <th>Usernames</th>
        <th>User Count</th>
        <th>Actions</th>
    </tr>
    <?php foreach ($results as $word): ?>
        <tr>
            <td><?= htmlspecialchars($word['term']) ?></td>
            <td><?= implode(", ", array_map(fn($username) => "<a href='profile.php?username=$username'>$username</a>", explode(",", $word['usernames']))) ?></td>
            <td><?= $word['user_count'] ?></td>
            <td>
                <a href='view_slang.php?id=<?= $word['term_id'] ?>'>View Details</a> |
                <a href='all_users_association.php?delete_id=<?= $word['term_id'] ?>' onclick='return confirm("Are you sure you want to delete this association?");'>Delete Association</a>
            </td>
        </tr>
    <?php endforeach; ?>
</table>

<?php
if (isset($_GET['delete_id'])) {
    $term_id = $_GET['delete_id'];
    if (deleteAssociation($term_id)) {
        echo "<p style='color: green;'>Association deleted.</p>";
    } else {
        echo "<p style='color: red;'>Error deleting association.</p>";
    }
    // Refresh the page
    header("Refresh:0");
    exit;
}

?>

