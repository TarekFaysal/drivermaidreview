<?php session_start();
      if(isset($_SESSION['userid'])){ 
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
    <title>Maids List</title>
  </head>
  <body>
  <a class="btn btn-outline-info" href="lookingformaids.php" role="button">Maids List</a>
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
      $sql = "SELECT * FROM worker";
      $result = mysqli_query($conn,$sql) or die(mysqli_erro($mysqli));
    ?>
    <?php
      if(isset($_POST['hirebtn'])){
        $workerid= $_POST['hirebtn'];
        $userid= $_SESSION['userid'];
        $sql = "INSERT INTO `contract`(`userid`, `workerid`) VALUES ('$userid','$workerid')";
    if ($conn->query($sql) === TRUE) {
      echo "Congratulation! You just hired ". $workerid;
    } else {
      echo "Sorry! You already hired ". $workerid;
    }
      }

    ?>
    <?php
      if(isset($_POST['reviewbtn'])){
        $workerid= $_POST['reviewbtn'];
        $userid= $_SESSION['userid'];
        
        ?>
        <div class="rpw justify-content-center">
        <h2> Review Of <?php echo $workerid?> </h2>
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Reviewed By</th>
            <th>Review</th>
          </tr>
        </thead>
        <?php
        $sql4 = "SELECT * FROM workerreview where workerid = '".$workerid."'";
        $result4 = mysqli_query($conn,$sql4) or die(mysqli_erro($mysqli));
        while($row = $result4->fetch_assoc()):?>
         
          <tr>
            <td><?php echo $row['userid']; ?></td>
            <td><?php echo $row['review']; ?></td>
            </tr>
           
      <?php endwhile; ?>
      </table>
            </div><?php
       

   
      }

    ?>

    <div class="rpw justify-content-center">
      <table class="table">
        <thead class="thead-dark">
          <tr>
            <th>Name</th>
            <th>Phone</th>
            <th>Adress</th>
            <th>Age</th>
            <th>Gender</th>
            <th>Minimum Wage</th>
            <th>Review</th>
            <th>Hire</th>
          </tr>
        </thead>
    <?php 
      while($row = $result->fetch_assoc()):?>
        <?php if($row['wtype']==0){?>
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
            }?></td>
          <td><?php echo $row['minimumwage']; ?></td>
          <td>
              
              <button type="submit" class="btn btn-primary btn-lg active" role="button" name="reviewbtn" value="<?php echo $row['workerid'];?>">See Review</button>
          </td>
          <td>
            
                <button type="submit" class="btn btn-primary btn-lg active" role="button" name="hirebtn" value="<?php echo $row['workerid'];?>">Hire</button>
		      
          </td>
          </form>
        </tr>
        <?php } ?>
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