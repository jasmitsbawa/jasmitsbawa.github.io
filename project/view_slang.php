<?php
require(__DIR__ . "/../../partials/nav.php");

$id = $_GET['id'] ?? null;
if (!$id || !is_numeric($id)) {
    header("Location: list_slang.php?error=Invalid ID");
    exit;
}

$slangTerm = getSlangTermById($id);
if (!$slangTerm) {
    header("Location: list_slang.php?error=Slang term not found");
    exit;
}

// Display the slang term details
echo "<div class='term-details'>";
echo "<table>";
echo "<tr><th>Term</th><td>" . htmlspecialchars($slangTerm['term']) . "</td></tr>";
echo "<tr><th>Definition</th><td>" . htmlspecialchars($slangTerm['definition']) . "</td></tr>";
echo "<tr><th>Example</th><td>" . htmlspecialchars($slangTerm['example']) . "</td></tr>";
echo "<tr><th>Source</th><td>" . htmlspecialchars($slangTerm['source']) . "</td></tr>";
echo "</table>";

// Links based on user role
if (has_role("Admin")) {
    echo "<a href='edit_slang.php?id=" . $slangTerm['id'] . "'>Edit</a> ";
    echo "<a href='delete_slang.php?delete_id=" . $slangTerm['id'] . "'>Delete</a>";
}

echo "</div>";
?>

<a href="list_slang.php" class="back-button">Back to List</a>