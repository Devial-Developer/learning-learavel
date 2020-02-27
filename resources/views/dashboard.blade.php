

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
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.footer{
  bottom:0px;
  right:0px;
  position:fixed;
  color:white;
  background-color:black;
  height:50px;
  width:100%;
}
.content{
  width:100%;
  height:100%;
}

</style>




<!---header part---->
@section('header')
<div class="header">

<nav class="navbar navbar-expand-sm bg-dark navbar-dark">
  <ul class="navbar-nav">
    <li class="nav-item active">
      <a class="nav-link" href="#"><button class="btn btn-outline-light my-2 my-sm-0" type="submit">Home</button></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="category"> <button class="btn btn-outline-info my-2 my-sm-0 ml-2" type="submit">Category</button></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="post"> <button class="btn btn-outline-info my-2 my-sm-0 ml-2" type="submit">posts</button></a>
    </li>
       <li class="nav-item">
      <a class="nav-link" href="#"><button class="btn btn-outline-info my-2 my-sm-0 ml-2" type="submit">Blogs</button></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="#"><button class="btn btn-outline-info my-2 my-sm-0 ml-2" type="submit">blogs-list</button></a>
    </li>
      </li>
     <li class="nav-item">
      <a class="nav-link" href=""><button class="btn btn-outline-info my-2 my-sm-0 ml-2 text-light" type="submit">Registration</button></a>
    </li>
      </li>
     <li class="nav-item">
      <a class="nav-link" href="login"><button class="btn btn-outline-info my-2 my-sm-0 ml-2  text-light" type="submit">Login</button></a>
    </li>
  </ul>
</nav>
</div>

@show
<!---End-header part---->


<!---Content or body part---->
<div class="content bg-info">
@section('content')

@show
</div>
<!--- End-Content or body part---->


<!---Footer part---->
@section('footer')
<div class="footer">
 <p class="text-center pt-2"><small>@copy this website developer by techexe it solution contect_no:7309265776</small></p>
</div>

</body>
</html>
@show
<!---End-Footer part---->
