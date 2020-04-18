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
    $massageid= $_POST['massageid'];
    $toperson = $_POST['toperson'];
   $fromperson= $_POST['fromperson'];
    $massage = $_POST['massage'];




    $sql ="INSERT INTO `massage` (`massageid`, `fromperson`, `toperson`, `massage`) VALUES ('$massageid', '$fromperson', '$toperson', '$massage ')"; 
    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

$conn->close();
?>