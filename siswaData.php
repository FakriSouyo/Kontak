<?php

// Define an array with table information
$tableInfo = array(
    array(
        'id' => 1,
        'nama' => 'Fakhri Abdillah',
        'alamat' => 'Sleman',
        'telpon' => '08273627182'
    ),

    array(
        'id' => 1,
        'nama' => 'Isfan',
        'alamat' => 'Bantul',
        'telpon' => '08223242182'
    ),

    array(
        'id' => 1,
        'nama' => 'Bobi',
        'alamat' => 'Jogja',
        'telpon' => '08273211182'
    ),
    
    // Add more entries as needed
);

// Encode the array to JSON
$jsonData = json_encode($tableInfo);

// Check if encoding was successful
if ($jsonData !== false) {
    // Specify the filename for the JSON file
    $filename = 'siswa.json';

    // Save the JSON data to a file
    $result = file_put_contents($filename, $jsonData);

    // Check if saving to file was successful
    if ($result !== false) {
        echo 'JSON data successfully encoded and saved to ' . $filename;
    } else {
        echo 'Failed to save JSON data to file.';
    }
} else {
    // Handle the error
    echo 'JSON encoding failed.';
}

?>
