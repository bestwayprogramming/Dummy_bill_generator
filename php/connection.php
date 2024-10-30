<?php

    /* @ is used to suppress warnings */
    $conn = @new mysqli('localhost', 'root', '', 'bill');
    // if the connection fails send a message
    if (!$conn) {
        die("Connection failed. Notify Administrator.");
    }
?>
