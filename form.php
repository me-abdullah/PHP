<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body>
    
  <form action="insert.php" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">First Name</label>
    <input type="text" name="fname" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="First Name">
    
  <div class="form-group">
    <label for="exampleInputPassword1">Last Name</label>
    <input type="text" name="lname" class="form-control" id="exampleInputPassword1" placeholder="Last Name">
  </div>

     
  <div class="form-group">
    <label for="exampleInputPassword1">Class Name</label>
    <input type="text" name="cname" class="form-control" id="exampleInputPassword1" placeholder="Class Name">
  </div>

     
  <div class="form-group">
    <label for="exampleInputPassword1">Group Name</label>
    <input type="text" name="gname" class="form-control" id="exampleInputPassword1" placeholder="Group Name">
  </div>

     
  <div class="form-group">
    <label for="exampleInputPassword1">Contact Number</label>
    <input type="number" name="contact" class="form-control" id="exampleInputPassword1" placeholder="Contact Number">
  </div>
  
  <button type="submit" name="insert" class="btn btn-primary">Insert</button>
  <button type="submit" name="select" class="btn btn-success">Select</button>
  <button type="submit" name="delete" class="btn btn-danger">Delete</button>
  <button type="submit" name="update" class="btn btn-dark">Update</button>
</form>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>