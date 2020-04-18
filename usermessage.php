<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Message to User</title>
  </head>
  <body>
    <h1>Message to User</h1>
	
 <?php require_once 'processadminmesssagetouser.php'; ?>
    <div class="row justify-content-center">
        <form action="processadminmesssagetouser.php" method="POST">

             <div class="form-group">
                <label>User ID</label>
                <input type="text" name="toperson" class="form-control" placeholder="Enter your Id">
            </div>
            <div class="form-group">
                <label>Message</label>
                <input type="text" name="massage" class="form-control" placeholder="Enter your message">
            </div>
            
           
            
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="submit">submit</button>
            </div>
        </form>
    </div>
<br/><br/>
<b>Reply Users:</b>
    
	
<?php
//Connect to your database....
$con=mysqli_connect("localhost","root","root","workerreview");
$contact_array = mysqli_query($con,"SELECT * FROM massage WHERE toperson = '1234' ORDER BY massageid ASC");
while($row = mysqli_fetch_array($contact_array))
{
echo"User ID: ";
echo $row['fromperson'];
echo"<br/>";
echo"Message: ";
echo $row['massage'];
echo"<br/>";

}
?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>