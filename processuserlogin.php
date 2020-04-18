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


if(isset($_POST['userid'])){
    
    $uname=$_POST['userid'];
    $password=$_POST['userpassword']; 
	$sql="select * from users where userid='".$uname."'AND userpassword='".$password."' limit 1";
   
 $result=mysqli_query($conn, $sql);
    
    if(mysqli_num_rows($result)==1){
        echo " You Have Successfully Logged in";
        exit();
    }
    else{
        echo " You Have Entered Incorrect Password";
        exit();
    }
        
}
?>