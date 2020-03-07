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

<!-- <script type="text/javascript">
$(document).ready(function(){
    var maxField = 10; //Input fields increment limitation
    var addButton = $('.add_button'); //Add button selector
    var wrapper = $('.field_wrapper'); //Input field wrapper
    var fieldHTML = '<div><input type="text" name="field_name[]" value=""/><a href="javascript:void(0);" class="remove_button">Remove</a></div>'; //New input field html 
    var x = 1; //Initial field counter is 1
    
    //Once add button is clicked
    $(addButton).click(function(){
        //Check maximum number of input fields
        if(x < maxField){ 
            x++; //Increment field counter
            $(wrapper).append(fieldHTML); //Add field html
        }
    });
    
    //Once remove button is clicked
    $(wrapper).on('click', '.remove_button', function(e){
        e.preventDefault();
        $(this).parent('div').remove(); //Remove field html
        x--; //Decrement field counter
    });
});
</script>
 -->

<script>

$(document).ready(function(){
    
    $('#add').click(function(){
          var maxField = 10;
        var inp = $('#box');
        
        var i = $('input').size() + 1;
        
        $('<div id="box' + i +'"><input type="text" id="name" class="name" name="name' + i +'" placeholder="Input '+i+'"/><img src="upload/negative.jpg" width="32" height="32" border="0" align="top" class="add" id="remove"  /></div>').appendTo(inp);
        
        i++;
        
    });
    
    
    
    $('body').on('click','#remove',function(){
        
        $(this).parent('div').remove();

        
    });

        
});

</script>

</head>
<body>
<!-- 
<div class="jumbotron text-center">
  <h1>Add Bootstrap Form </h1>
  <p>Resize this responsive page to see the effect!</p> 
</div>
  
<div class="field_wrapper">
    <div>
        <input type="text" name="field_name[]" value=""/>
        <a href="javascript:void(0);" class="add_button" title="Add field">Add_More</a>
    </div>
</div>
<button type="submit" class="btn">submit</button> -->

  <!--  @if($errors->any())
        @foreach($errors->all() as $error)
        {{ $error}}
        @endforeach
      @endif -->

  <title>Bootstrap Jquery Add More Field Example</title>
  <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.js"></script>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
<body>


<div id="box">
<form action="{{url('add')}}" method="post">
<input type="hidden" name="_token" value="{{csrf_token()}}">
<input name="name[]" type="text" id="name" class="name" placeholder="Input 1">
<a href="#" id="add"><img src="upload/add.jpg" width="42" height="42" border="0" align="top" class="add" id="remove" /></a>
<input type="submit" value="submit">
</div>












</body>
</html>
