<?php
    mysqli_report(MYSQLI_REPORT_OFF);
    /* @ is used to suppress warnings */
    $conn = @new mysqli('localhost', 'admin', 'admin', 'bill');
    if ($conn->connect_error) {
        /* Use your preferred error logging method here */
        error_log('Connection error: ' . $conn->connect_error);
    }
?>
