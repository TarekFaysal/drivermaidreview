<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "workerreview";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


if (isset($_POST['postajob'])){
    $jobid = $_POST['jobid'];
    $userid = $_POST['userid'];
    $wtype = $_POST['wtype'];
    $salary = $_POST['salary'];
    $details = $_POST['details'];

    $sql = "INSERT INTO `jobs`(`jobid`, `userid`, `wtype`, `salary`, `details`) VALUES ('$jobid','$userid','$wtype','$salary','$details')";
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>