@extends('dashboard')
@section('content')

<div class="container pb-5">
  <h2 class="p-2">Register form</h2> <button class="btn btn-light m-5" style="position:absolute; top:10px; right:50px;"> <a href="login">LogIn</a></button>
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
    <button type="submit" class="btn btn-primary mb-3">Submit</button>
  </form>
</div>

@endsection
