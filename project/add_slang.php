<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
?>

<?php
// Role check (change as per your project's role management logic)

if (isset($_POST["submit"])) {
    $term = $_POST["term"];
    $definition = $_POST["definition"];
    $example = $_POST["example"];
    $source = "manual";  // Indicating manually added data

    $result = addSlangTerm($term, $definition, $example, $source);
    if ($result["status"]) {
        echo "Slang term added successfully!";
    } else {
        echo "Error: " . $result["error"];
    }
}

// HTML form
?>
<form method="POST">
    <label for="term">Term:</label>
    <input type="text" name="term" required />
    <label for="definition">Definition:</label>
    <textarea name="definition" required></textarea>
    <label for="example">Example:</label>
    <textarea name="example"></textarea>
    <input type="submit" name="submit" value="Add Slang Term" />
</form>
