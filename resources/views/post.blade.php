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
  <h2 class="m-5">Post form</h2>
  <form action="postCode">

   <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title.." name="title">
    </div>

    <div class="form-group">
      <label for="des">Discription:</label>
        <textarea name="Discription" rows="6" id="des" cols="100" placeholder="Hi every one write here discription.."></textarea>
    </div>

  <div class="form-group">
    <label for="sel1">Type</label>
     <select class="form-control" id="sel1" name="category_select" onchange="select(this)">Type
     <option value="">--select type--</option>
     <option>Madatary</option>
     <option>Optional</option>
     </select>
  </div>

   <div class="form-group">
    <label for="sel1">Category</label>
     <select class="form-control" id="sel1" name="category_select">
     </select>
  </div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>



<script type="text/javascript">
  function select(arg){
      var txt=arg.value;
      $.ajax({
        url:'select/'+txt,
        type:'get',
        data:{
          _token:'{{ csrf_token() }}'
        },
        success:function(data){
          console.log(data);
        }
      });

  }


</script>

</body>
</html>
