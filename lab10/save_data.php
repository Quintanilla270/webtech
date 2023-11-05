<?php
// Check if the post request contains first and last name
if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['first_name']) && isset($_POST['last_name'])) {
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];

    // Create and append data to a file in the private directory
    $data = "$first_name,$last_name\n";
    $filename = 'private/user_data.txt';

    // Check if the directory exists
    if (!is_dir('private')) {
        mkdir('private');
    }

    // Open the file for appending
    $file = fopen($filename, 'a');

    // Write the data to the file
    fwrite($file, $data);

    // Close the file
    fclose($file);

    echo "Data saved to $filename";
} else {
    echo "Error: Missing first and last name in the POST request.";
}
?>