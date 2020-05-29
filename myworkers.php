<?php session_start();
      if(isset($_SESSION['userid'])){ 
        $userid= $_SESSION['userid'];
        ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>My workers</title>
  </head>
  <body>
  <a class="btn btn-outline-info" href="myworkers.php" role="button">My Workers</a>
  <div class="container">
    
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
      $sql = "SELECT * FROM `contract`, worker WHERE userid='$userid' and contract.workerid = worker.workerid";
      $result = mysqli_query($conn,$sql) or die(mysqli_erro($mysqli));
    ?>
    <?php 
      if(isset($_POST['reviewbtn'])){
        $workerid= $_SESSION['workerid'];
        $userid= $_SESSION['userid'];
        $review= $_POST['review'];
  
        $sql = "INSERT INTO `workerreview`(`userid`, `workerid`, `review`) VALUES ('$userid','$workerid','$review')";
        if ($conn->query($sql) === TRUE) {
         ?> <h2> Thanks For The Review! </h2><?php
        
        //check if the records exist to delete or not
        $check = "SELECT * from `contract` where userid='$userid' and workerid= '$workerid'";
        $result2 = mysqli_query($conn,$check) or die(mysqli_erro($mysqli));
        //$check = mysql_query("Select * from contract where workerid= '$workerid'") or die("not found".mysql_error());
      
        //if ($conn->query($check) === TRUE) {
          if($result2){
          //means record found and can be deleted
          $sql2 = "DELETE FROM `contract` WHERE userid='$userid' and workerid='$workerid'";
          //$queryDelete = mysql_query("DELETE FROM `contract` WHERE userid='$userid' and workerid='$workerid'") or die("not deleted".mysql_error());
          if ($conn->query($sql2) === TRUE) {
          }
        }
        else{
          //record doesn't exists warning
        }

      
        } else {
          echo "Error: " . $sql . "<br>" . $conn->error;
        }

        
      } 
      
      
      ?>
      
    
    


    <?php
      if(isset($_POST['endjobbtn'])){
        $workerid= $_POST['endjobbtn'];
        $_SESSION['workerid']=$workerid;
        $userid= $_SESSION['userid'];
        ?>
        <form action="" method="POST">
		
		        <div class="form-group">
            <h2> Please Give Review for <?php echo $workerid?> </h2>
                <input type="text" name="review" class="form-control" placeholder="Give review in details..">
            </div>
			
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="reviewbtn" value="<?php echo $row['workerid'];?>">Save Review</button>
            </div>
		</form>
        
      <?php } ?>

    <div class="rpw justify-content-center">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Adress</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Worker Type</th>
            <th>End Job</th>
          </tr>
        </thead>
    <?php 
      while($row = $result->fetch_assoc()):?>
    
        <tr>
        <form action="" method="POST" role="form">
          <td><?php echo $row['workername']; ?></td>
          <td><?php echo $row['workerphone']; ?></td>
          <td><?php echo $row['workeradress']; ?></td>
          <td><?php echo $row['workerage']; ?></td>
          <td><?php 
            if($row['workergender']==1){
              echo "Male"; 
            }else{
              echo "Female";
            }
              ?></td>
          <td><?php 
            if($row['wtype']==1){
              echo "Driver"; 
            }else{
              echo "Maid";
            }
              ?></td>
          <td>
            
                <button type="submit" class="btn btn-primary btn-lg active" role="button" name="endjobbtn" value="<?php echo $row['workerid'];?>">End Job</button>
		      
          </td>
          </form>
        </tr>
    
      <?php endwhile; ?>
      </table>
      <a href="user.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Go Back</a>    
    </div>
    </div>
    <?php
      function pre_r( $array ) {
        echo '<pre>';
        print_r($array);
        echo '</pre>';
      }

    ?>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>

</html>

    <?php } ?>