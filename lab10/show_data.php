<?php

// Open the file in read mode
$file = fopen("data.txt", "r");

// Read the file contents into an array
$data = [];
while (($line = fgets($file)) !== false) {
    $data[] = $line;
}

// Close the file
fclose($file);

// Create a table header
echo "<table>";
echo "<tr><th>Line Number</th><th>Line Content</th></tr>";

// Iterate through the data array and display each line in a table row
for ($i = 0; $i < count($data); $i++) {
    echo "<tr>";
    echo "<td>" . ($i + 1) . "</td>";
    echo "<td>" . $data[$i] . "</td>";
    echo "</tr>";
}

// Close the table
echo "</table>";
?>