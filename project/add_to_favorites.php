<?php
require_once(__DIR__ . "/../../partials/nav.php");
is_logged_in(true);
//jb756@njit.edu
if (isset($_GET['slang_id'])) {
    $slang_id = $_GET['slang_id'];
    $user_id = get_user_id(); // Retrieve user ID using the function from user helpers

    if ($user_id) {
        // Call the function to add the word to favorites
        $result = addFavoriteWord($user_id, $slang_id);
        
        if ($result["status"]) {
            // Redirect with success message
            header("Location: list_slang.php?success=" . urlencode($result["message"]));
            exit;
        } else {
            // Redirect with error message
            header("Location: list_slang.php?error=" . urlencode($result["error"]));
            exit;
        }
    } else {
        // Handle case where user ID is not found
        header("Location: list_slang.php?error=Unable to identify user");
        exit;
    }
} else {
    // Redirect back if slang_id is not set
    header("Location: list_slang.php?error=Invalid request");
    exit;
}
?>
