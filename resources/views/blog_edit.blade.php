
@extends('dashboard')

@section('content')



<div class="conteiner m-5">

    <form action="{{route('updateBlog')}}" enctype="multipart/form-data" method="post" >
    {{ csrf_field() }}

      <div class="form-group">
          <label for="Name">File Name</label>
          <input type="text" class="form-control" placeholder="Enter name" value="{{$details->file_name}}"  name="filename" id="Name">
          <input type="hidden" name="id" value=""/>
      </div>

      <div class="form-group">
            <label for="file">file:</label>
            <!-- <input type="hidden" name="preFile" id="preFile" value="{{$details->file}}"/> -->
            <input type="file" class="form-control" placeholder="Select file" id="file" value="{{$details->file}}" name="file">
      </div>

      <button type="submit" class="btn btn-primary">Submit</button>

   </form>

</div>



@endsection
