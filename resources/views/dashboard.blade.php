

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
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
 <link href="/your-path-to-fontawesome/css/all.css" rel="stylesheet">
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
      <a class="nav-link" href="/"><button class="btn btn-outline-light my-2 my-sm-0" type="submit">Home</button></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('category')}}"> <button class="btn btn-outline-info my-2 my-sm-0 ml-2" type="submit">Category</button></a>
    </li>
    <li class="nav-item">
      <a class="nav-link" href="{{route('post')}}"> <button class="btn btn-outline-info my-2 my-sm-0 ml-2" type="submit">posts</button></a>
    </li>
       <li class="nav-item">
      <a class="nav-link" href="blog"><button class="btn btn-outline-info my-2 my-sm-0 ml-2" type="submit">Blogs</button></a>
    </li>
     <li class="nav-item">
      <a class="nav-link" href="blog_list"><button class="btn btn-outline-info my-2 my-sm-0 ml-2" type="submit">blogs-list</button></a>
    </li>
      </li>
     <li class="nav-item">
      <a class="nav-link" href="{{route('registrationCode')}}"><button class="btn btn-outline-info my-2 my-sm-0 ml-2 text-light" type="submit">Registration</button></a>
    </li>
      </li>
     <li class="nav-item">
      <a class="nav-link" href="{{route('login')}}"><button class="btn btn-outline-info my-2 my-sm-0 ml-2  text-light" type="submit">Login</button></a>
    </li>
  </ul>
</nav>
</div>

@show
<!---End-header part---->


<!---Content or body part---->
<div class="content">
@section('content')

      <div class=" w3-center">
        <h3>User-profile</h3>
      </div>

        <div class="container">
            <table class="table ">
               <thead class="bg-dark text-light">
                      <tr>
                          <th>No.Of User Login </th>
                          <th> Total-category</th>
                          <th> Total-Posts</th>
                      </tr>
               </thead>
               <tbody>
                      <tr>
                           <td> <div class="container bg-info text-center"><h1></h1> </div> </td>

                          <td> <div class="container bg-dark  text-center text-light"><h1></h1></div></td>

                          <td> <div class="container bg-info  text-center"><h1></h1></div></td>

                      </tr>
               </tbody>
            </table>
       </div>

        <div class=" w3-light-grey w3-padding-32 w3-center">
        <h1 class="w3-jumbo">Daily Ping</h1>
      </div>

      <div class="container w3-row-padding w3-margin-top">
        <div class="w3-third w3-justify">
          <h2>Empty Notebook Found</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="w3-third w3-justify">
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
        <div class="w3-third w3-justify">
          <h2>Very New News!</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
          <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        </div>
      </div>





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
