@extends('dashboard')

@section('content')

<script>
$(document).ready(function(){
  $("#hidecom").click(function(){
    $(".hideshow").toggle();
  });
});
</script>


<div class="container m-5">
    <div class="row">
            <div class="col-md-12">
                    <table class="table">
                            <thead class="bg-dark text-light">
                                    <tr>
                                            <th>id</th>
                                            <th>file name</th>
                                            <th>photo</th>
                                            <th>Delete</th>
                                            <th>Edit</th>
                                            <th>Like</th>
                                            <th>Dislike</th>
                                            <th>Comment</th>


                                    </tr>


                            </thead>

                            @foreach($test as $tests)
                                <tbody>
                                <tr>
                                        <th>{{$tests->id}}</th>
                                        <th>{{$tests->file_name}}</th>
                                        <th><img src="upload/{{$tests->file }}" height="100px" width="200px" class="img-thumbnail bg-dark p-1"></th>
                                        <th><a href="javaScript:void(0);" class="btn btn-warning"
                                        onclick="mydeleteblog('{{route('DeletePost',['id'=>$tests->id])}}');">Delete</a></th>

                                         <th><a href="{{route('editBlog',['id'=>$tests->id])}}" class="btn btn-info">Edit</a></th>
                                         <!--  -->
                                        <th><a href="#" class="btn btn-danger">Like</a></th>
                                        <th><a href="#"  class="btn btn-primary">Dislike</a></th>
                                        <th><a href="{{route('comment')}}"  class="btn btn-success">Comment</a></th>
                                </tr>

                               <!-- comment -->
                                       <th class="hideshow">Comment:</th>

                                        @foreach($comBlog as $comBlogs)
                                                <tr>
                                                <td><small class="hideshow">{{ $comBlogs->comment}}</small></td>
                                                </tr>
                                        @endforeach




                                </tbody>
                                <td><button id="hidecom" class="btn btn-outline-info ">hide&show</button></td>

                             @endforeach




                    </table>



            </div>


    </div>






</div>

<script>

        // msg generate for delete button--

        function mydeleteblog(deleteurl){
                if(confirm('Are sure Delete this blog-list')){
                window.location.href=deleteurl;
                }
        }


</script>


@endsection
