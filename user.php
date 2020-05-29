<?php session_start();
      if(isset($_SESSION['userid'])){ 
        
        $userid = $_SESSION['userid'];
  
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
    <title>User</title>
  </head>
  <body>
  <a class="btn btn-outline-info" href="user.php" role="button">User</a>
  <p>Welcome <?php echo $userid?></p>

    <div class="row justify-content-center">
    <div class="topnav">
       
       <a href="lookingfordrivers.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Looking For Drivers</a>
       <a href="lookingformaids.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Looking For Maids</a>
       </div>
    <div class="topnav">
    <form action="" method="POST">
    <a href="postajob.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Post a Job</a>
        <a href="myworkers.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">My Workers</a>
        <a href="usermassage.php" class="btn btn-secondary btn-lg active" role="button" aria-pressed="true">Massage</a>
        <a href="processlogout.php?logout" class="btn btn-warning btn-lg active" role="button" aria-pressed="true">Logout</a>
</div> 
       
       
        </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>

      <?php } ?>