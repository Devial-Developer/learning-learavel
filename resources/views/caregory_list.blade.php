
@extends('dashboard')

@section('content')


<div class="container pb-5" >
  <h2>Category-List Table</h2>

  <table class="table table-hover">
    <thead>
      <tr>
        <th>Id</th>
        <th>Category-Name22</th>
        <th>Select option</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody class="text-light">

            @foreach($users as $key=> $user)

                  <tr>
                    <td>{{$key+1}} </td>
                    <td>{{$user->category_name}} </td>
                    <td>{{$user->category_type}} </td>
                    <td><a href="#"><button class="btn btn-outline-dark">Edit</button></a></td>
                      <td><a href="{{route('delete_category',['id'=>$user->id])}}"><button class="btn btn-outline-danger"><i class="fa fa-times" aria-hidden="true"></i></button></a></td>
                  </tr>

             @endforeach

    </tbody>
  </table>

</div>
@endsection
