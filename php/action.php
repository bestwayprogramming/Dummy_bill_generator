<?php
    include 'connection.php';
    $uname=$_POST['uname'];
    $email_id=$_POST['email_id'];
    $date=$_POST['date'];
    $time=$_POST['time'];
    $item_name=$_POST['item_name'];

    $query = "INSERT INTO `detail` (`id`, `uname`, `email_id`, `date`, `time`, `itemdesc`) 
    VALUES ( '', '$uname', '$email_id', '$date', '$time','$item_name')";

    if($conn->query($query)===true){
       include '../pdf.php';
    }else{
        echo "Error ".$query.$conn->error;
    }
?>