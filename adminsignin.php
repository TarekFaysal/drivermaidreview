<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Admin Sign in</title>
  </head>
  <body>
    <h1>Admin Sign in</h1>
	 <?php require_once 'processadminlogin.php'; ?>
    <div class="row justify-content-center">
        <form action="processadminlogin.php" method="POST">
		
		<div class="form-group">
                <label>ID</label>
                <input type="text" name="adminid" class="form-control" placeholder="Enter your Id">
            </div>
			<div class="form-group">
                <label>Password</label>
                <input type="password" name="adminPassword" class="form-control" placeholder="Enter your Password">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="signup">sign in</button>
            </div>
		</form>
    <?php
      if(@$_GET['Incorrect']==true){
    ?>
      <div class="alert-light text-danger">
      <?php echo $_GET['Incorrect'] ?>
      
      </div>
    <?php
      }

    ?>
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>