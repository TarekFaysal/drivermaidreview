<?php session_start();
      if(isset($_SESSION['workerid'])){ 
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
    <title>Maid Job List</title>
  </head>
  <body>
  <div class="container">
  <a class="btn btn-outline-info" href="maidjobs.php" role="button">Maid Job List</a>
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
      $sql = "SELECT users.username, users.userphone, users.useradress, jobs.salary, jobs.details, jobs.wtype FROM jobs,users WHERE jobs.userid = users.userid";
      $result = mysqli_query($conn,$sql) or die(mysqli_erro($mysqli));
    ?>
    <div class="rpw justify-content-center">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Posted By</th>
            <th>Phone No.</th>
            <th>Adress</th>
            <th>Salary</th>
            <th>Details</th>
          </tr>
        </thead>
    <?php 
      while($row = $result->fetch_assoc()):?>
        <?php if($row['wtype']==0){?>
        <tr>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['userphone']; ?></td>
          <td><?php echo $row['useradress']; ?></td>
          <td><?php echo $row['salary']; ?></td>
          <td><?php echo $row['details']; ?></td>
        </tr>
        <?php } ?>
      <?php endwhile; ?>
      </table>
      <a href="worker.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Go Back</a>    
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