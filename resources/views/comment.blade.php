
@extends('dashboard')

@section('content')

<div class="conteiner m-5">
    <form action="{{route('commentInto')}}"  method="get">
        <input type="hidden" value="{{csrf_token()}}" name="_token">

            <div class="form-group">
            <label for="comment">Comment:</label>
            <textarea class="form-control" rows="5" id="comment" name="comment" placeholder="Give your comment for this BlogPost........" required></textarea>
            </div>

        <button type="submit" class="btn btn-primary">Submit</button>
    </form>

</div>

@endsection
