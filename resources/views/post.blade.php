@extends('dashboard')
@section('content')

<div class="container pt-2 pb-5">
  <h2>Post form</h2>
  <form action="postCode">
 @csrf
   <div class="form-group">
      <label for="title">Title:</label>
      <input type="text" class="form-control" id="title" placeholder="Enter title.." name="title">
    </div>

    <div class="form-group">
      <label for="des">Discription:</label>
        <textarea name="Discription" rows="6" id="des" cols="100" class="form-control" placeholder="Hi every one write here discription.."></textarea>
    </div>

  <div class="form-group">
    <label for="sel1">Type</label>
     <select class="form-control" id="categoryType" name="category_select" onchange="getCategoryByType();">Type
     <option value="">--select type--</option>
     <option value="Madatary">Madatary</option>
     <option value="Optional">Optional</option>
     </select>
  </div>

   <div class="form-group">
    <label for="sel1">Category</label>
     <select class="form-control" id="categories" name="category_select">
     </select>
  </div>

    <button type="submit" class="btn btn-outline-primary mb-3">Submit</button>
  </form>
</div>



<script type="text/javascript">
  function getCategoryByType(){
    var categoryType = $("#categoryType").val();
   // alert(categoryType);

      $.ajax({
        url:'getCategory/'+categoryType,
        type:'get',
        data:{
          _token:'{{ csrf_token() }}'
        },
        success:function(data){

            var categoriesHtmlData = '';

            for (var i=0; i<data.categories.length; i++) {
                var categories = data.categories[i];
                var categoryId = categories.id;
                var categoryName = categories.category_name;
                categoriesHtmlData += '<option value='+categoryId+'>'+categoryName+'</option>';
            }
            $("#categories").html(categoriesHtmlData);
        }
      });

  }

</script>
@endsection
