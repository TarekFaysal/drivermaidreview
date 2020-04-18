<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Driving Job List</title>
  </head>
  <body>
  <div class="container">
    <h1>Driving Job List</h1>
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
        <thead>
          <tr>
            <th>Posted By</th>
            <th>Phone No.</th>
            <th>Adress</th>
            <th>Salary</th>
            <th>Details</th>
            <th>Action</th>
          </tr>
        </thead>
    <?php 
      while($row = $result->fetch_assoc()):?>
        <?php if($row['wtype']==1){?>
        <tr>
          <td><?php echo $row['username']; ?></td>
          <td><?php echo $row['userphone']; ?></td>
          <td><?php echo $row['useradress']; ?></td>
          <td><?php echo $row['salary']; ?></td>
          <td><?php echo $row['details']; ?></td>
          <td>
          <a href="#" class="btn btn-primary btn-lg active" role="button" aria-pressed="true">Hire Me</a>
          </td>
        </tr>
        <?php } ?>
      <?php endwhile; ?>
      </table>

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