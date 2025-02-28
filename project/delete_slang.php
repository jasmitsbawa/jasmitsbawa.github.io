<?php
require_once(__DIR__ . "/../../partials/nav.php");

if (!has_role("Admin")) {
    echo "You do not have permission to perform this action.";
    exit;
}

function delete_slang($id){
    if ($id && is_numeric($id)) {
        $result = deleteSlangTerm($id); // Implement this function in slang_helpers.php
        if ($result["status"]) {
            echo "Slang term deleted successfully.";
        } else {
            echo "Error: " . $result["error"];
        }
    } else {
        echo "Invalid ID.";
    }
}

$delete_id = $_GET['delete_id'] ?? '';
if ($delete_id != ''){
    delete_slang($delete_id);
}

$filter = $_GET['filter'] ?? '';
$sort = $_GET['sort'] ?? 'created';
$limit = $_GET['limit'] ?? 10;
$source = $_GET['source'] ?? '';

$link="list_slang.php?filter=" .$filter."&limit=".$limit."&source=".$source."&sort=".$sort;
header("Location: ".$link);
exit;
?>
