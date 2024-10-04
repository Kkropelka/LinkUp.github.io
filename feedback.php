<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $feedback = $_POST['feedback'];

    // Save feedback in a file or database
    $file = 'feedback.txt';
    file_put_contents($file, $feedback.PHP_EOL, FILE_APPEND | LOCK_EX);

    echo "Feedback saved!";
}
?>
