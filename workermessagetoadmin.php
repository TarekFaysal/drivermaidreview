<?php session_start();
      if(isset($_SESSION['workerid'])){ 
        
        $workerid = $_SESSION['workerid'];
        
?>


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


if (isset($_POST['submit'])){
    $toperson = 1234;
   $fromperson= $workerid;
    $massage = $_POST['massage'];




    $sql ="INSERT INTO `massage` ( `fromperson`, `toperson`, `massage`) VALUES ( '$fromperson', '$toperson', '$massage ')"; 
    if ($conn->query($sql) === TRUE) {
        header("location:workermassage.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>
<?php  } ?>