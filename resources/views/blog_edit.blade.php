
@extends('dashboard')

@section('content')

<div class="conteiner m-5">
<form action="{{route('Edit_data')}}"  method="post">

<input type="hidden" value="{{csrf_token()}}" name="_token">
  <div class="form-group">
    <label for="Name">File Name</label>
    <input type="text" class="form-control" placeholder="Enter name"  value="{{$update->file_name}}" name="filename" id="Name">
  </div>
  <div class="form-group">
    <label for="file">file:</label>
    <input type="file" class="form-control" placeholder="Select file" value="{{$update->file}}" id="file" name="file">
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
</form>

</div>



@endsection
