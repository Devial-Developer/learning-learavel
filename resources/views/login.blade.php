@extends('dashboard')
@section('content')

<div class="container formlogin pb-5">
  <h2>LogIn form</h2>
  <!--<button class="btn btn-info m-5" style="position:absolute; top:10px; right:50px;" onclick="window.history.back()">back</button>--->
  <form action="loginCode">

    <div class="form-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" placeholder="Enter email" name="email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="pswd">
    </div>


    <button type="submit" class="btn btn-light">Submit</button>
  </form>
</div>
@endsection
