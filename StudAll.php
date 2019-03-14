<?php
$servername = "127.0.0.1";
$username = "root";
$password = "root";
$dbname = "assignmentiit";
$userid = $_POST['userid'];
$date = $_POST['dates'];
$message = $_POST['message'];

session_start();
$_SESSION['user'];
$name = $_SESSION['user'];

 
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
  
	   
        $query = "INSERT INTO `studdd` (userid, dates, message) VALUES ('$userid', '$date', '$message')";
        $result = mysqli_query($conn, $query);

        
//$sql = "SELECT `id`, `fname`, `sessions`, `lecname`, `date`, `stime`, `etime`, `note`, `task` FROM `endsession` WHERE `id`='$name'";
//$result = $conn->query($sql);

if ($result->num_rows >= 0) {

    echo "Successfully Value Stored.";

} else {
    echo "0 results";
}
echo '<a href="StudFeedback.php"><h2 align="center">Home</h2></a>';
echo '<a href="Choose.php"><h2 align = "center">Logout</h2></a>';
$conn->close();
?>