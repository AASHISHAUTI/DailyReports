<?php
	require('insert.php');
    // If the values are posted, insert them into the database.
    if (isset($_POST['username']) && isset($_POST['password'])){
        $id = $_POST['id'];
	    $date = $_POST['dates'];
        $message = $_POST['message'];
 
        $query = "INSERT INTO `studdd` (id, dates, message) VALUES ('$id', '$date', '$message')";
        $result = mysqli_query($connection, $query);
        if($result){
            $smsg = "User Created Successfully.";
        }else{
            $fmsg ="User Registration Failed";
        }
    }
    ?>