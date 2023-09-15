<?php
if(isset($_GET['file'])){
    $file = $_GET['file'];
    $filepath = $file;

    // Check if the file exists and is readable
    if (file_exists($filepath) && is_readable($filepath)) {
        // Set the appropriate headers for downloading
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename="' . basename($filepath) . '"');
        header('Content-Length: ' . filesize($filepath));

        // Output the file
        readfile($filepath);
        exit;
    } else {
        // File not found
        echo "File not found.";
    }
}
?>