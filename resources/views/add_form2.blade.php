<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
<script src="https://kit.fontawesome.com/a076d05399.js"></script>

<script type="text/javascript">
	
	$(document).ready(function() {
	var max_fields      = 5; //maximum input boxes allowed
	var wrapper   		= $(".input_fields_wrap"); //Fields wrapper
	var add_button      = $(".add_field_button"); //Add button ID
	
	var x = 1; //initlal text box count
	$(add_button).click(function(e){ //on add input button click
		e.preventDefault();
		if(x < max_fields){ //max input box allowed
			x++; //text box increment
			$(wrapper).append(
			'<form action="saveData" method="post">{{ csrf_field() }}<div class="m-5 form-group form-inline"><lavel for="myemail">Email:</lavel><input type="text" name="myemail" placeholder="email@gmail.com" class="form-control" required><lavel for="myage" class="ml-3">Age:</lavel><input type="number" name="myage" placeholder="20 yaer" class="form-control"><lavel for="mypwd" class="ml-3">password:</lavel><input type="password" name="mypwd" placeholder="name@123" class="form-control"></div></form><a href="#" class="remove_field ml-3"><button class="btn btn-outline-primary"><i class="fa fa-times" aria-hidden="true"></i></button></a></div></div></form>'
			); //add input box
		}
	});
	
	$(wrapper).on("click",".remove_field", function(e){ //user click on remove text
		e.preventDefault(); $(this).parent('div').remove(); x--	;
	})
});

</script>


</head>
<body>   
	   <h3 class="text-center">Add More Form to the button</h3>

    <div class="input_fields_wrap ml-5">
   
	  <form action="saveData" method="post">
	  	    {{ csrf_field() }}
	  	  <div class="m-5 form-group form-inline">

	    <lavel for="myemail">Email:</lavel>
	    <input type="text" name="myemail" placeholder="email@gmail.com" class="form-control" required>

	     <lavel for="myage" class="ml-3">Age:</lavel>
	    <input type="number" name="myage" placeholder="20 yaer" class="form-control">

	     <lavel for="mypwd" class="ml-3">password:</lavel>
	    <input type="password" name="mypwd" placeholder="name@123" class="form-control">
        
	    </div>
        <button type="submit" class="btn btn-primary ml-5">Submit</button> 
	 
	 </form>

	 <button class="add_field_button ml-5 m-2">Add More Fields</button> 


    </div>

</body>
</html>
