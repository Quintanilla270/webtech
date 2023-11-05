<?php
// Read the contents of the user_data.txt file
$data = file_get_contents('private/user_data.txt');

// Check if the file contains data
if ($data) {
    // Split the data into an array of lines
    $lines = explode("\n", $data);

    // Display the data in a table format
    echo "<table>";
    echo "<tr><th>First Name</th><th>Last Name</th></tr>";

    foreach ($lines as $line) {
        $parts = explode(",", $line);
        $firstName = $parts[0];
        $lastName = $parts[1];

        echo "<tr><td>$firstName</td><td>$lastName</td></tr>";
    }

    echo "</table>";
} else {
    echo "No data found in the user_data.txt file.";
}
?>