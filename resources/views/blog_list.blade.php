@extends('dashboard')

@section('content')

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
                                        <th>{{$tests->file}}</th>
                                        <th><a href="javaScript:void(0);" class="btn btn-warning" onclick="mydeleteblog('{{route('DeletePost',['id'=>$tests->id])}}');">Delete</a></th>
                                        <th><a href="{{route('('Edit_data',['id'=>$tests->edit])')}}" class="btn btn-info">Edit</a></th>
                                        <th><a href="#" class="btn btn-danger">Like</a></th>
                                        <th><a href="#"  class="btn btn-primary">Dislike</a></th>
                                        <th><a href="#"  class="btn btn-success">Comment</a></th>
                                </tr>
                                </tbody>
                            @endforeach

                    </table>
            </div>
    </div>

</div>

<script>
function mydeleteblog(deleteurl){
   if(confirm('Are sure Delete this blog-list')){
       window.location.href=deleteurl;
   }

}
</script>


@endsection
