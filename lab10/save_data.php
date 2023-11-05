<?php

// Check if the form has been submitted
if (isset($_POST['submit'])) {

    // Get the form data
    $data = $_POST['data'];

    // Write the data to the file
    $filePath = '/path/to/file.txt';
    $file = fopen($filePath, 'a');

    fwrite($file, $data);
    fclose($file);

    // Display a success message
    echo 'The data was successfully written to the file.';
}

?>