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
    <title>Job Post</title>
  </head>
  <body>
  <a class="btn btn-outline-info" href="postajob.php" role="button">Job Post</a>
  <div class="container">

    <?php require_once 'processpostajob.php'; ?>
    <div class="row justify-content-center">
        <form action="processpostajob.php" method="POST">

            <div class="form-group">
                <label>Job ID</label>
                <input type="text" name="jobid" class="form-control" placeholder="Enter Job Id">
            </div>
            
            <div class="form-group">
                <label>Worker Type</label>
                <input type="number" name="wtype" class="form-control" placeholder="Enter Worker Type">
            </div>
            <div class="form-group">
                <label>Salary</label>
                <input type="number" name="salary" class="form-control" placeholder="Enter salary">
            </div>
            <div class="form-group">
                <label>Details</label>
                <input type="text" name="details" class="form-control" placeholder="Enter any Details">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="postajob">Post a Job</button>
            </div>
        </form>
    </div>
    
    </div>

    <?php
      if(@$_GET['Incorrect']==true){
    ?>
      <div style="text-align:center;" class="text-danger">
      <?php echo $_GET['Incorrect'] ?>
      
      </div>
    <?php
      }

    ?>
    <a href="user.php" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Go Back</a>    
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

      <?php } ?>