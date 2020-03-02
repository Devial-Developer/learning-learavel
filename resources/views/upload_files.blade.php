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

            <div class="col-md-5 mt-5">

                    <form action="username" method="post" enctype="multipart/form-data" >
                    {{ csrf_field() }}

                    <div class="form-group">
                    <label for="d">username:</label>
                    <input type="text" class="form-control" id="d" name="username" required>
                    </div>

                    <div class="form-group">
                    <label for="file">image Upload:</label>
                    <input type="file" class="form-control" name="file" id="file" required> <br><br>
                    </div>

                    <input type="submit" class="btn btn-primary" name="btn" value="submit">

                    </form>

            </div>

            <div class="col-md-7">

                        <table class="table tbale-border table-info text-dark">
                        <thead>
                            <tr>
                            <th> Id </th>
                            <th>Image-Name</th>
                            <th>Images</th>
                             <th>Delete Image</th>
                             <th>Edit Image</th>
                            <th>Created Time </th>
                            <th>Updated Time </th>

                        </tr>
                        </thead>

                        <tbody>
                            @foreach($res as $key=> $reses )
                            <tr>
                                    <td>{{$key+1 }}</td>
                                    <td>{{$reses->name }} </td>
                                    <td> <img src="upload/{{$reses->file }}" height="100px" width="100px"></td>
                                     <td><a href="javaScript:void(0);" onclick="deleteRecord('deleteImage/{{$reses->id}}');"><button class="btn btn-danger">Delete</button></a></td>
                                    <td><a href="edit/{{$reses->id}}"><button class="btn btn-info">Edit</button></a></td>
                                    <td>{{$reses->created_at }}</td>
                                    <td>{{$reses->updated_at }}</td>

                            </tr>
                            @endforeach

                        </tbody>
                        </table>
            </div>
      </div>
</div>




<script>
  function deleteRecord(deleteUrl){
    if(confirm("Are you sure to delete??")){
      window.location.href = deleteUrl;
    }
  }
</script>






</body>
</html>
