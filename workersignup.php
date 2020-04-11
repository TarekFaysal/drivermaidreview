<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Worker Sign up</title>
  </head>
  <body>
    <h1>Worker Sign up</h1>
    <?php require_once 'processworkersignup.php'; ?>
    <div class="row justify-content-center">
        <form action="processworkersignup.php" method="POST">

            <div class="form-group">
                <label>ID</label>
                <input type="text" name="workerid" class="form-control" placeholder="Enter your Id">
            </div>

            <div class="form-group">
                <label>Name</label>
                <input type="text" name="workername" class="form-control" placeholder="Enter your name">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" name="workerpassword" class="form-control" placeholder="Enter your Password">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" name="workerphone" class="form-control" placeholder="Enter your Phone No.">
            </div>
           
            <div class="form-group">
                <label>Adress</label>
                <input type="text" name="workeradress" class="form-control" placeholder="Enter your Adress">
            </div>
            <div class="form-group">
                <label>Age</label>
                <input type="number" name="workerage" class="form-control" placeholder="Enter your age">
            </div>
            <div class="form-group">
                <label>Gender</label>
                <input type="number" name="workergender" class="form-control" placeholder="Enter your Gender">
            </div>
            <div class="form-group">
                <label>Worker Type</label>
                <input type="number" name="workerwtype" class="form-control" placeholder="Enter your Work Type">
            </div>
            <div class="form-group">
                <label>Minimum Wage</label>
                <input type="number" name="workerminimumwage" class="form-control" placeholder="Enter your minimum wage">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-primary" name="signup">sign up</button>
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