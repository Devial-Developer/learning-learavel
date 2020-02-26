<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2 class="m-5">Register form</h2> <button class="btn btn-info m-5" style="position:absolute; top:10px; right:50px;"> <a href="login">LogIn</a></button>
  <form action="registrationCode">
  @csrf
   <div class="form-group">
      <label for="Name">Name:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Name" name="Name">
    </div>
     <div class="form-group">
      <label for="Name">Father-Name:</label>
      <input type="text" class="form-control" id="Name" placeholder="Enter Father Name" name="Father">
    </div>
    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>
      <div class="form-group">
      <label for="pwd">DOB:</label>
      <input type="date" class="form-control" id="pwd" placeholder="Enter date" name="date">
    </div>
    <div class="form-group">
      <label for="pwd">MobileNo:</label>
      <input type="number" class="form-control" id="pwd" placeholder="Enter MobileNo" name="MobileNo">
    </div>


    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
