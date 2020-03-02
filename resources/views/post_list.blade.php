@extends('dashboard')
@section('content')

<div class="container  mb-5" >
  <h2>Post-List Table
  </h2>

  <table class="table table-hover mt-3  ">
    <thead>
      <tr>
        <th>Id</th>
        <th>Title</th>
        <th>Discription</th>
        <th>Select option</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>

            @foreach($student as $key=> $students)

                  <tr>
                    <td>{{$key+1}} </td>
                    <td>{{$students->title}} </td>
                    <td>{{$students->discription}} </td>
                   <td> category type</td>


                    <td><a href="{{route('editPost',['id'=>$students->id])}}"><button class="btn btn-outline-light"></button></a></td>
                    <td><a href="javaScript:void(0);" onclick="deleteRecord('{{route('deletePost',['id'=>$students->id])}}');"><button class="btn btn-outline-danger"><i class="fa fa-times" aria-hidden="true"></i></button></a></td>
                  </tr>

             @endforeach

    </tbody>
  </table>
</div>


<script>
  function deleteRecord(deleteUrl){
    if(confirm("Are you sure to delete??")){
      window.location.href = deleteUrl;
    }
  }
</script>

@endsection
