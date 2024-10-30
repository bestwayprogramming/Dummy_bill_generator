<?php
include '../connection.php';
$uname = $_POST['uname'];
$email_id = $_POST['email_id'];
$date = $_POST['date'];
$time = $_POST['time'];
$item_name = $_POST['item_name'];

$result = $conn->query("INSERT INTO `detail` (`id`, `uname`, `email_id`, `date`, `time`, `itemdesc`)
    VALUES ( NULL, '$uname', '$email_id', '$date', '$time','$item_name')");

if ($result === true) {
    include '../../starbucksbillgenerate.php';
} else {
    echo "Error " . $result . $conn->error;
}
?>
