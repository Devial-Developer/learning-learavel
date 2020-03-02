<!DOCTYPE html>
<html>
<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<body>



<div class="conteiner m-2">
<h1 class="text-center text-primary"> File upload in databse and fetch image on page</h1>
    <div class="row ml-5 mr-5">

            <div class="col-md-8 offset-2">

                    <form action="{{route('updateDetails')}}" enctype="multipart/form-data" method="post" >
                    {{ csrf_field() }}

                    <div class="form-group">
                    <label for="d">username:</label>
                    <input type="text" class="form-control" value="{{$update->name}}" name="username" required>
                    <input type="hidden" name="id" value="{{$update->id}}"/>
                    </div>

                    <div class="form-group">
                    <label for="file">image Upload:</label>
                    <input type="file" class="form-control" name="file" id="file" required> <br><br>
                    </div>
                    <input type="submit" class="btn btn-primary" name="btn" value="submit">

                    </form>




            </div>
      </div>
</div>









</body>
</html>
