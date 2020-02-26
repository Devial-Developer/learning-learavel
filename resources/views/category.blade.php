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
  <h2 class="m-5">Category form</h2> <button class="btn btn-info m-5" style="position:absolute; top:10px; right:50px;" onclick="window.history.back()">back</button>
  <form action="CaregoryCode">

   <div class="form-group">
      <label for="Name">Caregory-Name:</label>
      <input type="text" class="form-control" id="Name" value="{{old('Caregory')}}" placeholder="Enter Name" name="Caregory">
    </div>
 <div class="form-group">
  <label for="sel1">Select list:</label>
  <select class="form-control" id="sel1" name="category_select" value="{{old('category_select')}}" >Type
    <option>Madatary</option>
    <option>Optional</option>
  </select>
</div>

    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
</div>

</body>
</html>
