<?php
require_once(__DIR__ . "/../../partials/nav.php");
?>

<?php
function apiWords()
{
    $source = "API";
    $wordsObj = getRandomWordsFromApi();
    $wordsObj = json_decode($wordsObj, true);
    foreach ($wordsObj['list'] as $wordObj) {
        $term = $wordObj['word'];
        $definition = $wordObj['definition'];
        $example = $wordObj['example'];
        addSlangTerm($term, $definition, $example, $source);
        echo "<ul>";
        echo "<li>You have added <b>\"$term\"</b> to the slang table</li>";
        echo "</ul>";
    }
}

apiWords();
