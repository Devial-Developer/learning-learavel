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

<div class="container m-5" >
  <h2>Category-List Table</h2> <button class="btn btn-info m-5" style="position:absolute; top:10px; right:50px;" onclick="window.history.back()">back</button>

  <table class="table ml-5">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Discription</th>
        <th>Select option</th>
      </tr>
    </thead>
    <tbody>

            @foreach($student as $key=> $students)

                  <tr>
                    <td>{{$key+1}} </td>
                    <td>{{$students->title}} </td>
                    <td>{{$students->discription}} </td>
                    <td>{{$students->category_select}} </td>
                  </tr>

             @endforeach

    </tbody>
  </table>
</div>

</body>
</html>
