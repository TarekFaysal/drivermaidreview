<?php
session_start();
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


if(isset($_POST['workerid'])){
    
    $uname=$_POST['workerid'];
    $password=$_POST['workerpassword'];
	
  $sql="SELECT * FROM `worker` WHERE workerid = '$uname' AND workerpassword = '$password' limit 1";
    
    $result=mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        $_SESSION['workerid']=$_POST['workerid'];
        header("location:worker.php");
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        header("location:workersignin.php?Incorrect= You entered incorrect password, Try again");
        exit();
    }
        
}
?>