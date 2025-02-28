<?php
require(__DIR__ . "/../../partials/nav.php");

if (!has_role("Admin")) {
    echo "You do not have permission to access this page.";
    exit;
}

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

if (isset($_POST["submit"])) {
    $term = $_POST["term"];
    $definition = $_POST["definition"];
    $example = $_POST["example"];

    $result = updateSlangTerm($id, $term, $definition, $example);
    if ($result["status"]) {
        echo "Slang term updated successfully!";
    } else {
        echo "Error: " . $result["error"];
    }
}

// Prefill form with existing data
?>
<form method="POST">
    <label for="term">Term:</label>
    <input type="text" name="term" value="<?php echo htmlspecialchars($slangTerm['term']); ?>" required />
    <label for="definition">Definition:</label>
    <textarea name="definition" required><?php echo htmlspecialchars($slangTerm['definition']); ?></textarea>
    <label for="example">Example:</label>
    <textarea name="example"><?php echo htmlspecialchars($slangTerm['example']); ?></textarea>
    <input type="submit" name="submit" value="Update Slang Term" />
</form>
