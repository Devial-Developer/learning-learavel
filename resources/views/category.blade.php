@extends('dashboard')
@section('content')
<div class="container pb-5">
  <h2 >Category form</h2>
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

@endsection
