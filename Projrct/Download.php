<?php
include 'Connection.php';
if(isset($_GET['ID'])){
    $ID= $_GET['ID'];
    $result = "SELECT * FROM files WHERE ID=$ID";
    $file = mysqli_fetch_assoc($result);
    $fileDestination = 'uploads/' . $file['name'];
    if (file_exists($fileDestination)) {
        header('Content-Description: File Transfer');
        header('Content-Type: application/octet-stream');
        header('Content-Disposition: attachment; filename=' . basename($fileDestination));
        header('Expires: 0');
        header('Cache-Control: must-revalidate');
        header('Pragma: public');
        header('Content-Length: ' . filesize('uploads/' . $file['name']));
        readfile('uploads/' . $file['name']);

        // Now update downloads count
        $newCount = $file['downloads'] + 1;
        $updateQuery = "UPDATE files SET downloads=$newCount WHERE ID=$ID";
        mysqli_query($conn, $updateQuery);
        exit;
    }
}